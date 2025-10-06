<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }
        #accordionSidebar {
            width: 250px;
            transition: width 0.3s;
        }
        #accordionSidebar.toggled {
            width: 70px;
        }
        #accordionSidebar.toggled .sidebar-brand-text,
        #accordionSidebar.toggled .nav-link span,
        #accordionSidebar.toggled .sidebar-heading {
            display: none;
        }
        #content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body id="page-top">

    @include('layouts.sidebar')

    <div id="content-wrapper">
        @include('layouts.topbar')

        <div class="container-fluid py-3">
            @yield('content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $("#sidebarToggle, #sidebarToggleTop").on('click', function () {
        $("#accordionSidebar").toggleClass("toggled");

        if ($("#accordionSidebar").hasClass("toggled")) {
            $(".toggle-text").text("");
            $("#sidebarToggle i").removeClass("fa-angle-double-left").addClass("fa-angle-double-right");
        } else {
            $(".toggle-text").text("");
            $("#sidebarToggle i").removeClass("fa-angle-double-right").addClass("fa-angle-double-left");
        }
    });
</script>

</body>
</html>
