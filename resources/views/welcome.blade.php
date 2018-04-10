<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>

    <body class="h-full">
        <div class="inline-block w-full h-3 absolute pin-t" style="background: linear-gradient(90deg, #FC466B 0%, #3F5EFB 100%);"></div>

        <div id="app" v-cloak class="relative z-0 h-full container mx-auto mb-32">
            <div class="h-full py-18">
                <h1 class="font-thin text-5xl text-center mb-12 hover:text-brand">
                    <a href="https://arcomm.co.uk" target="_newtab">ARCOMM</a>
                </h1>

                <img src="{{ url('/images/arcomm/1.jpg') }}">
                <img src="{{ url('/images/arcomm/2.jpg') }}">
                <img src="{{ url('/images/arcomm/3.jpg') }}">
                <img src="{{ url('/images/arcomm/4.jpg') }}">
                <img src="{{ url('/images/arcomm/5.jpg') }}">

                <h1 class="font-thin text-5xl text-center mb-12 mt-32">
                    The Bunnery Bakery
                </h1>

                <img src="{{ url('/images/bunnery/1.jpg') }}">
                <img src="{{ url('/images/bunnery/2.jpg') }}">
                <img src="{{ url('/images/bunnery/3.jpg') }}">
                <img src="{{ url('/images/bunnery/4.jpg') }}">
                <img src="{{ url('/images/bunnery/5.jpg') }}">
                <img src="{{ url('/images/bunnery/6.jpg') }}">
                <img src="{{ url('/images/bunnery/7.jpg') }}">
                <img src="{{ url('/images/bunnery/8.jpg') }}">
                <img src="{{ url('/images/bunnery/9.jpg') }}">
                <img src="{{ url('/images/bunnery/10.jpg') }}">
                <img src="{{ url('/images/bunnery/11.jpg') }}">

                <h1 class="font-thin text-5xl text-center mb-12 mt-32">
                    EPOS
                </h1>

                <img src="{{ url('/images/epos/1.jpg') }}">
                <img src="{{ url('/images/epos/2.jpg') }}">
                <img src="{{ url('/images/epos/3.jpg') }}">
                <img src="{{ url('/images/epos/4.jpg') }}">
                <img src="{{ url('/images/epos/5.jpg') }}">
                <img src="{{ url('/images/epos/6.jpg') }}">

                <h1 class="font-thin text-5xl text-center mb-12 mt-32 hover:text-brand">
                    <a href="https://app.smallstone.uk" target="_newtab">Finance</a>
                </h1>

                <img src="{{ url('/images/finance/1.jpg') }}">
                <img src="{{ url('/images/finance/2.jpg') }}">
                <img src="{{ url('/images/finance/3.jpg') }}">
                <img src="{{ url('/images/finance/4.jpg') }}">

                <h1 class="font-thin text-5xl text-center mb-12 mt-32 hover:text-brand">
                    <a href="https://mars.smallstone.uk" target="_newtab">Mars</a>
                </h1>

                <img src="{{ url('/images/mars/1.jpg') }}">
                <img src="{{ url('/images/mars/2.jpg') }}">
                <img src="{{ url('/images/mars/3.jpg') }}">
                <img src="{{ url('/images/mars/4.jpg') }}">

                <h1 class="font-thin text-5xl text-center mb-12 mt-32">
                    Suite3
                </h1>

                <img src="{{ url('/images/suite3/1.jpg') }}">

                <h1 class="font-thin text-5xl text-center mb-12 mt-32 hover:text-brand">
                    <a href="https://smallstone.uk" target="_newtab">Portfolio</a>
                </h1>

                <img src="{{ url('/images/smallstone/1.jpg') }}">
            </div>
        </div>
    </body>
</html>
