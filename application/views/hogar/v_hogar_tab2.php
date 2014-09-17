<?php /* --------------------------------------------------------------- */
if (isset($hg1_localizacion)) {
	$s1_a_1 = $hg1_localizacion->S1_A_1;
	$obs_A = $hg1_localizacion->S1_A_OBS;
	$obs_B = $hg1_localizacion->S1_B_OBS;
	$obs_C = $hg1_localizacion->S1_C_OBS;
	$obs_D = $hg1_localizacion->S1_D_OBS;
	$obs_E= $hg1_localizacion->S1_E_OBS;
}else{
	$s1_a_1 = '';
	$obs_A = '';
	$obs_B = '';
	$obs_C = '';
	$obs_D = '';
	$obs_E= '';	
}
$S1_A_1 = array(
						'id' => 'S1_A_1',
						'name' => 'S1_A_1',
						'class' => 'form-control wd-inner-20 rDig1-19',
						'align' => 'center',
						'value' => $s1_a_1,
						'maxlength'=> '2',
					);
$S1_A_OBS = array(
						'id' => 'S1_A_OBS',
						'name' => 'S1_A_OBS',
						'class' => 'form-control',
						'align' => 'center',
						'rows' => '2',
						'value' => $obs_A,
					);
$S1_B_OBS = array(
						'id' => 'S1_B_OBS',
						'name' => 'S1_B_OBS',
						'class' => 'form-control',
						'align' => 'center',
						'rows' => '2',
						'placeholder' => 'OBSERVACIONES ',
						'value' => $obs_B,
					);
$S1_C_OBS = array(
						'id' => 'S1_C_OBS',
						'name' => 'S1_C_OBS',
						'class' => 'form-control',
						'align' => 'center',
						'rows' => '2',
						'placeholder' => 'OBSERVACIONES ',
						'value' => $obs_C,
					);
$S1_D_OBS = array(
						'id' => 'S1_D_OBS',
						'name' => 'S1_D_OBS',
						'class' => 'form-control',
						'align' => 'center',
						'rows' => '2',
						'placeholder' => 'OBSERVACIONES ',
						'value' => $obs_D,
					);
$S1_E_OBS = array(
						'id' => 'S1_E_OBS',
						'name' => 'S1_E_OBS',
						'class' => 'form-control',
						'align' => 'center',
						'rows' => '2',
						'placeholder' => 'OBSERVACIONES ',
						'value' => $obs_E,
					);
?>


<?php echo form_open('','id="frmTab2"'); ?>
<!-- PARTE A -->
<table class="table table-bordered" id="table1">
	<thead>
		<tr><th colspan="8"><h3 class="hgCenter hgTitle"> SECCION I : INFORMACION SOCIODEMOGRAFICA</h3></th></tr>
		<tr><th colspan="8"><h4>PARTE A: CARACTERISTICAS DE LOS MIEMBROS DEL HOGAR</h4></th></tr>
		<tr><th rowspan="4" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="8">PARA TODOS</th></tr>
		<tr class="hgCenter"><th colspan="3">1</th><th>2</th><th>3</th><th colspan="3">4</th></tr>
		<tr class="hgTop"><th colspan="3">¿Cuáles son los nombres y apellidos de cada uno de las personas que viven permanentemente en este hogar y de las que están alojadas aqui?</th><th rowspan="2">¿Cuál es la relación de parentesco con el jefe del hogar</th><th rowspan="2">Hombre / Mujer</th><th rowspan="2" colspan="3">¿Cuántos años cumplidos tiene?</th></tr>
		<tr><th colspan="3"><label for="S1_A_1">Indique el numero total de miembros</label><?php echo form_input($S1_A_1); ?><input type="hidden" id="NUM_MIEMBROS" value="1"></th></tr>
		<tr class="hgTitle"><th>N°</th><th>NOMBRES</th><th>A. PATERNO</th><th>A. MATERNO</th><th>CÓDIGO</th><th>H/M</th><th>AÑOS</th><th>MESES</th><th>DÍAS</th></tr>		
	</thead>
	<tbody>
		<tr><td><input type="text" class="form-control rDig1-19" id="COD_IDENT-1" name="COD_IDENT[1]" readonly="readonly" required value="1"/></td><td><input type="text" class="form-control rNombre" id="S1_A_1_NOM-1" name="S1_A_1_NOM[1]"/></td><td><input type="text" class="form-control rNombre" id="S1_A_1_AP-1" name="S1_A_1_AP[1]"/></td><td><input type="text" class="form-control rNombre" id="S1_A_1_AM-1" name="S1_A_1_AM[1]"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-11 passTD" id="S1_A_2-1" name="S1_A_2[1]" maxlength="2" onchange="especificar(this,11)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_A_2_O-1" name="S1_A_2_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control rDig1-2" id="S1_A_3-1" name="S1_A_3[1]" maxlength="1"/></td><td><input type="text" class="form-control rAnos" id="S1_A_4_A-1" name="S1_A_4_A[1]" maxlength="2"/></td><td><input type="text" class="form-control rMeses" id="S1_A_4_M-1" name="S1_A_4_M[1]" maxlength="2"/></td><td><input type="text" class="form-control rDias" id="S1_A_4_D-1" name="S1_A_4_D[1]" maxlength="2"/></td></tr>
	</tbody>
