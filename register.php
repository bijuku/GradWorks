    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
     ?>

    <div class="row">
        <?php include('Includes/left-nav.php'); ?>
        <div class="large-8 columns signup" id="main-content">
            <section class="columns large-10 large-centered">
                <form action="register.php" id="register" method="post">
                    <table border="0">
                        <tbody>

                        <tr>
                            <td><label for="name">Name </label> </td>
                            <td><input id="name" maxlength="45" name="name" type="text" /> </td>
                        </tr>

                        <tr>
                            <td><label for="email">Email Address*:</label> </td>
                            <td><input id="email" maxlength="45" name="email" type="text" /></td>
                        </tr>

                        <tr>
                            <td><label for="username">User Name*:</label> </td>
                            <td><input id="username" maxlength="45" name="username" type="text" /> </td>
                        </tr>

                        <tr>
                            <td><label for="password">Password*:</label></td>
                            <td><input id="password" maxlength="45" name="password" type="password" /></td>
                        </tr>

                        <tr>
                            <td align="right"><input name="Submit" type="submit" value="Submit" /></td>
                        </tr>

                    </tbody></table>
                </form>
            </section>
        
        

        </div>
    </div>

 <!--    <div id="main">
    <h3>Get started with your website</h3>

    <ol class="round">
        <li class="one">
            <h5>Login as admin </h5>
           The site admin username and password are stored in the config file in the Includes directory. 
        </li>
        <li class="two">
            <h5>Customize your site</h5>
             After you login, you can add, delete, and modify web pages.
         </li>
        <li class="asterisk">
            <div class="visit">
                To learn more about PHP, visit <a href="http://php.net" title="PHP.net Website">http://php.net</a>. 
            </div>
         </li>
    </ol>


    </div>

</div> --> <!-- End of outer-wrapper which opens in header.php -->

<?php 
    include ("Includes/footer.php");
 ?>