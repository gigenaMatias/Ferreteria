{include 'templates/header.tpl'}
    <nav> <!--NAV-->
        <ul class="nav nav-tabs">
            <li class="nav-item col-4">
            <a class="nav-link link-prinary bg-secondary bg-opacity-50" href="home">Inventario</a>
            </li>
            <li class="nav-item col-4">
            <a class="nav-link link-primary bg-secondary bg-opacity-50" href="proveedores">Proveedores</a>
            </li>
            <li class="nav-item col-4">
            <a class="nav-link active" aria-current="page" href="#">Clientes</a>
            </li>
        </ul>
    </nav>

    <div class="row my-2 mx-4">
        <button type="button" class="btn btn-success col-1" data-bs-toggle="modal" data-bs-target="#nuevoClienteModal"> 
            Nuevo Cliente
        </button>
    </div>

    
{include 'templates/modals/nuevoCliente.tpl'}
{include 'templates/modals/modificarCliente.tpl'}
{include 'templates/modals/eliminarCliente.tpl'}

    <!--bloque Clientes-->
    <div class="container-fluid row my-1">
        <div class="container-fluid">
            <ul style="margin-block-end:0">
                <li class="row text-white bg-dark -bg-opacity-80 align-items-center rounded-top">
                <div class="col"> Nombre </div>
                <div class="col"> Cuil </div>
                <div class="col"> Desscuento </div>
                <div class="col"> e-mail </div>
                <div class="col"> Telefono </div>
                <div class="col"> Direccion </div>
                <div class="col-1"> Acciones</div>
                </li>
            </ul>
        </div>
    
        <div class="container-fluid">
          <ul>
            <li class="row text-white bg-primary  bg-opacity-75 align-items-center">
               <div class="col"> Jorge Rial </div>
               <div class="col"> 1530258963 </div>
               <div class="col"> 5% </div>
               <div class="col"> Jorgelin@gmail.com </div>
               <div class="col"> (2262) 69845 </div>
               <div class="col"> Lodejorge 8141 </div>
               <div class="dropdown col-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionClienteModal">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarClienteModal">Eliminar</button>
                      </div>
                    </ul>
               </div>
             </li>
          </ul>
        </div>

        <!-- elementos automatizados 
        foreach from = $listaClientes item=cliente
            <li class="row text-white bg-primary  bg-opacity-75 align-items-center">
               <div class="col"> $cliente->nombre </div>
               <div class="col"> $cliente->cuil </div>
               <div class="col"> $cliente->multiplicador </div>
               <div class="col"> $cliente->mail </div>
               <div class="col"> $cliente->telefono </div>
               <div class="col"> $cliente->direccion </div>
               <div class="dropdown col-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" id=$cliente->id class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionClienteModal">Editar</button>
                        <button type="button" id=$cliente->id class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarClienteModal">Eliminar</button>
                      </div>
                    </ul>
               </div>
             </li>
        /foreach
        -->
    
    </div>



{include 'templates/footer.tpl'}