<?php /* require_once ("Includes/session.php"); */ ?>

<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>WhiteBoard</title>

  
  <link rel="stylesheet" href="stylesheets/app.css" />
  
  <script src="javascripts/vendor/jquery.js"></script>
  <script src="javascripts/vendor/custom.modernizr.js"></script>
  <script src="javascripts/vendor/custom.js"></script>


</head>
<body>

    <header>
        <div class="row contained">
            <div class="large-12">
                <a href="/"><div class="logo">WhiteBoard</div></a>
                <ul class="topnav">
                    <!-- <li><a href="#">Blank</a></li> -->
                    <li><a href="dashboard.php">Profile</a></li>
                    <li><a href="settings.php">Menu</a></li>
                    <li><a href="signin.php">Sign In</a></li>
                </ul>
            </div>
        </div>
    </header>
    

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>My Site's Title</title>
        <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> 


    </head>
    <body>
        <div class="outer-wrapper">
        <header>
            <div class="content-wrapper">
                <div class="float-left">
                    <p class="site-title"><a href="/index.php">My Site</a></p>
                </div>
                <div class="float-right">
                    <section id="login">
                        <ul id="login">
                        <?php /*
                        if (logged_on())
                        {
                            echo '<li><a href="/logoff.php">Sign out</a></li>' . "\n";
                            if (is_admin())
                            {
                                echo '<li><a href="/addpage.php">Add</a></li>' . "\n";
                                echo '<li><a href="/selectpagetoedit.php">Edit</a></li>' . "\n";
                                echo '<li><a href="/deletepage.php">Delete</a></li>' . "\n";
                            }
                        }
                        else
                        {
                            echo '<li><a href="/logon.php">Login</a></li>' . "\n";
                            echo '<li><a href="/register.php">Register</a></li>' . "\n";
                        } */
                        ?>
                        </ul>
                        <?php /*
                            
                             if (logged_on()) {
                            echo "<div class=\"welcomeMessage\">Welcome, <strong>{$_SESSION['username']}</strong></div>\n";
                        } */ ?>
                    </section>
                </div>

                <div class="clear-fix"></div>
            </div>

                <section class="navigation" data-role="navbar">
                    <nav>
                        <ul id="menu">
                            <li><a href="/index.php">Home</a></li>
                            <?php /*
                                $statement = $databaseConnection->prepare("SELECT id, menulabel FROM pages");
                                $statement->execute();

                                if($statement->error)
                                {
                                    die("Database query failed: " . $statement->error);
                                }

                                $statement->bind_result($id, $menulabel);
                                while($statement->fetch())
                                {
                                    echo "<li><a href=\"/page.php?pageid=$id\">$menulabel</a></li>\n";
                                }
                            */ ?>
                        </ul>
                    </nav>
            </section>
        </header> -->