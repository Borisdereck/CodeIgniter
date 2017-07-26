<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="<?php echo base_url() ?>Scripts/js/jquery-3.1.0.min.js"></script>  
        <script type="text/javascript" src="<?php echo base_url() ?>Scripts/js/funciones.js"></script> 
        
    </head>
    <body>
        <div id="container" class="container">
            <div class="row">
                <div class="col-md-8"> 
                    <br>
                </div>
                </</div>
            <div class="row">
                <div class="col-md-8"> 
                    <div class="well text-info">
                        <h2><?php echo $page_title ?></h2>
                    </div>
                </div>                
            </div>
            <div id="body">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-hover">        
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Popularidad</th>
                                    <th>Codigo del pais</th>
                                    <th>Eliminar</th>
                                    <th>Editar</th>
                                </tr>	
                            </thead>
                            <tbody id="datos" class="text-info">
                                <?php
                                foreach ($users as $fila):
                                    ?>
                                    <tr>
                                        <td id="Name<?php echo $fila->ID ?>"><?= $fila->Name ?></td>
                                        <td id="Population<?php echo $fila->ID ?>"><?= $fila->Population ?></td>
                                        <td id="CountryCode<?php echo $fila->ID ?>"><?= $fila->CountryCode ?></td>
                                        <td>
                                            <input type="button" value="Eliminar" data-id="<?php echo $fila->ID ?>" class="Eliminar btn btn-default" >
                                        </td>
                                        <td>
                                            <input type="button" value="Editar" data-id="<?php echo $fila->ID ?>" class="Editar btn  btn-info" data-toggle="modal" data-target="#myModal">
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="" id="agregar">
                    <input type="button" value="Añadir" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
                </div>

            </div>
        </div>

        <!-- Modal -->
        <!-- Modal -->
        <div class="modal " id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Ciudad</h4>
                    </div>
                    <div class="modal-body" >
                        <div class="form-group" style="display:none;">
                            <label for="usr">Id:</label>
                            <input type="hidden" class="form-control" id="ided" >
                        </div>
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control" id="nameed">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Population:</label>
                            <input type="text" class="form-control" id="poped">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default edt">Editar</button>
                        <button type="button" class="btn btn-default mo" data-dismiss="modal">Close</button>                        
                    </div>
                </div>

            </div>
        </div>

        <div class="modal " id="insertar" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Agregar Ciudad</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control" id="nameins">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Population:</label>
                            <input type="text" class="form-control" id="popins">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default ins">Agregar</button>
                        <button type="button" class="btn btn-default bo" data-dismiss="modal">Close</button>                        
                    </div>
                </div>

            </div>
        </div>

    </body>
</html>