</table>
<br><br>
<table class="table table-bordered" id="table2">
	<thead>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="2">PARA PERSONAS DE 12 AÑOS A MÁS</th><th class="hgTitle" colspan="4">PARA PERSONAS DE 3 AÑOS A MAS</th></tr>
		<tr class="hgCenter"><th>5</th><th>6</th><th>7</th><th>8</th><th colspan="2">9</th></tr>
		<tr class="hgTop"><th>¿Cuál es su estado civil o conyugal?</th><th>¿Cuál es su religión?</th><th>¿Cuál es el idioma o lengua con el cual aprendió a hablar?</th><th>¿Sabe leer y escribir?</th><th colspan="2">¿Cuál es el último año y nivel que aprobó?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>CÓDIGO</th><th>CÓDIGO</th><th>CÓDIGO</th><th>SI/NO</th><th>NIVEL</th><th>AÑO O GRADO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_A_5-1">1</label></td><td><input type="text" class="form-control rDig1-6" id="S1_A_5-1" name="S1_A_5[1]" maxlength="1"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-4 passTD" id="S1_A_6-1" name="S1_A_6[1]" maxlength="1" onchange="especificar(this,4)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_A_6_O-1" name="S1_A_6_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-6 passTD" id="S1_A_7-1" name="S1_A_7[1]" maxlength="1" onchange="especificar(this,6)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_A_7_O-1" name="S1_A_7_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control rDig1-2" id="S1_A_8-1" name="S1_A_8[1]" maxlength="1"/></td><td><input type="text" class="form-control rDig1-10" id="S1_A_9_N-1" name="S1_A_9_N[1]" maxlength="2"/></td><td><input type="text" class="form-control rDig1-8" id="S1_A_9_AG-1" name="S1_A_9_AG[1]" maxlength="1"/></td></tr>
	</tbody>
</table>
<br>
<table class="table table-bordered">
	<tr><td><?php echo form_textarea($S1_A_OBS); ?></td></tr>
</table>
<br><br>

<!-- PARTE B -->
<table class="table table-bordered" id="table3">
	<thead>
		<tr><th colspan="8"><h4>PARTE B: EDUCACIÓN</h4></th></tr>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="10">PARA PERSONAS DE 3 AÑOS A 24 AÑOS</th></tr>
		<tr class="hgCenter"><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th colspan="2">15</th><th>16</th></tr>
		<tr class="hgTop"><th>¿En el presente año (2014) está matriculado en alguna escuela, colegio, instituto superior o universidad?</th><th>¿Cuál es el nombre de la institución educativa?</th><th>En caso se encuentre matriculado, ¿actualmente asiste a una escuela, colegio, instituto superior o universidad?</th><th>¿Cuál es la principal razón que no se matriculó o no asiste?</th><th>El año pasado, ¿estuvo matriculado en una escuela, colegio, institución superior o universidad?</th><th colspan="2">¿En que nivel y año o grado se matriculó el año 2013?</th><th>¿Aprobó el año o grado de estudios en que se matriculó el año pasado?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>SI/NO</th><th>NOMBRE</th><th>SI/NO</th><th>CODIGO</th><th>SI/NO</th><th>NIVEL</th><th>AÑO O GRADO</th><th>CODIGO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_B_10-1">1</label></td><td><input type="text" class="form-control rDig1-2" id="S1_B_10-1" name="S1_B_10[1]" maxlength="1"/></td><td><input type="text" class="form-control rAN" id="S1_B_11-1" name="S1_B_11[1]"/></td><td><input type="text" class="form-control rDig1-2" id="S1_B_12-1" name="S1_B_12[1]" maxlength="1"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-12 passTD" id="S1_B_13-1" name="S1_B_13[1]" maxlength="2" onchange="especificar(this,12)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_B_13_O-1" name="S1_B_13_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control rDig1-2" id="S1_B_14-1" name="S1_B_14[1]" maxlength="1"/></td><td><input type="text" class="form-control rDig1-6" id="S1_B_15_N-1" name="S1_B_15_N[1]" maxlength="1"/></td><td><input type="text" class="form-control rDig1-8" id="S1_B_15_AG-1" name="S1_B_15_AG[1]" maxlength="1"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-5 passTD" id="S1_B_16-1" name="S1_B_16[1]" maxlength="1" onchange="especificar(this,5)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_B_16_O-1" name="S1_B_16_O[1]" placeholder="Especifique" disabled="disabled"/></td></tr>
	</tbody>

