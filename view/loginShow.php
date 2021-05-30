<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/mvc2/Brief-5/view/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <nav id="nav" style="height:50px ;background-color: rgb(46, 46, 46)"></nav>

    <div id="form">
      
      <form action="http://localhost/mvc2/Brief-5/login/signin" method="POST" >

          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address :</label>
          <input type="email" class="form-control" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password :</label>
          <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-outline-dark">Sign in</button><br>

        <a href="http://localhost/mvc2/Brief-5/enseignant/signup" id="link">Sign up</a>
      </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>