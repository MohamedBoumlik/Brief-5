<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/Groupe.css">
    <title>Matiere</title>
    </head>
    <body>

         <nav id="nav">

            <ul>
                <li><a id="link" href="http://localhost/mvc2/Brief-5/salle">Salle</a></li>
                <li><a id="link" href="http://localhost/mvc2/Brief-5/groupe">Groupe</a></li>
                <li><a id="link" class="active" href="http://localhost/mvc2/Brief-5/matiere">Matiere</a></li>
                <li><a href="http://localhost/mvc2/Brief-5/Login/logout"><button class="btn btn-outline-light" style="margin-top:6px;">Logout</button></a></li>
            </ul>

         </nav>
        
        <div id="groupeForm">
            <p>

                <form action="http://localhost/mvc2/Brief-5/matiere/save" method = "Post">
                    
                    <div id="inputs">
                        
                        <div class="col-xs-6">
                            <label for="ex3">Name</label>
                            <input class="form-control" id="ex3" type="text" name="name">
                        </div>

                    </div>    

                    <div class="col-md-12 text-center">
                        <button class="btn btn-outline-dark">Save</button>
                    </div>                   
                    
                </form>
            </p>
        </div>    

<div id="table"style="width:60% ; margin-left:21% ;margin-top 30px;">

<table class="table table-hover">

    <tr>
        <th>id</th>
        <th>Matiere</th>
        <th>Action</th>
    </tr>
    
    <!-- loop to get rows -->
    <?php foreach($matieres as $matiere){?>
    <tr>
        <td><?php echo $matiere['id'] ; ?></td>
        <td><?php echo $matiere['name'] ; ?></td>
        <td>
            <a href="http://localhost/mvc2/Brief-5/matiere/delete/<?=$matiere['id'] ?>"><button class="btn btn-outline-danger">Delete</button></a>
            <a href="http://localhost/mvc2/Brief-5/matiere/edit/<?=$matiere['id'] ?>"><button class="btn btn-outline-info">Edit</button></a>
        </td>
    </tr>
    <?php }?>
</table>

</div>