</table>
<br>
<table class="table table-bordered">
	<tr><td><?php echo form_textarea($S1_B_OBS); ?></td></tr>
</table>
<br><br>
<!-- PARTE C -->
<table class="table table-bordered" id="table4">
	<thead>
		<tr><th colspan="8"><h4>PARTE C: MIGRACIÓN</h4></th></tr>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6">PARA TODOS</th></tr>
		<tr class="hgCenter"><th colspan="3">17</th><th>18</th><th>19</th><th>20</th></tr>
		<tr class="hgTop"><th colspan="3">Lugar de nacimiento</th><th>¿En el 2013 ya vivia en esta zona?</th><th>¿Desde que año vivia en esta zona?</th><th>¿Cuál fue el motivo para residir en esta zona?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>DEPARTAMENTO</th><th>PROVINCIA</th><th>DISTRITO</th><th>CODIGO</th><th>AÑO</th><th>CÓDIGO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_C_17_1_DEP-1">1</label></td><td><input type="text" class="form-control rReq AutoD" id="S1_C_17_1_DEP-1" name="S1_C_17_1_DEP[1]"/></td><td><input type="text" class="form-control rReq AutoP" id="S1_C_17_2_PROV-1" name="S1_C_17_2_PROV[1]"/></td><td><input type="text" class="form-control rReq AutoDt" id="S1_C_17_3_DIST-1" name="S1_C_17_3_DIST[1]"/></td><td><input type="text" class="form-control rDig1-2" id="S1_C_18-1" name="S1_C_18[1]" maxlength="1"/></td><td><input type="text" class="form-control rAno" id="S1_C_19-1" name="S1_C_19[1]" maxlength="4"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-6 passTD" id="S1_C_20-1" name="S1_C_20[1]" maxlength="1" onchange="especificar(this,6)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_C_20_O-1" name="S1_C_20_O[1]" placeholder="Especifique" disabled="disabled"/></td></tr>
	</tbody>
</table>
<br><br>
<table class="table table-bordered" id="table5">
	<thead>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6">PARA TODOS</th></tr>
		<tr class="hgCenter"><th colspan="4">21</th></tr>
		<tr class="hgTop"><th colspan="4">¿Dónde vivía antes de residir aquí en esta zona?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>DEPARTAMENTO</th><th>PROVINCIA</th><th>DISTRITO</th><th>OTRO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_C_21_DEP-1">1</label></td><td><input type="text" class="form-control rReq AutoD" id="S1_C_21_1_DEP-1" name="S1_C_21_1_DEP[1]"/></td><td><input type="text" class="form-control rReq AutoP" id="S1_C_21_2_PROV-1" name="S1_C_21_2_PROV[1]"/></td><td><input type="text" class="form-control rReq AutoDt" id="S1_C_21_3_DIST-1" name="S1_C_21_3_DIST[1]"/></td><td><input type="text" class="form-control rA rNotReq" id="S1_C_21_4_OTRO-1" name="S1_C_21_4_OTRO[1]"/></td></tr>
	</tbody>
