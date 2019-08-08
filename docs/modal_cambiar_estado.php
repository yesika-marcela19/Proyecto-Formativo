!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Desea eliminar a esta persona</h4></center>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				
	         <form method="POST"  name="formulario" action="php/desabilitar_admin.php">
    
				<div class="col-sm-4">
                    <div class="form-group">
						<div class="form-line"><b>id persona:</b>
						<input type="text" name="id_persona" class="form-control" id="id_persona"/>
						</div> 
					</div>
				</div>
                	<div class="col-sm-4">
                    <div class="form-group">
						<div class="form-line"><b>Nombre de la persona:</b>
						<input  type="text" name="persona" class="form-control" id="nombre" readonly="readonly"/>
						</div>
					</div>
				</div>
                <div class="modal-footer">
				
                <button class="btn btn-primary m-t-15 waves-effect" type="submit0">Desabilitar</button>
			
                </div>
				</form>	 
				

							 
            </div>
        </div>
    </div>
    