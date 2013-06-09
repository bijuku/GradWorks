    <?php 
        include("Includes/header.php");         
     ?>

    <div class="row">
        <?php include('Includes/left-nav.php'); ?>
        <div class="large-8 columns signup" id="main-content">
            <section class="columns large-10 large-centered">
                <h1>Sign Up</h1>
                <form action="register.php" id="register" method="post">
                    <table border="0">
                        <tbody>

                        <tr>
                            <td><label for="name">Name</label> </td>
                            <td><input id="name" maxlength="45" name="name" type="text" /> </td>
                        </tr>

                        <!-- <tr>
                            <td><label for="email">Prefered Contact Email</label> </td>
                            <td><input id="email" maxlength="45" name="email" type="text" /></td>
                        </tr> -->

                        <tr>
                            <td><label for="password">Password*:</label></td>
                            <td><input id="password" maxlength="45" name="password" type="password" /></td>
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

<?php 
    include ("Includes/footer.php");
 ?>