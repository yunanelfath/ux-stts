<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quesioner Kepuasan Mahasiswa Pasca Sarjana STTS</title>
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="og:title" content="@yield('title')" >
    <meta name="twitter:title" content="@yield('title')">
    <meta name="description" property="og:description" content="@yield('description')">
    <meta name="twitter:description" content="@yield('description')">

</head>
<body data-aos-easing="ease-out-back" data-aos-duration="1000" data-aos-delay="0">
@yield('content')
<script src="{{ url(elixir('js/home-index.js')) }}"></script>
</body>
</html>
