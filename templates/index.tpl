{include 'templates/header.tpl'}
    <nav class="navbar navbar-expand-lg bg-light row"> <!--NAV-->
      <div class="container-fluid">
      <ul class="asd row">
          <li class="nav-item col">
            <a class="navbar-brand asd col" href="#">Ferreteria</a>
          </li>
          <li class="nav-item col">
            <a class="nav-link " href="#">Lista de Productos</a>
          </li>
          <li class="nav-item col">
            <a class="nav-link">Tarifario</a>
          </li>
      </ul>
      </div>
    </nav>


    <div class="container-fluid row">
      <div class="bloqueInventario col-7">
        <!--filtros-->
        <div class="Filtros">
          <ul class="row">
            <li id="inputNombreProducto" class="col">
              <input type="text" value="nombre del producto">
            </li>
            <li id="inputCaracteristicas" class="col">
              <input type="text" value="caracteristicas del producto">
            </li>

            <!--menu dropdown-->
            <div class="dropdown col">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Proveedores
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </ul>
        </div>
      
        <div class="container-fluid listaInventario">
          <ul>
            <li class="row item1">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
              <li class="row item2">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
              <li class="row item1">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
              <li class="row item2">
                <div class="col"> nombre producto </div>
                <div class="col"> proveedor </div>
                <div class="col"> caracteristica </div>
                <div class="col"> precio ejemplo </div>
                <div class="col"> stock disponible </div>
              </li>
          </ul>
        </div>

      </div>

      <div class="bloqueTarifario col">
        <div> Talonario </div>
        <div class="container-fluid listaInventario">
          <ul>
            <li class="row item1">
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
              </li>
              <li class="row item2">
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
              </li>
              <li class="row item1">            
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
              </li>
              <li class="row item2">
                <div class="col-6"> nombre producto </div>
                <div class="col-2"> cantidad </div>
                <div class="col"> precio costo </div>
            </li>
          </ul>
          <form class="row">
            <button class="btn btn-secondary col-2" type="button" > 
            imprimir </button>
            <div class="col-8"></div>
            <div class="col"> Total:$ </div>
          </form>
        </div>
      </div>
    </div>
{include 'templates/footer.tpl'}
