<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    @yield('title')

    <link rel="icon" type="image/x-icon" href={{ asset('images/favicon.png') }}>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-[100vh] antialiased">
    <nav class="border-gray-200 bg-black">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
            <a href="/" class="flex items-center">
                <img src={{ asset('images/logo.png') }} class="mr-3 h-12" alt="Flowbite Logo" />
            </a>
            <div class="flex md:order-2">
                <button type="button"
                    class="mr-3 rounded-full bg-[#90B523] px-4 py-2 text-center text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 md:mr-0">Kontak
                    kami</button>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-cta">
                <ul
                    class="mt-4 flex flex-col rounded-lg border p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:p-0 md:dark:bg-gray-900">
                    <li>
                        <a href="/"
                            class="block rounded bg-[#90B523] py-2 pl-3 pr-4 text-white md:bg-transparent md:p-0 md:text-[#90B523] md:dark:text-[#90B523]"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block rounded py-2 pl-3 pr-4 text-white hover:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:hover:text-slate-400 md:dark:hover:bg-transparent md:dark:hover:text-[#90B523]">About</a>
                    </li>
                    <li>
                        <a href="/menu"
                            class="block rounded py-2 pl-3 pr-4 text-white hover:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:p-0 md:hover:bg-transparent md:hover:text-slate-400 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-inter sticky top-[100%] bg-black py-5 text-center text-white">
        &copy; 2023 Burgerbangorporis.com
    </footer>
</body>

</html>
