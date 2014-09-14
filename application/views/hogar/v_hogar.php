<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="liUbigeo active"><a href="#cedula1_tab1" role="tab" data-toggle="tab">Localizacion</a></li>
  <li class=""><a href="#cedula1_tab2" role="tab" data-toggle="tab">Seccion I | A-E</a></li>
  <li class=""><a href="#cedula1_tab3" role="tab" data-toggle="tab">Seccion I | F-J</a></li>
  <li class=""><a href="#cedula1_tab4" role="tab" data-toggle="tab">Seccion II A</a></li>
  <li class=""><a href="#cedula1_tab5" role="tab" data-toggle="tab">Seccion II B</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="cedula1_tab1"> <?php echo $this->load->view('hogar/v_hogar_tab1'); ?> </div>
  <div class="tab-pane" id="cedula1_tab2"> <?php echo $this->load->view('hogar/v_hogar_tab2'); ?> </div>
  <div class="tab-pane" id="cedula1_tab3"> <?php echo $this->load->view('hogar/v_hogar_tab3'); ?> </div>
  <div class="tab-pane" id="cedula1_tab4"> <?php echo $this->load->view('hogar/v_hogar_tab4'); ?> </div>
  <div class="tab-pane" id="cedula1_tab5"> <?php echo $this->load->view('hogar/v_hogar_tab5'); ?> </div>
</div>