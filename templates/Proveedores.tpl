{include 'templates/header.tpl'}
    <nav> <!--NAV-->
        <ul class="nav nav-tabs">
            <li class="nav-item col-4">
            <a class="nav-link link-prinary" href="#">Inventario</a>
            </li>
            <li class="nav-item col-4">
            <a class="nav-link active" aria-current="page"  href="#">Proveedores</a>
            </li>
            <li class="nav-item col-4">
            <a class="nav-link link-primary" href="#">Clientes</a>
            </li>
        </ul>
    </nav>

    <div class="row my-2">
        <button type="button" class="btn btn-success col-1" data-bs-toggle="modal" data-bs-target="#nuevoProveedor"> 
            Nuevo Proveedor
        </button>
    </div>

    
{include 'templates/modals/nuevoProducto.tpl'}

    <!--bloque proveedores-->
    <div class="container-fluid row my-1">
        <div class="container-fluid">
            <ul style="margin-block-end:0">
                <li class="row text-white bg-dark -bg-opacity-80 align-items-center rounded-top">
                <div class="col"> Nombre </div>
                <div class="col"> Cuil </div>
                <div class="col"> Multiplicador </div>
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
               <div class="col"> Esteban Kito </div>
               <div class="col"> 20325487916 </div>
               <div class="col"> 1.25 </div>
               <div class="col"> esteban@kito.com </div>
               <div class="col"> (2262) 578942 </div>
               <div class="col"> Calle Falsa 123 </div>
               <div class="dropdown col-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProductoModal">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProductoModal">Button</button>
                      </div>
                    </ul>
               </div>
             </li>
          </ul>
        </div>

        <!-- elementos automatizados 
        foreach from = $listaProveedores item=proveedor
            <li class="row text-white bg-primary  bg-opacity-75 align-items-center">
               <div class="col"> $proveedor->nombre </div>
               <div class="col"> $proveedor->cuil </div>
               <div class="col"> $proveedor->multiplicador </div>
               <div class="col"> $proveedor->mail </div>
               <div class="col"> $proveedor->telefono </div>
               <div class="col"> $proveedor->direccion </div>
               <div class="dropdown col-1">
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu bg-secondary bg-opacity-90">
                      <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        <button type="button" id=$proveedor->id class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edicionProductoModal">Editar</button>
                        <button type="button" id=$proveedor->id class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProductoModal">Button</button>
                      </div>
                    </ul>
               </div>
             </li>
        /foreach
        -->
    
    </div>



{include 'templates/footer.tpl'}