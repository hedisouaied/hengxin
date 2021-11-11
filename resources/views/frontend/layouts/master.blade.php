
<!doctype html>
<html lang="en">

<head>
    @include('frontend.layouts.head')

</head>

<body class="th-18 inner-pages">
    <!-- Wrapper -->
    <div id="wrapper">

    <!-- Header Area -->
@include('frontend.layouts.header')
    <!-- Header Area End -->

@yield('content')

    <!-- Footer Area -->
@include('frontend.layouts.footer')
    <!-- Footer Area -->

@include('frontend.layouts.script')
</div>
<!-- Wrapper / End -->
</body>

</html>
