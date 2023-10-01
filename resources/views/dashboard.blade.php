<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/iofrm-style.css') }}">

</head>
<body>
    <div class="preview-body" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="web-logo" style="text-align: center; margin-left:44%">

                        <img src="{{ asset('assets/images/logo-dark.svg') }}" alt="">
                    </div>
                    <div class="web-title">
                        Forms in style.<br>
                        For all purposes and websites.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form1.jpg') }}" alt="">

                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form3.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form4.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form5.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form6.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form7.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form8.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form9.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form10.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form11.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form12.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form13.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form14.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form15.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <a class="img-link" target="_blank" href="#">
                        <img src="{{ asset('assets/img/form16.jpg') }}" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
