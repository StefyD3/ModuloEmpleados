<template>
    <!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <title>REGISTRO EMPLEADOS</title>
        </head>
        <nav class="navbar bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="CONTABILIDATA.png" alt="Logo" width="100" height="60" class="d-inline-block align-text-top">
                    REGISTRO DE EMPLEADOS
                </a>
            </div>
        </nav>
    <body>
   
        <div class="container-fluid">
            <br>

            <h5>DATOS EMPLEADO</h5>

            <br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombres</span>
                <input type="text" class="form-control" placeholder="Ingrese nombres completos" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Apellidos</span>
                <input type="text" class="form-control" placeholder="Ingrese apellidos completos" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <br>
            <h5>TIPO DE DOCUMENTO</h5>
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione Tipo de Documento</option>
                <option value="1">TI</option>
                <option value="2">CC</option>
                <option value="3">CE</option>
            </select>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Identificación</span>
                <input type="text" class="form-control" placeholder="Ingrese numero de identificación" aria-label="Username" aria-describedby="basic-addon1">
            </div>
    
            <br>
            <h5>DATOS DEL CARGO</h5>
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione Cargo</option>
                <option value="1">Asesor</option>
                <option value="2">Operario</option>
                <option value="3">Auxiliar</option>
            </select>
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione Area donde se desempeñara</option>
                <option value="1">Area Financiera</option>
                <option value="2">Area Administrativa</option>
                <option value="3">Area de Operaciones</option>
            </select>
            <br>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Salario</span>
                <input type="text" class="form-control" placeholder="Ingrese el salario segun el cargo" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Horas Laboradas</span>
                <input type="text" class="form-control" placeholder="Ingrese las horas laborales" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <br>
            <h5>FECHA INGRESO</h5>
            <br>
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Ingreso</span>
                <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <br>
            </div>
                    <button type="submit" class="btn btn-success">Guardar</button>

                    <button type="submit" class="btn btn-success">Salir</button>
                
    </body>

</html>
</template>

<script>

</script>