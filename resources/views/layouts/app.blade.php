<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>{{ config('app.name', 'Welcome to vURS') }}</title>
    {{-- Custom Style --}}
    <link rel="stylesheet" type="text/css" href="../../css/app.css">
    {{-- Style Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    {{-- Fontawesome 6 --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300" rel="stylesheet" type="text/css">

    <style>
        .fancy-top-features-area {
            position: relative;
            /* z-index: 99; */
            margin: 0 auto 0 auto;
            justify-content: center;
            align-items: center;
            /* flex: 1; */
            text-align: center;
        }

        .fancy-top-features-content {
            /* position: absolute; */
            width: 100%;
            /* z-index: 99; */
            /* bottom: 50%; */
            /* -webkit-transform: translateY(50%); */
            /* transform: translateY(50%); */
            left: 0;
            box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.15);
            border-radius: 2px;
            margin: auto;
        }

        .single-top-feature {
            padding: 45px;
            background-color: #fff;
            /* position: relative; */
            z-index: 1;
            margin: auto;

        }

        .wel-bg {
            background-image: url(https://image.freepik.com/free-photo/copy-spaced-background-with-studying-items_23-2147864599.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: inset 0 0 0 2000px rgba(13, 68, 78, 0.295);
        }

        .bg-gray {
            background-color: #f7f7f7;
        }

        .single-top-feature h5 i {
            color: #2bc0a4;
        }

        .no-gutters>.col,
        .no-gutters>[class*=col-] {
            padding-right: 0;
            padding-left: 0;
            border-left: .5px solid #2bc0a4;
            border-right: .5px solid #2bc0a4;
        }

        .cus-btn {
            border:
        }

        footer {
            /* background-color: aquamarine; */
            margin-top: 30px;
            padding-bottom: 30px;
            bottom: 0;
            position: fixed;
            margin-bottom: 0 !important;
            width: 100%
        }

    </style>
</head>

<body>
    @include('includes.navbar')
    @include('includes.header')
    <div class="">
        @yield('content')
    </div>
    @include('includes.footer')

    {{-- Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
