<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><i class="fs-2 bi bi-book"></i></svg>
              <span class="fs-4 ms-2 primary colors-blue">My Book</span>
            </a>
      
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="{{ route('authorization') }}" class="nav-link">Войти</a></li>
              <li class="nav-item"><a href="{{ route('registration') }}" class="nav-link">Регистрация</a></li>
              
              <form action="#" method="post">
                  <label for="search">Поиск</label>
                  <input type="search" name="search" id="search">
                  <button type="submit">Найти</button>
              </form>
              
            </ul>
          </header>
          <div class="menu-categ">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
              <li class="nav-item"><a href="#" class="nav-link" aria-current="page" >Стаьи</a></li>
            </ul>
          </div>

          @yield('content')
          
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><i class="fs-5 bi bi-book"></i></svg>
              </a>
              <span class="text-muted">© 2021 Company, Inc</span>
            </div>
        
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
          </footer>
  </div>
      <script src="/js/app.js"></script>
</body>
</html>