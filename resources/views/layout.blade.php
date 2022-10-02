<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <!-- <section class="menu">
      <div class="container">
        <div class="row">
          <div class="col-12">
            @yield('breadcrumbs')
          </div>    
        </div>
      </div>   
    </section>   -->

    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/category">category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tag">tag</a>
              </li>
            </ul>
          </div>
          <div class="col-12">
            @yield('content')
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>