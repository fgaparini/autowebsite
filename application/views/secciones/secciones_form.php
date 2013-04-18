<!---------------------------FORMULARIOS--------------------------------------->
<!---------------------------TITULO-------------------------------------------->
<div class="page-header">
    <h1><?php echo "$title" ?></h1>
</div>
<!---------------------------CONTENIDO----------------------------------------->
<form class="form-horizontal" method="post" action="<?php echo base_url() ?>secciones/save/">
    <div class="control-group">
        <label class="control-label" >Nombre:</label>
        <div class="controls">
            <input type="text" name="sec_nombre" value="<?php echo $sec_nombre ?>">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" >Descripción:</label>
        <div class="controls">
            <textarea name="sec_descripcion"><?php echo $sec_descripcion ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button class="btn btn-large btn-primary" type="submit" >Guardar</button>&nbsp;&nbsp;
            <a class="btn btn-large btn-info" href="<?php echo base_url() . "secciones/lists" ?>">Volver</a>
        </div>
    </div>
    <input type="hidden" id="base_url" value="<?php echo base_url() ?>">
    <input type="hidden" name="accion" value="<?php echo $accion ?>">
    <input type="hidden" name="sec_id_seccion" value="<?php echo $sec_id_seccion ?>">
</form>