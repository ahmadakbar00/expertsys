<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <!-- Navbar -->

<nav class="navbar  bg-dark navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ExpertSys</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Literatur</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Metode
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/forwardchaining">Forward Chaining</a></li>
            <li><a class="dropdown-item" href="#">Backward Chaining</a></li>
            <li><a class="dropdown-item" href="#">AHP (Analytical Hierarchy Process)</a></li>
            <li><a class="dropdown-item" href="#">Breadth First Search</a></li>
            <li><a class="dropdown-item" href="#">BFS (Best First Search)</a></li>
            <li><a class="dropdown-item" href="#">DFS (Depth First Search)</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Other</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <!-- End Navbar -->

  @yield('content')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
