<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- HTMX -->
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/delete-animation.css') }}">

    <style>
        body {
            background-color: #f3f4f6; /* Light grey background */
        }
        .sidebar {
            background-color: #375175; /* Darker grey for sidebar */
        }
        .sidebar a:hover {
            background-color: #374151; /* Slightly lighter grey for hover effect */
        }
        .sidebar h2 {
            color: #fbbf24; /* Amber for the title */
        }
        .footer {
            background-color: #111827; /* Darkest grey for footer */
        }
        .footer p {
            color: #d1d5db; /* Light grey for footer text */
        }
        .content {
            background-color: #ffffff; /* White for content */
        }
    </style>
</head>
<body class="flex">
    <div class="sidebar w-64 h-screen text-white flex flex-col fixed shadow-lg">
        <div class="text-center py-6 border-b border-gray-700">
            <h2 class="text-3xl font-bold">Products</h2>
        </div>
        <nav id="main-nav" class="flex flex-col mt-6 space-y-2">
            <a href="/" class="p-3 flex items-center hover:bg-gray-700 transition duration-300">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 9v6m0-6H4m8 0h8"></path></svg>
                Home
            </a>
            <a href="/about" class="p-3 flex items-center hover:bg-gray-700 transition duration-300">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18"></path></svg>
                About
            </a>
            <a href="/product" class="p-3 flex items-center hover:bg-gray-700 transition duration-300">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10c0 1.104.896 2 2 2h14c1.104 0 2-.896 2-2V7H3zm3 0V5c0-1.104.896-2 2-2h8c1.104 0 2 .896 2 2v2H6zm2 4h8m-8 4h8"></path></svg>
                Products
            </a>
            <a href="/contact" class="p-3 flex items-center hover:bg-gray-700 transition duration-300">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4v8h-4m-4-8h4v8h-4m-4-8h4v8H8m-4 8h16"></path></svg>
                Contact Us
            </a>
        </nav>
        <div class="footer mt-auto p-6 border-t border-gray-700">
            <p class="text-center text-sm">© 2024 Summer69</p>
        </div>
    </div>

    <div class="flex-1 ml-64 p-8">
        <article id="content" class="content min-h-[35rem] bg-white p-6 rounded-lg shadow-lg">
            @yield('content')
        </article>
    </div>
</body>
</html>
