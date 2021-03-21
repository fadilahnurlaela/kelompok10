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

<script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>