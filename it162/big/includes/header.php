<?php include 'includes/portal-config.php';?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <title><?=$title?></title>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />
        <!-- <link rel="stylesheet" href="css/nav.css"> -->
        <link rel="stylesheet" href="css/portal.css" />
        <link rel="stylesheet" href="css/forms.css">
        <link rel="stylesheet" href="portal.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/796ef3a32a.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
        <!-- jQuery-->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <!--MenuMaker plugin -->
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <!-- Icaon Library -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
        </head>
        <body>
    <header>
            <h1><i class="logo fas <?=$logo?>"<?=$logo_color?>></i></h1>
            <input type="checkbox" id="nav-toggle" class="nav-toggle"> 
            
            
        <nav>
            <ul class="topnav" id="myTopnav">
            <?=makeLinks($nav1)?>
            <!-- START COMMENT OUT NAV
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contactme.php">Contact Sara</a></li>
            END COMMENT OUT NAV -->

            <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>     
        </ul>
      
        </nav>
                    
        <label for="nav-toggle" class="nav-toggle-label">
           <span></span>
        </label>
             

        </header>
        
    <div class="wrapper">
        <!--header ends here-->