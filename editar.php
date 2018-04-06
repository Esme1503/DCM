<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/sections.css">
  </head>
  <body>
    <div id="modal-edit" class="modal" style="display:block">
      <div class="form-modal">
        <a class="cerrar-edit cerrar" style="color:white" onclick="hideModalEdit();">X</a>
        <form class="" action="" method="post">
          <div class="container-fluid">
            <div class="row">
              <h6 class="title">Editar<span class="title-spn"></span></h6>
            </div>
            <div class="row">
              <div class="col">
                <input class="form-element" type="text" name="name" value="" placeholder="Nombre">
              </div>
              <div class="col">
                <input class="form-element" type="text" name="a_paterno" value="" placeholder="Apellido Paterno">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input class="form-element" type="text" name="a_materno" value="" placeholder="Apellido Materno">
              </div>
              <div class="col">
                <input class="form-element" type="text" name="rfc" value="" placeholder="RFC">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input class="form-element" type="text" name="colonia" value="" placeholder="Colonia">
              </div>
              <div class="col">
                <input class="form-element" type="text" name="calle" value="" placeholder="Calle">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input class="form-element" type="text" name="num_int" value="" placeholder="Numero interior">
              </div>
              <div class="col">
                <input class="form-element" type="text" name="num_ext" value="" placeholder="Numero exterior">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input class="form-element" type="text" name="num_tel" value="" placeholder="Numero telefónico">
              </div>
              <div class="col">
                <input class="form-element" type="text" name="rol" value="" placeholder="Rol">
              </div>
            </div>
            <div class="row">
              <div class="col"></div>
              <div class="col">
                <button class="btn add-container" style="float:right" type="submit" name="button">Guardar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
