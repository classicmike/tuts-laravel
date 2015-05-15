<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatable" content="IE=edge,chrome=1" />
    <title>Users</title>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trun/html5.js"></script>
    <![endif] -->
</head>
<body>

    @include('partials.menu')

    @yield('content')

    @section('sidebar')
        <h2>Links</h2>
    @show
</body>
</html>