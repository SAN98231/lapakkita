<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom CSS for Table -->
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .table thead {
            background-color: #f2f2f2; /* Warna latar belakang untuk header tabel */
        }

        .table th, 
        .table td {
            padding: 12px 15px; /* Ruang di dalam sel tabel */
            border: 1px solid #ddd; /* Border di sekitar sel */
            text-align: left; /* Rata kiri teks */
        }

        .table th {
            font-weight: bold; /* Bold untuk teks header */
            color: #333; /* Warna teks header */
        }

        .table tbody tr:hover {
            background-color: #f5f5f5; /* Warna latar belakang saat hover pada baris */
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9; /* Warna latar belakang untuk baris genap */
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>

