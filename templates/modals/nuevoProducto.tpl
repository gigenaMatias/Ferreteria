<div class="modal fade" id="nuevoProductoModal" tabindex="-1" aria-labelledby="nuevo-Producto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header bg-success bg-opacity-75">
        <h1 class="modal-title fs-5 text-white" >Nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        
      <div class="modal-body">  
        <form>
          <div class="row justify-content-evenly mb-3">
            <div class="form-floating col-5">
              <input type="text" class="form-control" id="nuevoNombreProducto" placeholder=" ">
              <label for="floatingNombreProducto" class="ms-2">Nombre del Producto</label>
            </div>
            <div class="form-floating col-3">
              <input type="text" class="form-control" id="nuevoCantidadUnidades" placeholder=" ">
              <label for="floatingNombreProducto" class="ms-2">Cantidad</label>
            </div>
            <div class="col-4">
              <select class="form-select py-3" id="nuevoTipoUnidad" aria-label="Seleccion del tipo de unidad">
                <option selected>Tipo Unidad</option>
                <option value="1">Kg</option>
                <option value="2">Unidad</option>
                <option value="3">Caja</option>
              </select>
            </div>
          </div>
          
          <div class="row justify-content-evenly">
            <div class="form-floating col-4">
              <input type="text" class="form-control" id="nuevoCodigoProducto" placeholder=" ">
              <label for="floatingNombreProducto" class="ms-2">Codigo</label>
            </div>
            <div class="form-floating col-3">
              <input type="text" class="form-control" id="nuevoPrecioCosto" placeholder=" ">
              <label for="floatingNombreProducto" class="ms-2">Valor costo</label>
            </div>
            <div class="col-5">
              <select class="form-select py-3" id="nuevoProveedor"aria-label="Seleccion del Proveedor">
                <option selected>Proveedor</option>
                <option value="1">Opcion1</option>
                <option value="2">Opcion2</option>
                <option value="3">....</option>
                <option value="4">Opcion X</option>
              </select>
            </div>
          </div>

        <div class="form-floating my-3" >
          <input type="text" class="form-control" id="nuevoCaracteristica" placeholder=" ">
          <label for="floatingNombreProducto">Caracteristicas del producto </label>
        </div>
        </form>
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
      
    </div>
  </div>
</div>