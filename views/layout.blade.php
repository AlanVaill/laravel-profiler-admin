<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profiler Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/vendor/profiler-admin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/vendor/profiler-admin/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/vendor/profiler-admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="/vendor/profiler-admin/css/matrix-style.css" />
    <link rel="stylesheet" href="/vendor/profiler-admin/css/matrix-media.css" />
    <link href="/vendor/profiler-admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/vendor/profiler-admin/css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Profiler Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->

<!-- end top header -->
<!--sidebar-menu-->
@include('profiler-admin::includes/sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    @include('profiler-admin::includes/breadcrumbs')
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    @yield('content')
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="/vendor/profiler-admin/js/excanvas.min.js"></script>
<script src="/vendor/profiler-admin/js/jquery.min.js"></script>
<script src="/vendor/profiler-admin/js/jquery.ui.custom.js"></script>
<script src="/vendor/profiler-admin/js/bootstrap.min.js"></script>
<script src="/vendor/profiler-admin/js/jquery.flot.min.js"></script>
<script src="/vendor/profiler-admin/js/jquery.flot.resize.min.js"></script>
<script src="/vendor/profiler-admin/js/jquery.peity.min.js"></script>
<script src="/vendor/profiler-admin/js/fullcalendar.min.js"></script>
<script src="/vendor/profiler-admin/js/matrix.js"></script>
<script src="/vendor/profiler-admin/js/matrix.dashboard.js"></script>
<script src="/vendor/profiler-admin/js/jquery.gritter.min.js"></script>
<script src="/vendor/profiler-admin/js/matrix.interface.js"></script>
<script src="/vendor/profiler-admin/js/matrix.chat.js"></script>
<script src="/vendor/profiler-admin/js/jquery.validate.js"></script>
<script src="/vendor/profiler-admin/js/matrix.form_validation.js"></script>
<script src="/vendor/profiler-admin/js/jquery.wizard.js"></script>
<script src="/vendor/profiler-admin/js/jquery.uniform.js"></script>
<script src="/vendor/profiler-admin/js/select2.min.js"></script>
<script src="/vendor/profiler-admin/js/matrix.popover.js"></script>
<script src="/vendor/profiler-admin/js/jquery.dataTables.min.js"></script>
<script src="/vendor/profiler-admin/js/matrix.tables.js"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>
</html>