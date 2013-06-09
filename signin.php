    <?php 
        include("Includes/header.php");         
     ?>

    <div class="row">
        
        <div class="large-8 columns signup large-centered" id="main-content">
            <section class="columns large-10 large-centered">
                <h1>Sign In</h1>
                <form action="signin.php" id="signin" method="post">
                   <section class="columns large-12">
                        <input id="email" maxlength="45" name="email" type="text" value=".edu email" />
                        <input id="password" maxlength="45" name="password" value="password" type="password" />
                        <div class="divider"></div>
                        <section class="columns large-12">
                            <div class="columns large-6">
                                <a href="register.php"><div class="signup alt-btn">Need to sign up?</div></a>
                            </div>
                            <div class="columns large-6">
                                <input name="Submit" type="submit" value="Submit" />
                            </div>
                        </section>
                    </section>
                </form>
            </section>
        
        

        </div>
    </div>

<?php 
    include ("Includes/footer.php");
 ?>