<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=0.9, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diaco</title>

    <link rel="apple-touch-icon" sizes="57x57" href={{asset("/fav/apple-icon-57x57.png")}}>
    <link rel="apple-touch-icon" sizes="60x60" href={{asset("/fav/apple-icon-60x60.png")}}>
    <link rel="apple-touch-icon" sizes="72x72" href={{asset("/fav/apple-icon-72x72.png")}}>
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("/fav/apple-icon-76x76.png")}}>
    <link rel="apple-touch-icon" sizes="114x114" href={{asset("/fav/apple-icon-114x114.png")}}>
    <link rel="apple-touch-icon" sizes="120x120" href={{asset("/fav/apple-icon-120x120.png")}}>
    <link rel="apple-touch-icon" sizes="144x144" href={{asset("/fav/apple-icon-144x144.png")}}>
    <link rel="apple-touch-icon" sizes="152x152" href={{asset("/fav/apple-icon-152x152.png")}}>
    <link rel="apple-touch-icon" sizes="180x180" href={{asset("/fav/apple-icon-180x180.png")}}>
    <link rel="icon" type="image/png" sizes="192x192"  href={{asset("/fav/android-icon-192x192.png")}}>
    <link rel="icon" type="image/png" sizes="32x32" href={{asset("/fav/favicon-32x32.png")}}>
    <link rel="icon" type="image/png" sizes="96x96" href={{asset("/fav/favicon-96x96.png")}}>
    <link rel="icon" type="image/png" sizes="16x16" href={{asset("/fav/favicon-16x16.png")}}>
    <link rel="manifest" href={{asset("/fav/manifest.json")}}>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content={{asset("/fav/ms-icon-144x144.png")}}>
    <meta name="theme-color" content="#ffffff">
</head>
<body class="font-piazzolla">

@include('loading.loading')

    @includeIf("navbar.navbar")
    @yield("content")
@includeIf("footer.footer")

@viteReactRefresh
@vite(["resources/scss/public.scss", "resources/js/public.js"])
</body>
</html>
