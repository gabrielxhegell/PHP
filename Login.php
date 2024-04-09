<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="col-md-5 mx-auto border mt-3" style="border-radius: 10px;">
    <div class="container">
      <div class="row">
        <div class="col" style="display:flex; justify-content:center">
          <img src="foto.jpg" alt="" style="width:50%; border-radius:10%;" class="m-3" >
        </div>
        <div class="col mt-5 mb-0">
          <p>Gabriel Hegel Pradana Nugraha</p>
          <p>225314008</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5 mx-auto border mt-3" style="border-radius: 10px;">
    <h2 class="m-5 mb-0 mt-3">Login</h2>
    <form class="p-5" action="LoginSession.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="InputUsername" name="username">
      </div>
      <div class=" mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPassword" name="password">
      </div>
      <button type="submit" class="btn btn-primary mb-3">Submit</button>
      <?php
      if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo ' <div class="alert alert-danger" role="alert">Username atau Password salah!</div>';
      }
      ?>
    </form>
  </div>
</body>

</html>