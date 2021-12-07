<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <br><br>
    <div class="container">
        <form class="form" id="form1">
            <h1>Inventario de productos</h1>
            <div class="row">
                <div class="form-group col-sm-12 col-md-8 col-lg-6">
                    <label for="nomProducto" class=" control-label">Nombre del producto:</label>
                    <input id="nomProducto" type="text" class="form-control" placeholder="Nombre o marca">
                </div>

                <div class="form-group col-sm-12 col-md-4 col-lg-2">
                    <label for="TipoProd"> Categoria<br>
                        <input type="radio" id="Pre-Entreno"> Pre-Entreno
                    </label>

                    <label for="TipoProd">
                        <input type="radio" id="BCAA'S"> BCAAS
                    </label>

                    <label for="TipoProd">
                        <input type="radio" id="Creatina"> Cretina
                    </label>

                    <label for="TipoProd">
                        <input type="radio" id="Proteina"> Proteina
                    </label>

                </div>

                <div class="form-group col-sm-12 col-md-8 col-lg-4">
                    <label for="Marca">Marca:</label>
                    <input id="Marca" type="text" class="form-control" placeholder="Insane Labz">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label for="pDis">Piezas Disponibles:</label>
                    <input id="pDis" type="text" class="form-control" placeholder="Cantidad de piezas">
                </div>
                <div class="form-group col-sm-12 col-md-3 col-lg-3">
                    <label for="Sabores">Sabores Disponibles</label>
                    <input id="Sabores" type="text" class="form-control">
                </div>
                <div class="form-group col-sm-12 col-md-3 col-lg-3">
                    <label for="Precio">Precio:</label>
                    <input id="Precio" type="text" class="form-control" placeholder="Pesos Mexicanos">
                </div>
            </div>


            <div class="row">
                <div class="form-group col-sm-6 col-md-8 col-lg-12">
                    <label for="Desc">Descripcion:</label>
                    <input id="Desc" type="text" class="form-control" placeholder="agregue una breve descripcion">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12 col-md-12 col-lg-6">
                    <br><label for="Distribuidor">Distribuidores:</label>
                    <select name="estados" id="opcion" class="Form-control">
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Colima">Colima</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="Veracruz">Veracruz</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="btn-group">
            <button id="btnAgregar" type="button" class="btn btn-success">Agregar</button>
            <button id="btnEditar" type="button" class="btn btn-warning">Editar</button>
            <button id="btnCancelar" type="button" class="btn btn-primary">Cancelar</button>
            </div>
            
        </form>
    </div>

    
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
            <div class="col-7">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre producto</th>
                            <th>Categoria</th>
                            <th>Marca</th>
                            <th>Piezas Disponibles</th>
                            <th>Sabores Disponibles</th>
                            <th>Precio</th>
                            <th>Distribuidor</th>
                        </tr>

                        <tbody>
                            <tr>
                                <td>

                                </td>
                            </tr>
                            
                            <tr>
                                <td>

                                </td>
                            </tr>

                            <tr>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </thead>
                </table>

            </div>
        </div>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="./main.js"></script>

</html>