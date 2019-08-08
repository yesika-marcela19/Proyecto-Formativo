<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title"> Desea eliminar a esta persona persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post"  name="formulario" action="save_fichas_ambientes.php">
      <label for="" class="control-label">nombre de la persona</label>
        <input type="text" name="persona" class="form-control" id="nombre" readonly="readonly"/>  
         <input type="text" name="persona" class="form-control" id="id_persona" readonly="readonly" hidden/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
      </form>	
    </div>
  </div>
</div>