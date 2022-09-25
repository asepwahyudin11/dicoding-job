<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<!-- HTML Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dicoding Indonesia - Jobs</title>
    <meta name="description" content="">

    @stack('before_header_stack')
        <link href="/assets/vendor/coreui-4.0.0-dist/css/coreui.css" rel="stylesheet">
        <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom CSS Style -->
        <link href="/assets/css/custom.css" rel="stylesheet">
    @stack('after_header_stack')
    @yield('custom-styles')
</head>

<body>
    @yield('content')

    @stack('before_footer_stack')
        <script type="text/javascript" src="/assets/vendor/coreui-4.0.0-dist/js/coreui.bundle.min.js"></script>
    @stack('after_footer_stack')
    @yield('custom-script')
</body>

</html>
