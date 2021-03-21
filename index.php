<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <link rel="stylesheet" href="style-main.css">
</head>
<body>
<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row about mb-5 pt-5">
            <div class="col">
                <h2>ABOUT</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
		        <div id="scene" class="scene">
			        <div data-depth="0.60"><img src="../img/roti.png" style="width:200px; height:200px;margin-top: 10px;" class="img-fluid" alt="About"></div>
                </div>
            <div class="col-lg-12">
            <h3 class="pKanan">This is About</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste odit iusto neque expedita laboriosam, 
                debitis dignissimos labore vel tempore eos voluptates fugit commodi et delectus accusantium quasi nesciunt. Maiores, non?</p>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- akhir about -->

<!-- Message -->
<section id="contact" class="contact mb-5 pt-5">
    <div class="container">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-lg-6">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Button</button>
        </div>
    </div>
    </div>
</section>

<!-- Awal Footer -->
<footer id="foot" class="page-footer bg-dark">
    <div class="headfoot">
      <div class="container">
        <div class="row py-4 d-flex align-items-center">
          <div class="col-md-12 text-center">
            <a href="#"><i class="fab fa-facebook fa-2x text-white mr-5"></i></a>
            <a href="#"><i class="fab fa-google-plus-g fa-2x text-white mr-5"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x text-white mr-5"></i></a>
            <a href="#"><i class="fab fa-instagram fa-2x text-white mr-5"></i></a>
            <a href="#"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center text-md-left mt-5 text-light">

      <div class="row">
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">FEMALE</h6>
          <hr class="bg-secondary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;">
          <ul class="list-unstyled" style="text-align:justify;">
            <li class="my-2"><a href="#">Food</a></li>
            <li class="my-2"><a href="#">Information</a></li>
            <li class="my-2"><a href="#">About</a></li>
            <li class="my-2"><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">The Provider</h6>
          <hr class="bg-secondary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;">
          <ul class="list-unstyled">
            <li class="my-2"> <a href="#"><i class="fab fa-facebook fa-2x text-white mr-3"></i>GroupPwl8</a></li>
            <li id="move" class="my-2"> <a href="#"><i class="fab fa-google-plus-g fa-2x text-white mr-2"></i>GroupPwl8@gmail.com</a></li>
            <li class="my-2"> <a href="#"><i class="fab fa-twitter fa-2x text-white mr-3"></i>Group_Pwl8</a></li>
            <li class="my-2"> <a href="#"><i class="fab fa-instagram fa-2x text-white mr-3"></i>@GroupPwl8</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright text-center py-3">
        <p>&copy; Copyright
          <a href="GroupPwl">Female</a>
        </p>
        <p>All Deserve</p>
      </div>
  </footer>
  <!-- END FOOTER -->

<script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>