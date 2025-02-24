<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E Commerce SpeedRun</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
 <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>

<body>
<h1 class="text-center text-5xl py-10">Lets Get Rolling</h1>

<div class="flex justify-center">
<a href="/admin">
<h1 class="px-2">Go To Admin</h1>
</a>

<a href="/vendor">
<h1 class="px-2">Go To Vendor</h1>
</a>

<a href="/customer">
<h1 class="px-2">Go To Customer</h1>
</a>
</div>

<a href="/products">
<h1 class="text-5xl text-center py-5">Products</h1>
</a>

</body>
</html>
