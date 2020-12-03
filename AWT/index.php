<!DOCTYPE html>
<html>
  <head>
    <title>HARISH CHANDRA DAS ,201800101</title>
    
    <!-- (A) CSS + JS -->
    <link href="style.css" rel="stylesheet">
    <script src="js_gallery.js"></script>
    <!-- BOOTSTRAP link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color:#DAF7A6">
<header style="background-color:#fd3a69;width: 100%; margin-bottom:0px;" class="navbar navbar-expand-sm">
    <h2 class="mx-auto" style="color:white; font-family:Cursive;">MY PHP Gallery </h2><br>
</header>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="institute.jpg" alt="logo" style="width:55px;">
  </a>
  
  <form method="post" class="form-inline">
  <ul class="navbar-nav">
    <li class="nav-item">
    <input type="submit" name="button1" class="btn btn-success ml-2" value="CAR"/> 
    </li>
    <li class="nav-item">
    <input type="submit" name="button2" class="btn btn-success ml-2" value="PERSONALITY" /> 
    </li>
    <li class="nav-item">
    <input type="submit" name="button3" class="btn btn-success ml-2" value="MOVIE" /> 
    </li>
  </ul>
  </form>
  <input class="form-control col-lg-3" type="text" placeholder="Search" size="10" style="margin-left:45%;">
    <button class="btn btn-success ml-lg-3" size="10">Search</button>  
</nav>

    <!-- (B) LIGHTBOX -->
    <div id="lback" onclick="gallery.hide()">
      <div id="lfront"></div>
    </div>

    <!-- (C) THE GALLERY -->
    <br>
    <div class="gallery">
    <?php
if(isset($_POST['button1'])) { 
  $dir = __DIR__ . DIRECTORY_SEPARATOR . "cars" . DIRECTORY_SEPARATOR;
    $image = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
    shuffle($image);
    foreach ($image as $i) {
      printf("<img src='cars/%s' onclick='gallery.show(this)'/>", basename($i));
    }
} 
elseif(isset($_POST['button2'])) { 
  $dir = __DIR__ . DIRECTORY_SEPARATOR . "person" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
    shuffle($images);
    foreach ($images as $i) {
      printf("<img src='person/%s' onclick='person.show(this)'/>", basename($i));
    }
} 
elseif(isset($_POST['button3'])) { 
  $dir = __DIR__ . DIRECTORY_SEPARATOR . "movies" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
    shuffle($images);
    foreach ($images as $i) {
      printf("<img src='movies/%s' onclick='gallery.show(this)'/>", basename($i));
    }
} 
else{
  $dir = __DIR__ . DIRECTORY_SEPARATOR . "cars" . DIRECTORY_SEPARATOR;
    $image = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
    shuffle($image);
    foreach ($image as $i) {
      printf("<img src='cars/%s' onclick='gallery.show(this)'/>", basename($i));
    }
}
    ?></div><br>
<div class="p-3 mb-2 bg-primary text-white"><h3 style="font-family: Courier, monospace; font:bolder; text-align:center;">BMI Calculator</h3></div>
<div class=" border p-3" style="background-color::#FFC300">
  <form name="bmiForm">
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <label>Your Weight(kg):</label> <input type="text" name="weight" class="form-control">
          </div>
          <div class="col-md-6">
            <label>Your Height(cm):</label> <input type="text" name="height" class="form-control">
          </div>
        </div><br>

        <div class="row">
            <input type="button" value="Calculate BMI" onClick="calculateBmi()" class="btn  btn-warning justify-center mx-auto">
        </div><br>

        <div class="row">
            <div class="col-lg-6">
              <label>Your BMI:</label> <input type="text" name="bmi"  class="form-control" >
            </div>
            <div class="col-lg-6">
              <label>This Means:</label> <input type="text" name="meaning" class="form-control">
            </div>
        </div><br>
        <div class="row">
              <input type="reset" value="Reset" class="btn  btn-danger justify-center mx-auto" />
        </div>
    </div>
  </form>
</div>

<script language="JavaScript">

function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
</script>
<div class="container bg-secondary mw-100" style="color:white;width:100%;">
  <div class="row"> 
    <div class="col-lg-4 ">
    <img src="institute.jpg" alt="logo" style="width:100px;" class="mt-2">
    <p>Sikkim Manipal Institute of Technology</p>
    <p>Sikkim,majitar,737535</p>
    <p>Contact: 9767xxxx89</p>
    </div>
    <div class="col-lg-4">
        <p>Submission By :</p>
        <p>Name : Harish chandra Das</p>
        <p>Section :A</p>
        <p>Roll no :17</p>
        <p>Registration No :201800101</p>
    </div>
    <div class="col-lg-4"> 
        <h3>AWT Assignment</h3>
        <p>Assistant Professor:</p>
        <p>Sir :Biraj Upadhyaya</p>
        <p>Department of computer science and Engineering</p>
    </div>
  </div>

</div>
<footer style="background-color:#03506f;width: 100%; margin-bottom:0px;" class="navbar navbar-expand-sm">
    <h4 class="mx-auto" style="color:white; font-family:Cursive;">&copy; All Rights Reserved By Harish Chandra Das(201800101,5th Semester,Sec:A) </h4>
</footer>
  </body>
</html>