</table>
<br><br>
<table class="table table-bordered" id="table6">
	<thead>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="8">SOLO PARA LOS QUE RESPONDIERON SI EN LA PREGUNTA 18</th></tr>
		<tr class="hgCenter"><th width="10%">22</th><th width="10%">23</th><th colspan="4" width="60">24</th><th width="20%">25</th></tr>
		<tr class="hgTop"><th>¿En el 2013 estuvo viviendo fuera de esta zona por algunos meses?</th><th>¿Por cuántos meses estuvo fuera de esta zona?</th><th colspan="4">¿En que lugar estuvo viviendo en esos meses?</th><th>¿Cuál fue el motivo principal por el que estuvo fuera?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>SI/NO</th><th>MESES</th><th>DEPARTAMENTO</th><th>PROVINCIA</th><th>DISTRITO</th><th>OTRO</th><th>CODIGO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_C_22-1">1</label></td><td><input type="text" class="form-control rDig1-2" id="S1_C_22-1" name="S1_C_22[1]" maxlength="1"/></td><td><input type="text" class="form-control rDig1-11" id="S1_C_23-1" name="S1_C_23[1]" maxlength="2"/></td><td><input type="text" class="form-control rReq AutoD" id="S1_C_24_1_DEP-1" name="S1_C_24_1_DEP[1]"/></td><td><input type="text" class="form-control rReq AutoP" id="S1_C_24_2_PROV-1" name="S1_C_24_2_PROV[1]"/></td><td><input type="text" class="form-control rReq AutoDt" id="S1_C_24_3_DIST-1" name="S1_C_24_3_DIST[1]"/></td><td><input type="text" class="form-control rA" id="S1_C_24_4_OTRO-1" name="S1_C_24_4_OTRO[1]"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-5 passTD" id="S1_C_25-1" name="S1_C_25[1]" maxlength="1" onchange="especificar(this,5)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_C_25_O-1" name="S1_C_25_O[1]" placeholder="Especifique" disabled="disabled"/></td></tr>
	</tbody>
</table>
<br>
<table class="table table-bordered">
	<tr><td><?php echo form_textarea($S1_C_OBS); ?></td></tr>
</table>
<br><br>
<!-- PARTE D -->
<table class="table table-bordered" id="table7">
	<thead>
		<tr><th colspan="8"><h4>PARTE D: SALUD</h4></th></tr>		
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6"></th></tr>
		<tr class="hgCenter"><th width="48%">26</th><th colspan="3" width="37%">27</th><th width="15%">28</th></tr>
		<tr class="hgTop"><th >En el mes anterior, ¿presentó alguna dolencia o enfermedad?</th><th colspan="3">En relación con la pregunta anterior, ¿a dónde o a quién acudió para consultar por esta enfermedad o dolencia?</th><th>¿Cuál fue el principal problema que encontró en el establecimiento de salud al que acudió?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>CÓDIGO / DESCRIBIR</th><th>CÓDIGO</th><th>UBICACIÓN</th><th>NOMBRE EST.</th><th>CÓDIGO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_D_26_COD1-1">1</label></td><td class="tdNo"><input type="text" class="form-control wd-inner-10 rBin passTD" id="S1_D_26_COD1-1" name="S1_D_26_COD1[1]" placeholder="p1" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-20 rA " id="S1_D_26_DESC1-1" name="S1_D_26_DESC1[1]" placeholder="Describir" disabled="disabled"/><input type="text" class="form-control wd-inner-10 rBin passTD" id="S1_D_26_COD2-1" name="S1_D_26_COD2[1]" placeholder="p2" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-20 rA" id="S1_D_26_DESC2-1" name="S1_D_26_DESC2[1]" placeholder="Describir" disabled="disabled"/><input type="text" class="form-control wd-inner-10 rBin passTD" id="S1_D_26_COD3-1" name="S1_D_26_COD3[1]" placeholder="p3" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-20 rA" id="S1_D_26_DESC3-1" name="S1_D_26_DESC3[1]" placeholder="Describir" disabled="disabled"/><br><input type="text" class="form-control wd-inner-10 rBin passTD" id="S1_D_26_COD4-1" name="S1_D_26_COD4[1]" placeholder="p4" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-20 rA" id="S1_D_26_DESC4-1" name="S1_D_26_DESC4[1]" placeholder="Describir" disabled="disabled"/><input type="text" class="form-control wd-inner-10 rBin passTD" id="S1_D_26_COD5-1" name="S1_D_26_COD5[1]" placeholder="p5" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-20 rA" id="S1_D_26_DESC5-1" name="S1_D_26_DESC5[1]" placeholder="Describir" disabled="disabled"/><input type="text" class="form-control wd-inner-10 rBin passTD" id="S1_D_26_COD6-1" name="S1_D_26_COD6[1]" placeholder="p6" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-20 rA" id="S1_D_26_DESC6-1" name="S1_D_26_DESC6[1]" placeholder="Describir" disabled="disabled"/><br><input type="text" class="form-control wd-inner-10 rBin passTD" id="S1_D_26_COD7-1" name="S1_D_26_COD7[1]" placeholder="p7" maxlength="1" onchange="especificar(this,1,2)"/><input type="text" class="form-control wd-inner-30 rA" id="S1_D_26_COD7_O-1" name="S1_D_26_COD7_O[1]" placeholder="Especifique" disabled="disabled"/><input type="text" class="form-control wd-inner-20 rA" id="S1_D_26_DESC7-1" name="S1_D_26_DESC7[1]" placeholder="Describir" disabled="disabled"/><input type="text" class="form-control wd-inner-10 rBin" id="S1_D_26_COD8-1" name="S1_D_26_COD8[1]" placeholder="p8" maxlength="1"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-14 C27 passTD" id="S1_D_27_COD-1" name="S1_D_27_COD[1]" maxlength="2" onchange="especificar(this,14)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_D_27_COD_O-1" name="S1_D_27_COD_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control rAN" id="S1_D_27_UBIC-1" name="S1_D_27_UBIC[1]"/></td><td><select  class="form-control rReq" id="S1_D_27_NOM-1" name="S1_D_27_NOM[1]"/></select></td><td><input type="text" class="form-control wd-inner-30 rDig1-7 passTD" id="S1_D_28-1" name="S1_D_28[1]" maxlength="1" onchange="especificar(this,6)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_D_28_O-1" name="S1_D_28_O[1]" placeholder="Especifique" disabled="disabled"/></td></tr>
	</tbody>
