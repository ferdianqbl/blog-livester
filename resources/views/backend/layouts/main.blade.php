<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="/images/logo.svg">
    <title>BlogLivester | {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/dashboard/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    {{-- TRIX EDITOR --}}
    <link rel="stylesheet" type="text/css" href="/dashboard/css/trix.css">
    <script type="text/javascript" src="/dashboard/js/trix.js" defer></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    @include('backend.layouts.navbar')
    <div id="layoutSidenav">
        @include('backend.layouts.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('container')
                </div>
            </main>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/dashboard/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/dashboard/js/datatables-simple-demo.js"></script>
</body>

</html>