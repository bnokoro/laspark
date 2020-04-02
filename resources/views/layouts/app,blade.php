<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="http://lexa-v.laravel.themesbrand.com/assets/images/favicon.ico">

        <link rel="stylesheet" href="http://lexa-v.laravel.themesbrand.com/assets/plugins/morris/morris.css">

        <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/admin/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="/admin/css/icons.css" rel="stylesheet" type="text/css">
        <link href="/admin/css/style.css" rel="stylesheet" type="text/css">  </head>
<body>
          <!-- Begin page -->
          <div id="wrapper">
      <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index" class="logo">
                        <span>
                            <img src="/admin/images/logo-light.png" alt="" height="18">
                        </span>
                        <i>
                            <img src="/admin/images/logo-sm.png" alt="" height="22">
                        </i>
                    </a>
                </div>

@include('admin.header')

            </div>
            <!-- Top Bar End -->
      <!-- ========== Left Sidebar Start ========== -->
@include('admin.sidebar')

@include('admin.footer')
    </body>
</html>