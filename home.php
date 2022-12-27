<?php
session_start();


if( isset($_SESSION['id']) && isset( $_SESSION['user_name'])){
    ?>
    <?php
include "upload.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary na" >
  <a class="navbar-brand sample" href="#" style="margin-left:30px; font-size:40px !important;" >fileUp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active log" href="logout.php" >logOut<span class="sr-only"></span></a>
      <!-- <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Upload</a> -->
 <form class="form-inline form1" >
    <input class="form-search test" type="search" placeholder="Search" aria-label="Search">
    <button class="searchbutton" type="submit">Search</button>
  </form>
    </div>
   
  </div>

</nav>
<div class="full">
    <div class="container">
        <div class="upfrm">
            <?php if(!empty($statusMsg)){ ?>
                <p class="status-msg"><?php echo $statusMsg; ?></p>
            <?php } ?>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <h3 class="select">Select Image File to Upload:</h3>
                <!-- <label for="">Select Image File to Upload:</label> -->
                <div class="filechoose">
                <input id="filetype" type="file" name="file">
                <input id="submitbutton"type="submit" name="submit" value="Upload">
            </div>
            </form>
        </div>
    </div>
    <div class="gallery">
        <div class="gcon" style="margin-left:15px;">
            <h2 class="uploadtitle">Uploaded Images</h2>
            <?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    
    <div  style="border:solid 2px ; width: 220px; display:inline-block; height: 270px; padding: 10px;">
    <form action="delete.php" method="post" >
    <img class="uploadedImages" style="width:200px; height:200px;" name="image" src="<?php echo $imageURL; ?>" alt="" />
    <?php
    echo $row["file_name"];
    ?>
    
    <button style="border-radius :15px; margin: top 20px; background-color:#22A39F;  position:relative; top:10px;"> Delete</button>
    </form>
    </div>
    
    
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
        </div>
    </div>
</div>
</body>
</html>

        <?php
}
else{
    header("Location:indexnew.php");
    exit();
}
?>
