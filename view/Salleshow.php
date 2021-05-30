<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/Salle.css">
    <title>Salle</title>
  </head>
  <body>
      <nav id="nav">

            <ul>
                <li><a id="link" class="active" href="http://localhost/mvc2/Brief-5/salle">Salle</a></li>
                <li><a id="link" href="http://localhost/mvc2/Brief-5/groupe">Groupe</a></li>
                <li><a id="link" href="http://localhost/mvc2/Brief-5/matiere">Matiere</a></li>
                <li><a href="http://localhost/mvc2/Brief-5/Login/logout"><button class="btn btn-outline-light" style="margin-top:6px;">Logout</button></a></li>
            </ul>

      </nav>
  <div id="salleForm">
        <p>
            <form action="http://localhost/mvc2/Brief-5/salle/save" method = "Post">
                
                <div id="inputs">

                    <div class="col-xs-6">
                        <label for="ex3">Name</label>
                        <input class="form-control" type="text" name="libelle[]">
                    </div>

                    <div class="col-xs-6">
                        <label for="ex3">Capacité</label>
                        <input class="form-control"  type="number" name="capacite[]">
                    </div>

                </div>

                <div class="col-md-12 text-center">
                    <!-- <input type="submit"  class="btn btn-outline-dark" > -->
                    <button class="btn btn-outline-dark" name="add">Save</button>

                </div>



            </form>
            <div class="col-md-12 text-center">
                    <button class="btn btn-outline-dark" onclick="multiSave()">Multi Save</button>
            </div>
        </p>
    </div>

<!--------------------- table ---------------------->

    <div id="table">

        <table class="table table-hover" >
            
            <tr>
            
                <th>id</th>
                <th>Libelle</th>
                <th>Capacité</th>
                <th>Action</th>
           
            </tr>

            <!-- loop to get rows -->
            <?php foreach($salles as $salle){?>
            <tr>

                <td><?php echo $salle['id'] ; ?></td>
                <td><?php echo $salle['libelle_S'] ; ?></td>
                <td><?php echo $salle['capacite_S'] ; ?></td>
                <td>
                    <a href="http://localhost/mvc2/Brief-5/salle/delete/<?=$salle['id'] ?>"><button class="btn btn-outline-danger">Delete</button></a>
                    <a href="http://localhost/mvc2/Brief-5/salle/edit/<?=$salle['id'] ?>"><button class="btn btn-outline-info">Edit</button></a>
                </td>
           
            </tr>
            <?php }?>
            
        </table>

    </div>

    <script>
        function multiSave(){
            var row=document.getElementById('inputs');
            row.innerHTML+="<div class='col-xs-6'><label for='ex3'>Name</label><input class='form-control' id='ex3' type='text' name='libelle[]'></div> <div class='col-xs-6'> <label for='ex3'>Capacité</label><input class='form-control' id='ex3' type='number' name='capacite[]'> </div>"
        }
    </script>
  </body>
</html>

