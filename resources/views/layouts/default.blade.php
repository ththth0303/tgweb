<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{ config('app.name') }}</title>

    @include('layouts.includes.style')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    @include('layouts.includes.header')

    @include('layouts.includes.about')

    @include('layouts.includes.portfolio')

    @include('layouts.includes.service')

    @include('layouts.includes.choose_us')

    @include('layouts.includes.number')

    @include('layouts.includes.pricing')

    @include('layouts.includes.testimonial')

    @include('layouts.includes.team')

    @include('layouts.includes.blog')

    @include('layouts.includes.contact')

    @include('layouts.includes.footer')

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    @include('layouts.includes.script')

</body>

</html>
