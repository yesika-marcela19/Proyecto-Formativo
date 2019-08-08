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

						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-line"><b>id persona:</b>
									<input type="text" name="id_persona" class="form-control" id="id_persona"/>
								</div> 
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="form-line"><b>id persona:</b>
									<input type="text" name="id_persona" class="form-control" id="nombre"/>
								</div> 
							</div>
						</div>
						<div class="col-lg-12">

                            <div class="form-line"><b> Rol:</b>
							<select  name="rol" id="rol"  class="form-control">
								<?php 
								try{

									$query="SELECT id_rol from rol";
									$data=$base->prepare($query);
									$data->execute();


									while( $row=$data->fetch(PDO::FETCH_ASSOC)){
										echo"<option value=".$row["id_rol"]."'>".$row["id_rol"]." </option>";                                   

									}
								}
								catch(exception $e){
									die('error ->'.$e->getMessage());

								}

								?>


							</select>
						</div>

						<div class="col-lg-12">
							<div>

                           <div class="form-line"><b>Estado:</b>
							<select  name="rol" id="rol"  class="form-control">
								<?php 
								try{

									$query="SELECT estado_pers from persona";
									$data=$base->prepare($query);
									$data->execute();


									while( $row=$data->fetch(PDO::FETCH_ASSOC)){
										echo"<option value=".$row["estado_pers"]."'>".$row["estado_pers"]." </option>";                                   

									}
								}
								catch(exception $e){
									die('error ->'.$e->getMessage());

								}

								?>


							</select>
						</div>

</div>



						<div class="modal-footer">

							<button class="btn btn-primary m-t-15 waves-effect" type="submit0">Desabilitar</button>




						</div>
					</form>	 



				</div>
			</div>
		</div>