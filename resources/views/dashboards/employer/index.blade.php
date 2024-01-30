<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employer</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-blue-100">

  <x-layouts.employer-navbar/>

  <br>


  <div class="flex-col lg:flex lg:flex-2 lg:justify-end items-center">

  <li style="list-style-type: none">
    <a href="#" class="text-4xl text-black hover:text-laravel font-steelfish"><i class="fa-solid fa-gear"></i>Post a Job</a>
  </li>

  </div>
  <x-flash-message />
</body>
</html>