</table>
<br><br>
<table class="table table-bordered" id="table8">
	<thead>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6"></th></tr>
		<tr class="hgCenter"><th width="30%">29</th><th colspan="3" width="40%">30</th><th width="22%">31</th><th width="8%">31A</th></tr>
		<tr class="hgTop"><th>¿Cuáles son las razones por las que no acudió a un centro o establecimiento de salud?</th><th colspan="3">¿Habitualmente en dónde o a quién acude cuando tiene una enfermedad o dolencia?</th><th>¿El sistema de presentaciones de salud al cuál acude usted esta afiliado actualmente es:</th><th>¿Está vigente el seguro al cuál pertenece?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>CÓDIGO</th><th>CÓDIGO</th><th>UBICACIÓN</th><th>NOMBRE ESTAB.</th><th>CÓDIGOS</th><th>SI/NO</th></tr>
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_D_29_1-1">1</label></td><td><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_1-1" name="S1_D_29_1[1]" placeholder="p1" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_2-1" name="S1_D_29_2[1]" placeholder="p2" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_3-1" name="S1_D_29_3[1]" placeholder="p3" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_4-1" name="S1_D_29_4[1]" placeholder="p4" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_5-1" name="S1_D_29_5[1]" placeholder="p5" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_6-1" name="S1_D_29_6[1]" placeholder="p6" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_7-1" name="S1_D_29_7[1]" placeholder="p7" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_8-1" name="S1_D_29_8[1]" placeholder="p8" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_9-1" name="S1_D_29_9[1]" placeholder="p9" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_29_10-1" name="S1_D_29_10[1]" placeholder="p10" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin passTD" id="S1_D_29_11-1" name="S1_D_29_11[1]" placeholder="p11" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-80 rA" id="S1_D_29_11_O-1" name="S1_D_29_11_O[1]" disabled="disabled" placeholder="Especifique"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-14 passTD" id="S1_D_30_COD-1" name="S1_D_30_COD[1]" maxlength="2" onchange="especificar(this,14)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_D_30_COD_O-1" name="S1_D_30_COD_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control rA" id="S1_D_30_UBIC-1" name="S1_D_30_UBIC[1]"/></td><td><input type="text" class="form-control" id="S1_D_30_NOM-1" name="S1_D_30_NOM[1]"/></td><td class="tdNo"><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_1-1" name="S1_D_31_1[1]" placeholder="p1" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_2-1" name="S1_D_31_2[1]" placeholder="p2" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_3-1" name="S1_D_31_3[1]" placeholder="p3" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_4-1" name="S1_D_31_4[1]" placeholder="p4" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_5-1" name="S1_D_31_5[1]" placeholder="p5" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_6-1" name="S1_D_31_6[1]" placeholder="p6" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_7-1" name="S1_D_31_7[1]" placeholder="p7" maxlength="1"/><input type="text" class="form-control wd-inner-20 rBin passTD" id="S1_D_31_8-1" name="S1_D_31_8[1]" placeholder="p8" maxlength="1" onchange="especificar(this,1)"/><input type="text" class="form-control wd-inner-40 rA" id="S1_D_31_8_O-1" name="S1_D_31_8_O[1]" disabled="disabled" placeholder="Especifique"/><input type="text" class="form-control wd-inner-20 rBin" id="S1_D_31_9-1" name="S1_D_31_9[1]" placeholder="p9" maxlength="1"/></td><td><input type="text" class="form-control rDig1-2" id="S1_D_31A-1" name="S1_D_31A[1]" maxlength="1"/></td></tr>
	</tbody>
