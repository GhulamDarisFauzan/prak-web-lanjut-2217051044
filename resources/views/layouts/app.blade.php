<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
   
</head>
<body class="bg-gradient-to-t from-blue-100 to-blue-300 flex justify-center items-center h-full">
    @yield('content')
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Laravel App')</title>

   
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="bg-gradient-to-t from-blue-100 to-blue-300 flex justify-center items-center min-h-screen">
    <div class="container mx-auto p-4">
        <!-- Content Section -->
        @yield('content')
    </div>
</body>
</html>
