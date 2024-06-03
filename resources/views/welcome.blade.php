<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WeatherAPP</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-blue-200 bg-gradient-to-tr from-blue-200 to blue-400 min-h-screen">
        <div class="mt-8">
            <div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden">
                <div class="current-weather relative flex items-center justify-between px-4 py-6">
                    <div class="flex items-center">
                        <div>
                            <div class="text-5xl font-semibold">40&#176;C</div>
                            <div class="text-gray-400">Feels like 50&#176;C</div>
                        </div>
                        <div class="ml-5">
                            <div class="font-semibold">Semarang</div>
                            <div class="font-semibold">Jawa tengah, Indonesia</div>
                        </div>
                    </div> 
                </div>
                <ul class="bg-gray-800 px-4 py-6 space-y-8">
                    <li class="grid items-center">
                        <div class="text-gray-400">TUE</div>
                        <div class="flex items-center">
                            <div>Icon</div>
                            <div>Clear</div>
                        </div>
                    </li>
                    <li class="grid items-center">
                        <div class="text-gray-400">TUE</div>
                        <div class="flex items-center">
                            <div>Icon</div>
                            <div>Clear</div>
                        </div>
                    </li>
                    <li class="grid items-center">
                        <div class="text-gray-400">TUE</div>
                        <div class="flex items-center">
                            <div>Icon</div>
                            <div>Clear</div>
                        </div>
                    </li>
                    <li class="grid items-center">
                        <div class="text-gray-400">TUE</div>
                        <div class="flex items-center">
                            <div>Icon</div>
                            <div>Clear</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </body>

    </body>
</html>
