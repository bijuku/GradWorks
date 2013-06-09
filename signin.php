    <?php 
        include("Includes/header.php");         
     ?>

    <div class="row">
        
        <div class="large-8 columns signup large-centered" id="main-content">
            <section class="columns large-10 large-centered">
                <h1>Sign In</h1>
                <form action="signin.php" id="signin" method="post">
                    <table border="0">
                        <tbody>

                        <tr>
                            <td><input id="email" maxlength="45" name="email" type="text" value=".edu email" /></td>
                        </tr>

                        <tr>
                            <!-- <td><label for="password">Password*:</label></td> -->
                            <td><input id="password" maxlength="45" name="password" value="password" type="password" /></td>
                        </tr>

                        <tr>
                            <td align="right">
                                <a href="register.php"><div class="signup alt-btn">Need to sign up?</div></a>
                                <input name="Submit" type="submit" value="Submit" />
                            </td>

                        </tr>

                    </tbody></table>
                </form>
            </section>
        
        

        </div>
    </div>

<?php 
    include ("Includes/footer.php");
 ?>