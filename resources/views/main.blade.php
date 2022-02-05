<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><i class="fs-2 bi bi-book"></i></svg>
              <span class="fs-4 ms-2 primary colors-blue">Simple header</span>
            </a>
      
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Стаьи</a></li>
            </ul>
          </header>
          <section>
            @foreach ($articles as $article)
              <div class="blog-entry ftco-animate d-md-flex fadeInUp ftco-animated">
                <img src="img/github/{{$article->img}}" width="200px" height="150px" alt="">
                <div class="ms-5 mb-5">
                  <h3 class="mb-1"><a href="single.html">{{$article->title}}</a></h3>
                  <div class="meta-wrap">
                  <p class="meta">
                  <span><i class="bi bi-calendar3 me-2"></i>{{$article->created_at}}</span>
                  <span><i class="bi bi-tag ms-4 me-2"></i><a href="single.html">{{$category}}</a></span>
                  {{-- <span><i class="icon-comment2 mr-2"></i>5 Comment</span> --}}
                  </p>
                  </div>
                  <p class="mb-4">{{$article->text}}</p>
                  <p><a href="#" class="btn-custom">Читать дальше<span class="ion-ios-arrow-forward"></span></a></p>
                </div>
                </div>
              @endforeach
          </section>
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