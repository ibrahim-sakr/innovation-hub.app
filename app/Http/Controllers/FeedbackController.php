<?php

namespace App\Http\Controllers;

use App\Mail\ClientRegisteredToFeedback;
use App\Models\Client;
use App\Models\Feedback;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('feedback.index');
    }

    public function feedback(Request $request)
    {
//    - validate form => dpne
//    - save client => done
//    - save feedback => done
//    - send pdf as attached => done
//    - return success message => done
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'feedback' => ['required', 'min:5'],
        ]);

        if ($validation->fails()) {
            return redirect()
                ->route('feedback.index')
                ->withFragment('feedback')
                ->withErrors($validation)
                ->withInput();
        }

        $client = $this->getClient($request->all());

        $this->saveFeedback([
            'feedback' => $request->input('feedback'),
            'client_id' => $client->id,
        ]);

        Mail::to($client->email)->send(new ClientRegisteredToFeedback());

        return redirect()
            ->route('feedback.index')
            ->withFragment('feedback')
            ->with('success', 'you are awesome, and your feedback indeed make us better');
    }

    private function getClient(array $data): Client
    {
        return Client::updateOrCreate(
            ['email' => $data['email']],
            [
                'name' => $data['name'],
                'phone' => $data['phone'],
            ],
        );
    }

    private function saveFeedback(array $data): Feedback
    {
        return Feedback::create(
            [
                'feedback' => $data['feedback'],
                'client_id' => $data['client_id']
            ],
        );
    }
}
