<?php include('includes/portal-config.php'); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?php echo $subtitle;?></title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/796ef3a32a.js" crossorigin="anonymous"></script>
  
 </head>
 <body>
    <header>
     <h1 class="logo"><a href="index.php"> AH</a></h1> 
       <input type="checkbox" id="nav-toggle" class="nav-toggle">
        
        <?php //echo makeLinks($nav1); ?>
         <nav> 
            <ul>
                <li><a href="index.php" class="active" ><i class="fas fa-home"></i> Inicio</a></li>                     
                <li><a href="gallery.php"><i class="fas fa-image"></i>  Gallery</a></li>
                <li><a href="contactanos.php"><i class="fas fa-calendar-alt"></i> Contactanos</a></li>
                <li><a href="ubicacion.php"><i class="fas fa-map-marker-alt"></i> Ubicacion</a></li>
                         
            </ul>
        </nav> 
        <label for="nav-toggle" class="nav-toggle-label">
           <span></span>
        </label>
     </header>