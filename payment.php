<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

  <title>Donate</title>

</head>

<body style="background-color: Lavender">
  <nav class="navbar navbar-expand-sm fixed-top navbar-light">
    <div class="container">
      <a class="navbar-brand" style="color: #DA70D6" href="#"><b>Sparks Foundation NGO</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="color: #DA70D6" href="home.php"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #DA70D6" href="about.php"><strong>About us</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #DA70D6" href="contact.php"><strong>Contact us</strong></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="row" style="padding:100px 300px;" <div class="col-50">
    <div class="container">
      <form style="padding:25px;" action="pay.php" method="post">
        <div class="row">
          <div class="col-25">
            <label class="control-label col-sm-2" for="email">Price:</label>

            <input type="text" class="form-control" name="price" id="email" placeholder="">


            <label class="control-label col-sm-2" for="pwd">Name:</label>

            <input type="text" class="form-control" name="customername" id="pwd" placeholder="">


            <label class="control-label col-sm-2" for="email">email:</label>

            <input type="text" class="form-control" name="email" id="email" placeholder="">


            <label class="control-label col-sm-2" for="pwd">Contact no.:</label>

            <input type="text" class="form-control" name="contact" id="pwd" placeholder="">

          </div>


          <button type="submit" class="btn btn-success" style="margin-top:20px;">Proceed To Pay</button>
      </form>
    </div>
  </div>

  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>