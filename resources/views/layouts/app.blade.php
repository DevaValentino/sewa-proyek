<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!DOCTYPE html>
<html lang="id">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>@yield('title')</title>
 <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/boots
trap.min.css">
</head>
<body>
 <div class="container">
 @yield('content')
 </div>
</body>
</html>