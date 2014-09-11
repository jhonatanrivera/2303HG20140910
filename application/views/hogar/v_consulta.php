<?php echo form_open(''); ?>
	<div class="row">
		<div class="col-md-offset-3 col-md-5">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Consulta</h3>
			  </div>
			  <div class="panel-body">
					<div class="row col-md-offset-2 col-md-5" id="divBuscador">
					    <div class="input-group">
					      <input type="text" class="form-control"  id="nro_vivienda" name="nro_vivienda" placeholder=""  maxlength="4" value="<?php echo set_value('nro_vivienda'); ?>" required>
					      <div class="input-group-btn">
					        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Hogar  &nbsp;&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>
					        <ul class="dropdown-menu dropdown-menu-right" role="menu">
					          <li><input type="submit" id="buscar" name="btnConsulta" value="Buscar" class="btnHogarWhite"/></li>
					          <li><input type="submit" id="nuevo" name="btnConsulta" value="Nuevo" class="btnHogarWhite"/></li>
					          <li class="divider"></li>
					          <li><input type="submit" id="eliminar" name="btnConsulta" value="Eliminar" class="btnHogarWhite"/></li>
					        </ul>
					      </div><!-- /btn-group -->
					    </div><!-- /input-group -->
					    <div class="error"><?php echo form_error("nro_vivienda"); echo (($this->session->flashdata('msg'))?$this->session->flashdata('msg'):''); ?></div>
					</div>
			  </div>
			</div>
		</div>
	</div>
<?php echo form_close(); ?>
