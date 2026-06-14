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
        return view('feedback-old.index');
    }

    function index2(): Factory|View|Application
    {
        return view('feedback-old');
    }

    public function feedback(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'feedback-old' => ['required', 'min:5'],
        ]);

        if ($validation->fails()) {
            return redirect()
                ->route('feedback-old.index')
                ->withFragment('feedback-old')
                ->withErrors($validation)
                ->withInput();
        }

        $client = $this->getClient($request->all());

        $this->saveFeedback([
            'feedback-old' => $request->input('feedback-old'),
            'client_id' => $client->id,
        ]);

        Mail::to($client->email)->send(new ClientRegisteredToFeedback());

        return redirect()
            ->route('feedback-old.index')
            ->withFragment('feedback-old')
            ->with('success', 'you are awesome, and your feedback-old indeed make us better');
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
                'feedback-old' => $data['feedback-old'],
                'client_id' => $data['client_id']
            ],
        );
    }
}
