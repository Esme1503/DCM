<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/sections.css">
  </head>
  <body>
    <nav class="navbar">
      <a href="clients.php"></a>
      <a class="nav-btn" href="#">Clientes</a>
      <a class="nav-btn" href="#">Materiales</a>
      <a class="nav-btn" href="#">Ordenes de compra</a>
      <a class="nav-btn" href="#">Facturas</a>
    </nav>
    <div class="body">
      <div class="tbl">
        <table class="table">
          <div class="options">
            <div class="search">
              <form class="form-container">
                <input class="form-search mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn add-container" type="submit">Search</button>
              </form>
            </div>
            <a class="btn add-container" style="color:white;" onclick="showModal()">Nuevo Cliente</a>
          </div>
          <thead class="thead-dark">
            <tr>
              <th class="hd" scope="col">#</th>
              <th class="hd" scope="col">First</th>
              <th class="hd" scope="col">Last</th>
              <th class="hd" scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <div id="modal" class="modal">
          <a class="cerrar" style="color:white" onclick="hideModal();">X</a>
          <div class="form-modal">
            <form class="" action="index.html" method="post">
              <div class="container-fluid">
                <div class="row">
                  <h6 class="title">NUEVO <span class="title-spn">CLIENTE</span></h6>
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
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/modal.js">
    </script>
  </body>
</html>
