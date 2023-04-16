<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modern Flat Design Login Form Example</title>
    <link rel="stylesheet" href="/styles/loginStyle.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-page">
        <div class="login-page">
            @yield('errors')
        </div>
        <div class="form">
            @yield('forms')
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="/loginScript.js"></script>
</body>

</html>
