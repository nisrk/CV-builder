<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
  }

  h1, h2, p {
    margin: 0;
  }

  img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    float: left;
   
    border: 5px solid #c972cb4f;
  }

  h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #db34d3;
  }

  h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #ff77f5;
  }

  p {
    font-size: 18px;
    margin-bottom: 20px;
    color: #333;
  }

  #resume {
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px #333;
    text-align: center;
  }

  button {
    padding: 10px 20px;
    background-color: #db34d3;
    color: #fff;
    border: none;
    border-radius: 25px;
    font-size: 18px;
    cursor: pointer;
  }
</style>
<?php 
      
      $name = $_POST['name'];
      $age = $_POST['age'];
      $number = $_POST['number'];
      $education = $_POST['education'];
      $experience = $_POST['experience'];
      $skills = $_POST['skills'];
      $picture=$_FILES['picture']['name'];
      $tmp_name=$_FILES['picture']['tmp_name'];
      $folder="images/".$picture;
      $pc=move_uploaded_file($tmp_name, $folder);
      ?>

<div id="resume">
  <img src="echo $pc;">
  <h1><?php echo $name; ?></h1>
  <h2>Personal Information</h2>
  <p>Age: <?php echo $age; ?></p>
  <p>Number: <?php echo $number; ?></p>
  <h2>Education</h2>
  <p><?php echo $education; ?></p>
  <h2>Experience</h2>
  <p><?php echo $experience; ?></p>
  <h2>Skills</h2>
  <p><?php echo $skills; ?></p>
  <br><br>
  <button class="download" id="sub">Download</button>
    
</div>
<script>
        var btn = document.querySelector("button");
        btn.onclick = () =>
        window.print();
        
    </script>
