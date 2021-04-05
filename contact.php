<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

  <title>Donate</title>
  <style>
    .Click-here {
      cursor: pointer;
      margin: 0 auto;
      color: #ffff;
      width: 180px;
      text-align: center;
      font-size: 16px;
      padding: 18px 0;

      background-image: linear-gradient(190deg, #22bb33 0%, #22bb33 100%);

    }

    .custom-model-main {
      text-align: center;
      overflow: hidden;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      /* z-index: 1050; */
      -webkit-overflow-scrolling: touch;
      outline: 0;
      opacity: 0;
      -webkit-transition: opacity 0.15s linear, z-index 0.15;
      -o-transition: opacity 0.15s linear, z-index 0.15;
      transition: opacity 0.15s linear, z-index 0.15;
      z-index: -1;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .model-open {
      z-index: 99999;
      opacity: 1;
      overflow: hidden;
    }

    .custom-model-inner {
      -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      transform: translate(0, -25%);
      -webkit-transition: -webkit-transform 0.3s ease-out;
      -o-transition: -o-transform 0.3s ease-out;
      transition: -webkit-transform 0.3s ease-out;
      -o-transition: transform 0.3s ease-out;
      transition: transform 0.3s ease-out;
      transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
      display: inline-block;
      vertical-align: middle;
      width: 600px;
      margin: 30px auto;
      max-width: 97%;
    }

    .custom-model-wrap {
      display: block;
      width: 100%;
      position: relative;
      background-color: #fff;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 6px;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
      box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
      background-clip: padding-box;
      outline: 0;
      text-align: left;
      padding: 20px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      max-height: calc(100vh - 70px);
      overflow-y: auto;
    }

    .model-open .custom-model-inner {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      transform: translate(0, 0);
      position: relative;
      z-index: 999;
    }

    .model-open .bg-overlay {
      background: rgba(0, 0, 0, 0.6);
      z-index: 99;
    }

    .bg-overlay {
      background: rgba(0, 0, 0, 0);
      height: 100vh;
      width: 100%;
      position: fixed;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      -webkit-transition: background 0.15s linear;
      -o-transition: background 0.15s linear;
      transition: background 0.15s linear;
    }

    .close-btn {
      position: absolute;
      right: 0;
      top: -30px;
      cursor: pointer;
      z-index: 99;
      font-size: 30px;
      color: #fff;
    }
  </style>

<body style="background-color: Lavender">

  <nav class="navbar navbar-expand-sm fixed-top navbar-light">
    <div class="container">
      <a class="navbar-brand" style="color: #DA70D6" href="#">
        <b>Sparks Foundation NGO</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" style="color: #DA70D6" href="index.php"><strong>Home</strong></a>
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
  <section class="section-preview">

    <!--Section: Contact v.2-->
    <section class="mb-4">

      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4" style="color: #DA70D6">Contact us</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5" style="color: #DA70D6"><b>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
          a matter of hours to help you.</b></p>

      <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="contact.php" method="POST">

            <!--Grid row-->
            <div class="row" style="margin-left:250px;">

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <label for="name" class="">Your name</label>
                  <input type="text" id="name" name="name" class="form-control">

                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">

                  <label for="email" class="">Your email</label>
                  <input type="text" id="email" name="email" class="form-control">
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
           
            <!--Grid row-->

            <!--Grid row-->
            <div class="row" style="margin-left:250px;">

              <!--Grid column-->
              <div class="col-md-12">

                <div class="md-form">
                  <label for="message">Your message</label>
                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>

                </div>

              </div>
            </div>
            <!--Grid row-->

          </form>




    </section>
    <!--Section: Contact v.2-->
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">

          <!-- Message Box HTML -->
          <div class="Click-here">Send</div>
          <div class="custom-model-main">
            <div class="custom-model-inner">
              <div class="close-btn">×</div>
              <div class="custom-model-wrap">
                <div class="pop-up-content-wrap">
                  <h2>Have a nice day!</h2>
                  <p>Our team will come back to you within
                    a matter of hours to help you.</p>
                </div>
              </div>
            </div>
            <div class="bg-overlay"></div>
          </div>
          <!-- End Message Box HTML -->

        </div>
      </div>
    </div>
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script>
    $(".Click-here").on('click', function() {
      $(".custom-model-main").addClass('model-open');
    });
    $(".close-btn, .bg-overlay").click(function() {
      $(".custom-model-main").removeClass('model-open');
     
        location.href = "index.php";
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>