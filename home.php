
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Website</title>
    <link rel="stylesheet" href="web.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   
</head>
<body>
 
<header>
  <nav1>

<h1> Home Page</h1>
  <i class="fas fa-home icon"></i> 
    <a href="home.php">Home</a>
    <a href="upload.php"> upload</a>
    <a href="about.php">About us</a>
    <a href="">Contact</a>
    <a href="">service</a>
   

  </nav1>

  <div class="off-screen-menu">
  
  
  <a href="home.php">Login</a>
    <a href="register.php">Sign up</a>
    <a href="logout.php">Logout</a>
    <a href="">Profile</a>
    <a href="">Settings</a>
  </div>
  <nav>
    <div class="ham-menu">
  <i class="fas fa-bars"></i> 
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
</header> 
 
<script src="web.js"></script>

<div class="search">
  <div class="search-box">
    <div class="search-field">
      <input placeholder="Search..." class="input" type="text">
      <div class="search-box-icon">
        <button class="btn-icon-content">
          <i class="search-icon">
            <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" fill="#fff"></path></svg>
          </i>
        </button>
      </div>
    </div>
  </div>
</div>

 



       
<div class="image_container">
        <?php

            $images=file_get_contents('images.json');
            $images=json_decode($images,true);

            foreach($images as $image)
            {
                echo '<div class="image-card">';
                echo '<div class="image-item">';
                echo '<img src="'.$image['image'].'" alt="Image" >';
                
                echo '<p style="font-family: Arial, sans-serif;">'.$image['description'].'</p>';
                echo '<p style="font-family: Arial, sans-serif;">'.$image['price'].'</p>';

                echo '<button class="btn" style="background-color: green;">Buy</a></button>';
                echo '<button class="btn"  style="background-color:red;">Delete</a></button>';
                echo '</div>';
                echo '</div>';
            }

            

        ?>
    </div>


<footer>

  <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
  <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
  <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
  <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
  <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>

  <a href="https://www.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
  

 
</footer>
</body>
</html>
