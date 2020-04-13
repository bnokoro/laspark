<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Laspark | Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="http://lexa-v.laravel.themesbrand.com/assets/images/favicon.ico">
{{--
        <link rel="stylesheet" href="/admin/css/morris.css"> --}}
        <link rel="stylesheet" href="http://lexa-v.laravel.themesbrand.com/assets/plugins/morris/morris.css">

        <link href="/dash/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/dash/css/metismenu.css" rel="stylesheet" type="text/css">
        <link href="/dash/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/dash/css/style.css" rel="stylesheet" type="text/css"></head>
    <link rel="stylesheet" href="/font-awesome/css/all.css">
<body>

@include('admin.header')


@include('admin.sidebar')


<!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                  <div class="container-fluid">

@yield('content')

                    </div> <!-- container-fluid -->
                </div> <!-- content -->
            </div>
@include('admin.footer')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

@yield('scripts')
</body>
</html>
