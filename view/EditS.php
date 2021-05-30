<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Edit Salle</title>
  </head>
  <body>
      <nav id="nav" style="height:50px ;background-color: rgb(46, 46, 46)"></nav>
      <div id="salleForm" style="width: 70%; margin-left: 14%;">
        <p>
            <form action="http://localhost/mvc2/Brief-5/salle/update/<?=$salle['id']?>" method = "Post">
                
                <div id="inputs">

                    <div class="col-xs-6">
                        <label for="ex3">Name</label>
                        <input class="form-control" id="ex3" type="text" name="name" value="<?=$salle['libelle_S']?>">
                    </div>

                    <div class="col-xs-6">
                        <label for="ex3">Capacité</label>
                        <input class="form-control" id="ex3" type="number" name="cap" value="<?=$salle['capacite_S']?>">
                    </div>

                </div>

                <div class="col-md-12 text-center" style="margin-top: 15px;">
                    <button class="btn btn-outline-dark" >Update</button>
                </div>

            </form>
        </p>
       </div>

    </body>
</html>

