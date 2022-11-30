<?php

use App\Models\Activity;
use App\Models\ActivityClient;
use App\Models\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
//    return view('activities');
    return redirect()->route('activities', ['name' => 'binary-code']);
});

Route::get('/{name}', function (string $name) {
    return view('activities.' . $name, [
        'name' => $name
    ]);
})->name('activities');

Route::post('/contact', function (Request $request) {
    try {
        $client = Client::firstOrCreate(
            ['email' => $request->input('email')],
            ['name' => $request->input('name')]
        );

        $activity = Activity::firstOrCreate(['name' => $request->input('activity')]);

        $activity_client_count = ActivityClient::where([
            ['activity_id', '=', $activity->id],
            ['client_id', '=', $client->id],
        ])->count();

        if ($activity_client_count) {

            return back()->with('info', 'you already registered to this Activity');
        }

        $activity_client = new ActivityClient([
            'activity_id' => $activity->id,
            'client_id' => $client->id,
        ]);

        $activity_client->save();

        // send email

        // after email success
        $activity_client->is_emailed = 1;
        $activity_client->save();
    } catch (\Exception $e) {
        Log::error($e->getMessage());

        return back()->with('fail', 'registration Failed, please try again in a while');
    }

    return back()->with('success', 'you have registered to Activity Successfully');
})->name('contact');
