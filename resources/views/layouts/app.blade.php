<!DOCTYPE html>

<html class="loading" lang="de" data-textdirection="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="rtkKZtiLoDwuMRXMoizfn1SwiYvgqrrPY9dkk9Gw">
    <title>GYM | A Place to Release Stress</title>
    <x-styles />
</head>

@stack('styles')

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu 2-columns  "
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <x-header />

    <x-sidebar />

    <div id="main">

    {{ $slot }}

    </div>

    <x-footer />

    <x-scripts />
    @stack('scripts')
</body>

</html>
