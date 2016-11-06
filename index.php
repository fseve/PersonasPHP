<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto de Prueba PHP & JQUERY</title>
        
        <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">                
                <div class="col-md-12 text-center">
                    <h2>CRUD EN PHP USANDO JQUERY</h2>
                </div>                
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal_agregar_nuevo">AGREGAR NUEVO</button>
                    </div>                    
                </div>
            </div>
            
        </div>
        
        <div class="modal fade" id="modal_agregar_nuevo" role="">
            
            <div class="modal-dialog" role="">
                
                <div class="modal-content">
                    
                    <div class="modal-header">                        
                        <h4 class="modal-title">AGREGAR NUEVO REGISTRO</h4>
                    </div>
                    
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" id="nombres" placeholder="Nombres" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" id="apellidos" placeholder="Apellidos" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" id="correo" placeholder="Correo Electrónico" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <label for="fechanacimiento">Fecha Nacimiento</label>
                            <input type="date" id="fechanacimiento" placeholder="" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" id="sexo">
                                <option value="" disabled="true" selected="true">Seleccionar Sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <label class="radio-inline"><input type="radio" name="estado" value="0"/>Activo</label>
                            <label class="radio-inline"><input type="radio" name="estado" value="1"/>Inactivo</label>                            
                        </div>
                        
                    </div>
                    
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="">Guardar</button>
                        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>        
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
    </body>
</html>
