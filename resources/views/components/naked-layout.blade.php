<!doctype html>
<html class="no-js" lang="en">

<head>
    <x-layouts.parts.meta></x-layouts.parts.meta>

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <x-layouts.parts.styles></x-layouts.parts.styles>
</head>

<body>
<div class="main-wrapper">
</div>
    {{ $slot }}
</body>
</html>
