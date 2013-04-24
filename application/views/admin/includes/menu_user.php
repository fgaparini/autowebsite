<?php
$query = "select * from imagenes_tipo";
$rows  = $this->db->query($query);
$rows  = $rows->result_array();
?>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">GesWeb</a>
            <div class="nav-collapse collapse">
                <div class="btn-group pull-right">
                    <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i>admin</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-ban-circle"></i>Salir</a></li>
                    </ul>
                </div>
                <ul class="nav">
                    <li class="dropdown">
                        <a href="<?php echo base_url() ?>datos/form_user/" class="dropdown-toggle" data-toggle="dropdown">Modificar datos<b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo base_url() ?>variables/lists_user/" class="dropdown-toggle" data-toggle="dropdown">Campos<b class="caret"></b></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Imagenes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php foreach ($rows as $var): ?>
                            <li><a href="<?php echo base_url()."imagenes/list_user/".$var['it_id_imagen_tipo'] ?>"><?php echo $var['it_nombre'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>