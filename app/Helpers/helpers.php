<?php

use Illuminate\Support\Facades\Session;

if (!function_exists('flash')) {
    function flash(string $message, string $type = 'success'): void
    {
        Session::flash('message', $message);
        Session::flash('type', $type);
    }
}