</table>
<br><br>
<table class="table table-bordered" id="table9">
	<thead>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6"></th></tr>
		<tr class="hgCenter"><th>32</th><th>33</th></tr>
		<tr class="hgTop"><th>¿Alguna vez se atendió en los siguientes establecimiento de salud (zona de Cajamarquilla)?</th><th>¿Habitualmente en dónde o a quién acude cuando tiene una enfermedad o dolencia?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>CÓDIGO</th><th>CÓDIGO</th></tr>
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_D_32-1">1</label></td><td><input type="text" class="form-control wd-inner-50 rDig1-5" id="S1_D_32-1" name="S1_D_32[1]" maxlength="1"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-7 passTD" id="S1_D_33-1" name="S1_D_33[1]" maxlength="1" onchange="especificar(this,7)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_D_33_O-1" name="S1_D_33_O[1]" placeholder="Especifique" disabled="disabled"/></td></tr>
	</tbody>
</table>
<br>
<table class="table table-bordered">
	<tr><td><?php echo form_textarea($S1_D_OBS); ?></td></tr>
</table>
<br><br>
<!-- PARTE E -->
<table class="table table-bordered" id="table10">
	<thead>
		<tr><th colspan="8"><h4>PARTE E: ECONOMÍA</h4></th></tr>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6">6 AÑOS DE EDAD A MÁS</th></tr>
		<tr class="hgCenter"><th width="10%">34</th><th>35</th><th width="35%">36</th><th>37</th><th>38</th></tr>
		<tr class="hgTop"><th>La semana pasada ¿trabajó al menos una hora por algún pago en dinero o especie?</th><th>Para quienes respondieron NO en la anterior, La semana pasada, usted: </th><th>Para quienes indicaron que no trabajaron en la anterior, La semana pasada estuvo:</th><th>La semana pasada, ¿Cuál es la ocupación principal que desempeñó?</th><th>La semana pasada, ¿a qué actividad se dedicó el negocio, organismo, empresa en el que trabajó?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>SI/NO</th><th>CÓDIGO</th><th>CÓDIGO</th><th>ESPECIFICAR</th><th>ESPECIFICAR</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_E_34-1">1</label></td><td><input type="text" class="form-control rDig1-2" id="S1_E_34-1" name="S1_E_34[1]" maxlength="1"/></td><td><input type="text" class="form-control rDig1-5" id="S1_E_35-1" name="S1_E_35[1]" maxlength="1"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-7 passTD" id="S1_E_36-1" name="S1_E_36[1]" maxlength="1" onchange="especificar(this,7)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_E_36_O-1" name="S1_E_36_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control rA" id="S1_E_37-1" name="S1_E_37[1]"/></td><td><input type="text" class="form-control rA" id="S1_E_38-1" name="S1_E_38[1]"/></td></tr>
	</tbody>
