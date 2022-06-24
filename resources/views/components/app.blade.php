<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Stock</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Stock</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/items">
                  Items
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/users">
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/employees">
                  Employees
                </a>
              </li>
            </ul>
            <ul class="navbar-nav d-flex">
                @auth
                    <li class="nav-item">
                        <span class="nav-link">{{ auth()->user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/login">Login</a>
                    </li>  
                @endauth
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        {{ $slot }}
    </div>
    <script src="/js/app.js"></script>
</body>
</html>