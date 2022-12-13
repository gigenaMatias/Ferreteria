{include 'templates/header.tpl'}
<body>
    <nav class="navbar navbar-expand-lg bg-light"> <!--NAV-->
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Ferreteria</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Lista de Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Tarifario</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="buscar..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar!</button>
          </form>
        </div>
      </div>
    </nav>


    <div class="bloqueTarifario"></div>

    <div class="bloqueInventario">
      <div class="Filtros">
        <ul>
          <li id="inputNombreProducto">
            <input type="text" value="nombre del producto">
          </li>
          <li id="inputCaracteristicas">
            <input type="text" value="caracteristicas del producto">
          </li>

          <!--menu dropdown-->
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>

        </ul>
      </div>
    </div>

    <div class="tarifario">
      <a href="#">Tarifario</a>
    </div>
{include 'templates/footer.tpl'}
