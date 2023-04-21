<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>RSUD DAYAKU RAJA</title>

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    @include('sweetalert::alert')
    @yield('login')
    @yield('dashboard')
    @yield('landing')
    

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/Ckeditor.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('assets/js/referensi.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <script src="{{ asset('assets/js/validasi.js') }}"></script>
    <script>
        $('#tabel-user').on('click','.action', function(){
            let data = $(this).data()
            console.log(data);
        })
    </script>
</body>
<!--end::Body-->

</html>
