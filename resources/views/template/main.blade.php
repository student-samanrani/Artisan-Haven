<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @yield('style')

</head>
<body>
    @include('navbar')

    @yield('content')

    @include('footer')

    @yield('script')

    </body>
    
    </html>