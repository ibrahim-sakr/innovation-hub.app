<?php

namespace App\Http\Controllers;

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
            Log::error('failed to send email');
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
            Log::error('failed to send email');
        }

        flash('you got an email with extra information');

        return redirect()->back();
    }

    public function activity(): RedirectResponse
    {

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
