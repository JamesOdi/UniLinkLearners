<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- App Logo (Align Left) -->
            <a id="nav-bar-logo" class="navbar-brand" href="">UniLinkLearners</a>
            
            <!-- Navigation Items (Align Right) -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <button id="show-login" class="btn btn-outline-primary ml-3">Login</button>
                <a href="register"><button class="btn btn-primary ml-3">Register</button></a>
            </div>
        </div>
    </nav>

    <div class="overlay" id="overlay"></div>
    
    <div class="login-card" id="loginCard">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <!-- Login form goes here -->
                <form action="" method="post">
                    <!-- Form fields go here -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/login.js')}}"></script>
</body>
</html>