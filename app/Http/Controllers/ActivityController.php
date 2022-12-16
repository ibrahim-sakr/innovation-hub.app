<?php

namespace App\Http\Controllers;

use App\Mail\ClientRegisteredToActivity;
use App\Models\Activity;
use App\Models\ActivityClient;
use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    public function index(): RedirectResponse
    {
//        return view('activities');
        return redirect()->route('activities', ['name' => 'binary-code']); // multiplication-table
    }

    public function activity(string $name): Factory|View|Application
    {
        $viewName = 'activities.' . $name;
        if (view()->exists($viewName)) {

            return view($viewName, [
                'name' => $name,
                'title' => Str::title(str_replace('-', ' ', $name))
            ]);
        }

        return abort(404);
    }

    public function contact(Request $request): RedirectResponse
    {
        try {
            $client = $this->getClient($request->all());
            $activity = $this->getActivity($request->all());
            $activity_client = $this->getActivityClient($activity->id, $client->id);

            if ($activity_client->exists) {
                $this->sendMail($client, $activity);

                if (!$activity_client->is_emailed) {
                    // after email success
                    $activity_client->is_emailed = 1;
                    $activity_client->save();
                }

                return back()->with('info', 'you already registered to this Activity before and we send the email again.');
            }

            $this->sendMail($client, $activity);

            $activity_client->is_emailed = 1;
            $activity_client->save();

        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return back()->with('fail', 'registration Failed, please try again in a while');
        }

        return back()->with('success', 'you have registered to Activity Successfully');
    }

    private function sendMail(Client $client, Activity $activity)
    {
        Mail::to($client->email)
            ->send(new ClientRegisteredToActivity(
                client: $client,
                activityName: $activity->name
            ));
    }

    private function getClient(array $data): Client
    {
        return Client::firstOrCreate(
            ['email' => $data['email']],
            ['name' => $data['name']]
        );
    }

    private function getActivity(array $data): Activity
    {
        return Activity::firstOrCreate(['name' => $data['activity']]);
    }

    private function getActivityClient(int $activity_id, int $client_id): ActivityClient|null
    {
        $activity = ActivityClient::where([
            ['activity_id', '=', $activity_id],
            ['client_id', '=', $client_id],
        ])->first();

        if (!$activity) {
            return new ActivityClient([
                'activity_id' => $activity_id,
                'client_id' => $client_id
            ]);
        }

        return $activity;
    }
}
