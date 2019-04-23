<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luciene Rodrigues</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="album.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container-fluid bg-6 text-center">  
  <div class="secondDiv">
  <h1>CV Builder</h1>
  <p> Insert your details to get your Custom CV </p>
  </div>
</div>

<div class="container-fluid bg-6 text-center">

<div style="float:left; width: 50%;">
<form action="testBackup.php" method="POST">
  <h4>Personal Details</h4>
  Insert Your name <input type="text" name="name"> <br>
  Insert Your Address <input type="text" name="address"><br>
  Insert Your email <input type="text" name="email"><br>
  Insert Your Phone Number <input type="number" name="phoneNumber"><br>
  Insert a small profile <input type="text" name="profile"><br>

  <h4>Experience</h4>
  Insert a Experience 1 <input type="text" name="experience1"><br>
  Insert a Description 1 <input type="text" name="description1"><br>
  br>
  Insert a Experience 2 <input type="text" name="experience2"><br>
  Insert a Description 2 <input type="text" name="description2"><br>
  br>
  Insert a Experience 3 <input type="text" name="experience3"><br>
  Insert a Description 3 <input type="text" name="description3"><br>
  br> 
  Insert a Experience 4 <input type="text" name="experience4"><br>
  Insert a Description 4 <input type="text" name="description4"><br>

    </div>
  <div class="container-fluid bg-6">  
  <div style="float:right; width: 50%;">
<form action="testBackup.php" method="POST">
  <h4>Education</h4>
  Insert a Education 1 <input type="text" name="education1"><br>
  Insert a Education 2 <input type="text" name="education2"><br>
  Insert a Education 3 <input type="text" name="education3"><br>
  Insert a Education 4 <input type="text" name="education4"><br>

  <h4>Top 3 Skills</h4>
  Add a Skill 1 <input type="text" name="skill1"><br>
  Add a Skill 2 <input type="text" name="skill2"><br>
  Add a Skill 3 <input type="text" name="skill3"><br>

  <h4>Languages</h4>
  English: <input type="checkbox" name="language[]" value="english"><br>
  Portuguese: <input type="checkbox" name="language[]" value="portuguese"><br>
  Spanish: <input type="checkbox" name="language[]" value="spanish"><br>
  German: <input type="checkbox" name="language[]" value="german"><br>

  <h4>Availabilitys</h4>
  What is your Availability? <input type="text" name="availability"><br>
  <br>
  <input type="submit" value="Send and Build CV">
  </div>
 
</form>  
</div>
</div>
<hr>
<?php
    $name = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $profile = $_POST["profile"];

    $experience1 = $_POST["experience1"];
    $experience2 = $_POST["experience2"];
    $experience3 = $_POST["experience3"];
    $experience4 = $_POST["experience4"];

    $description1 = $_POST["description1"];
    $description2 = $_POST["description2"];
    $description3 = $_POST["description3"];
    $description4 = $_POST["description4"];

    $education1 = $_POST["education1"];
    $education2 = $_POST["education2"];
    $education3 = $_POST["education3"];
    $education4 = $_POST["education4"];

    $skill1 = $_POST["skill1"];
    $skill2 = $_POST["skill2"];
    $skill3 = $_POST["skill3"];

    $language = $_POST["language"];

    $availability = $_POST["availability"]



?>
<html>
<div class="container-fluid bg-6 text-center">  
	<h1> <?php echo $name ?> </h1>
	<p> <span class="glyphicon glyphicon-map-marker" style="color:#002db3"></span>  <?php echo $address ?> </p>  
	<p> <span class="glyphicon glyphicon-envelope" style="color:#002db3"></span>  <?php echo $email ?></p>  
	<p> <span class="glyphicon glyphicon-phone" style="color:#002db3"></span>  <?php echo $phoneNumber ?> </p>  
		  
	<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Add font awesome icons -->
	    <a href="https://www.linkedin.com/in/luciene-rodrigues/" class="fa fa-linkedin"> - https://www.linkedin.com/in/luciene-rodrigues/</a>
</div>

<div class="container-fluid bg-3 text-center">  
    <div class="boxText">
    <h4>Personal Profile </h4>
    <p><?php echo $profile ?>
    </p>
    
    <div> 
      <br>
      <h4>Top Skills </h4>
      <div class="col-sm-4">
      <?php echo $skill1 ?> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <br> 
      </div>
      <div class="col-sm-3">
      <?php echo $skill2 ?> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <br> 
      </div>
      <div class="col-sm-3">
      <?php echo $skill3 ?> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <br> 
      </div>
    </div>
</div>

<div class="container-fluid bg-3 text-center">    
  <h2>Experience</h2><br>
    <div class="row">
      <div class="col-sm-3">
      <div class="boxText">
      <h4> <?php echo $experience1 ?> </h4>     
      <p><?php echo $description1 ?> </p> 
      </div>
      </div>
      <div class="col-sm-3"> <div class="boxText">
      
    <h4> <?php echo $experience2 ?></h4>         
    <p><?php echo $description2 ?> </p>
      </div>
      </div>
      <div class="col-sm-3"> 
      <div class="boxText">
        <h4> <?php echo $experience3 ?></h4>     
        <p><?php echo $description23 ?> </p>      </div>
      </div>
      <div class="col-sm-3"> 
      <div class="boxText">
        <h4><?php echo $experience4 ?></h4>     
        <p><?php echo $description4 ?> </p>      </div>
      </div>
    </div>
</div><br>	

<div class="container-fluid bg-3 text-center">    
  <h2>Education / Qualifications </h2><br>
    <div class="row">
      <div class="col-sm-3"> 
      <div class="boxText">
      <h4> <?php echo $education1 ?> </h4>     
      <p>   </div>
      </div>
      <div class="col-sm-3"> 
      <div class="boxText">
      
    <h4> <?php echo $education2 ?></h4>         
    <p> </p>
      </div>
      </div>
      <div class="col-sm-3"> 
      <div class="boxText">
        <h4> <?php echo $education3 ?></h4>     
        <p> </p>
      </div>
      </div>
      <div class="col-sm-3"> 
      <div class="boxText">
        <h4><?php echo $education4 ?><h4>     
        <p> </p>
      </div>
      </div>
    </div>
</div>
<div class="container-fluid bg-3 text-center">  
    <div class="boxText">
    <h3>Other Information</h3><br>
        <div class="col-sm-4">
          <h4> Languages</h4>
          <?php echo $language[0]; ?> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span><br>
          <?php echo $language[1]; ?> <span class="glyphicon glyphicon-star"></span>    <br>
          <?php echo $language[3]; ?> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
        </div>
        <div class="col-sm-4">
          <h4>Availability </h4>
          <p> <?php echo $availability; ?> </p>
        </div>
      
</div>

</body>
</html>
