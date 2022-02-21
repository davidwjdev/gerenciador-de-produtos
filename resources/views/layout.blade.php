<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />

    <!-- Styles -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header class="bg-dark p-3 mb-3">
      <div class="container d-flex flex-wrap">
        <div class="nav me-auto">
          <a href="/" class="nav-link text-white fw-bold">
            Gerenciador de Produtos
          </a>
        </div>

        <div class="nav">
          <ul class="d-flex flex-wrap">
            <li><a href="/" class="nav-link text-white fw-bold">Home</a></li>
            <li>
              <a href="/produtos" class="nav-link text-white fw-bold"
                >Produtos</a
              >
            </li>
            <li>
              <a href="/tags" class="nav-link text-white fw-bold">Tags</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <div class="container py-5">
      <div class="jumbotron text-center">
        <h1><strong>@yield('title')</strong></h1>
      </div>
      <div class="px-4 my-5">@yield('content')</div>
    </div>

    <script type="text/javascript">
      $(document).ready(function () {
        $(".modal").modal("hide");
      });
    </script>

    <script>
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    </script>
  </body>
</html>
