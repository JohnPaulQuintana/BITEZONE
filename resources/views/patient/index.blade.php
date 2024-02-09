<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BITEZONE') }}</title>
</head>
<body>
    <h1>Patient Dashboard</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit"
            class="w-full block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
            out</button>
    </form>
</body>
</html>