</table>
<br><br>
<table class="table table-bordered" id="table11">
	<thead>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6">6 AÑOS DE EDAD A MÁS</th></tr>
		<tr class="hgCenter"><th width="20%">39</th><th width="20%">40</th><th width="10%">41</th><th>42</th><th>43</th><th width="20%">44</th></tr>
		<tr class="hgTop"><th>La semana pasada, en su centro de trabajo se desempeñó como:</th><th>En su ocupación principal, usted trabajó para:</th><th>Además de su ocupación principal la semana pasada, ¿tuvo usted otro trabajo para obtener ingresos?</th><th>La semana pasada, ¿Cuál fue la ocupación secundaria que desempeñó?</th><th>La semana pasada, ¿a qué actividad se dedicó el negocio, organismo, empresa en el que trabajó?</th><th>La semana pasada, en su centro de trabajo se desempeñó como:</th></tr>
		<tr class="hgTitle"><th>N°</th><th>CÓDIGO</th><th>CÓDIGO</th><th>SI/NO</th><th>ESPECIFICAR</th><th>ESPECIFICAR</th><th>CÓDIGO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_E_39-1">1</label></td><td><input type="text" class="form-control wd-inner-30 rDig1-7 passTD" id="S1_E_39-1" name="S1_E_39[1]" maxlength="1" onchange="especificar(this,7)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_E_39_O-1" name="S1_E_39_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-6 passTD" id="S1_E_40-1" name="S1_E_40[1]" maxlength="1" onchange="especificar(this,6)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_E_40_O-1" name="S1_E_40_O[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control rDig1-2" id="S1_E_41-1" name="S1_E_41[1]" maxlength="1"/></td><td><input type="text" class="form-control rA" id="S1_E_42-1" name="S1_E_42[1]"/></td><td><input type="text" class="form-control rA" id="S1_E_43-1" name="S1_E_43[1]"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-7 passTD" id="S1_E_44-1" name="S1_E_44[1]" maxlength="1" onchange="especificar(this,7)"/><input type="text" class="form-control wd-inner-70 rA" id="S1_E_44_O-1" name="S1_E_44_O[1]" placeholder="Especifique" disabled="disabled"/></td></tr>
	</tbody>
</table>
<br><br>
<table class="table table-bordered" id="table12">
	<thead>
		<tr><th rowspan="3" class="hgTextV">Código de identificación</th><th class="hgTitle" colspan="6">´SÓLO PARA LOS QUE TIENEN ACTIVIDAD SECUNDARIA</th></tr>
		<tr class="hgCenter"><th width="33%">45</th><th width="33%">46</th><th width="33%">47</th></tr>
		<tr class="hgTop"><th>¿Cuál fue el ingreso mensual de su actividad principal?</th><th>¿Cuál fue el ingreso mensual de su actividad secundaria?</th><th>¿cuál fue el gasto familiar mensual?</th></tr>
		<tr class="hgTitle"><th>N°</th><th>CÓDIGO</th><th>CÓDIGO</th><th>CÓDIGO</th></tr>		
	</thead>
	<tbody>
		<tr><td class="hgCenter"><label for="S1_E_45-1">1</label></td><td><input type="text" class="form-control wd-inner-30 rDig1-7 passTD" id="S1_E_45-1" name="S1_E_45[1]" maxlength="1" onchange="especificar(this,[1,6])"/><input type="text" class="form-control wd-inner-70 rN" id="S1_E_45_Esp-1" name="S1_E_45_Esp[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-7 passTD" id="S1_E_46-1" name="S1_E_46[1]" maxlength="1" onchange="especificar(this,[1,6])"/><input type="text" class="form-control wd-inner-70 rN" id="S1_E_46_Esp-1" name="S1_E_46_Esp[1]" placeholder="Especifique" disabled="disabled"/></td><td><input type="text" class="form-control wd-inner-30 rDig1-6 passTD" id="S1_E_47-1" name="S1_E_47[1]" maxlength="1" onchange="especificar(this,[1,6])"/><input type="text" class="form-control wd-inner-70 rN" id="S1_E_47_Esp-1" name="S1_E_47_Esp[1]" placeholder="Especifique" disabled="disabled"/></td></tr>
	</tbody>
</table>
<br>
<table class="table table-bordered">
	<tr><td><?php echo form_textarea($S1_E_OBS); ?></td></tr>
</table>
<div class="row">
	<div class="col-md-offset-11">
		<?php echo form_submit('btnTab2','Guardar','id="btnTab2" class="btn btn-primary" style="width:100%"'); ?>		
	</div>
</div>

<?php echo form_close(); ?>

