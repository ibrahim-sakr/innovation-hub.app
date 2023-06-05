@props(['type' => 'page'])

<!doctype html>
<html class="no-js" lang="en">

<head>
    <x-layouts.parts.meta></x-layouts.parts.meta>

    <title>Innovation Hub</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <x-layouts.parts.styles></x-layouts.parts.styles>
</head>

<body>
<div class="main-wrapper">
    <x-dynamic-component :component="'layouts.' . $type . '.header'"></x-dynamic-component>

    {{ $slot }}

    <x-dynamic-component :component="'layouts.' . $type . '.footer'"></x-dynamic-component>
</div>
<x-back-to-top></x-back-to-top>

<x-layouts.parts.scripts></x-layouts.parts.scripts>
</body>

</html>
