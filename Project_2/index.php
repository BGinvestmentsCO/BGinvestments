<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties. 
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/stylo.css">
        <title>Project_2</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light navigation_bar">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
                    Bootstrap
                </a>
            </nav>
        </header>
        <section>
            <div class="container-fluid formulario">
                <div id="hplogo">
                    <img src="img/header1.png" id="hplogoim">
                </div>
                <form>
                    <div class="row my-2">
                        <div class="col">
                          <label for="name">Nombres</label>
                          <input type="text" class="form-control" placeholder="Nombre"id="name" name="Name">
                        </div>
                        <div class="col">
                          <label for="lastname">Apellidos</label>
                          <input type="text" class="form-control" placeholder="Apellido"id="lastname" name="LastName">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                          <label for="country">Pais</label>
                          <select class="custom-select" size="3"id="Country" name="country">
                            <option selected>Selecciona Pais</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Inglaterra">Inglaterra</option>
                            <option value="Alemania">Alemania</option>
                          </select>
                        </div>
                        <div class="col">
                          <label for="city">Ciudad</label>
                          <select class="custom-select" size="3"id="City" name="city">
                            <option selected>Selecciona Ciudad</option>
                            <option value="Medellin">Medellin</option>
                            <option value="Bogota">Bogota</option>
                            <option value="Cali">Cali</option>
                          </select>
                        </div><div class="col">
                          <label for="Departament">Departamento</label>
                          <select class="custom-select" size="3"id="Departament" name="departament">
                            <option selected>Selecciona Departamento</option>
                            <option value="Antioquia">Antioquia</option>
                            <option value="Cundinamarca">Cundinamarca</option>
                            <option value="Magdalena">Magdalena</option>
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tel">Telefono</label>
                            <input type="text" class="form-control" id="tel" placeholder="Telefono" name="Tel">
                        </div>
                        <div class="col">
                            <label for="mail">E-Mail</label>
                            <input type="email" class="form-control" id="mail" placeholder="E-Mail" name="email">
                        </div>
                    </div>
                    <div class="form-group form-check my-3">
                      <input type="checkbox" class="form-check-input" id="accept">
                      <label class="form-check-label" for="accept">Acepto terminos y condiciones</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </section>
        <footer class="container-fluid text-center stylo_footer">
            <h2>&copy Derechos Reservados</h2>
        </footer>
    <script type="text/javascript"src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript"src="js/popper.js"></script>
    <script type="text/javascript"src="js/bootstrap.min.js"></script>   
    </body>
</html>
