<?php

namespace App\Http\Controllers;

use App\Mail\ActivitySubscribed;
use App\Mail\CategorySubscribed;
use App\Mail\FreeSessionSubscribed;
use App\Models\Registration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{

    public function freeSession(Request $request): RedirectResponse
    {
        // save into DB
        $register = Registration::create([
            'model_id' => $request->input('schedule'),
            'model_type' => Registration::TYPE_SCHEDULE,
            'details' => [
                'parent' => [
                    'name' => $request->input('parent_name'),
                    'email' => $request->input('parent_email'),
                    'phone' => $request->input('parent_phone')
                ],
                'child' => [
                    'name' => $request->input('child_name'),
                    'age' =>  $request->input('child_age')
                ]
            ]
        ]);

        try {
            // send email
            Mail::to($request->input('parent_email'))->send(new FreeSessionSubscribed($register));

            $register->update([
                'is_emailed' => 1
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
        }

        flash('you got an email with extra information');

        return redirect()->back();
    }

    public function course(): RedirectResponse
    {

        return redirect()->back();
    }

    public function category(Request $request): RedirectResponse
    {
        $register = Registration::create([
            'model_id' => $request->input('category_id'),
            'model_type' => Registration::TYPE_CATEGORY,
            'details' => [
                'parent' => [
                    'name' => $request->input('parent_name'),
                    'email' => $request->input('parent_email'),
                    'phone' => $request->input('parent_phone')
                ],
                'child' => [
                    'name' => $request->input('child_name'),
                    'age' =>  $request->input('child_age')
                ]
            ]
        ]);

        try {
            // send email
            Mail::to($request->input('parent_email'))->send(new CategorySubscribed($register));

            $register->update([
                'is_emailed' => 1
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
        }

        flash('you got an email with extra information');

        return redirect()->back();
    }

    public function activity(Request $request): RedirectResponse
    {
        $register = Registration::create([
            'model_id' => $request->input('activity_id'),
            'model_type' => Registration::TYPE_ACTIVITY,
            'details' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'whatsapp' => $request->input('whatsapp')
            ]
        ]);

        try {
            // send email
            Mail::to($request->input('email'))->send(new ActivitySubscribed($register));

            $register->update([
                'is_emailed' => 1
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $e->getTrace());
        }

        flash('you got an email with extra information');

        return redirect()->back();
    }

    public function feedback(): RedirectResponse
    {

        return redirect()->back();
    }

    public function hiring(): RedirectResponse
    {

        return redirect()->back();
    }
}
