<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/clients.css">
  </head>
  <body>
    <nav class="navbar">
      <a href="clients.php"></a>
      <a class="nav-btn" href="#">Facturar</a>
      <a class="nav-btn" href="#">Clientes</a>
      <a class="nav-btn" href="#">Materiales</a>
      <a class="nav-btn" href="#">Ordenes de compra</a>
      <a class="nav-btn" href="#">Facturas</a>
    </nav>
    <div class="body">
      <div class="tbl">
        <table class="table">
          <div class="options">
            <a class="btn add-container" style="color:white;" onclick="showModal()">Nuevo Cliente</a>
            <form class="form-container">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
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
                  <div class="col">
                    <label for="[object Object]">Nombre</label>
                    <input type="text" name="name" value="" placeholder="Nombre">
                  </div>
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
                  </div>
                  <div class="col">
                    <label for="[object Object]">Apellido Paterno</label>
                    <input type="text" name="name" value="" placeholder="Apellido Paterno">
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
