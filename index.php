    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
     ?>

    <div class="row">
        <?php include('Includes/left-nav.php'); ?>
        <div class="large-8 columns signup" id="main-content">
            <section class="columns large-10 large-centered">
                <h1>by students, only for students</h1>
                <form action=""><input type="email" value="name@college.edu"></form>
                <hr />
            </section>
            <section class="columns large-12">
                <h2>How it works:</h2>
                <p class="columns large-10 large-offset-1">Your campus life digitized. WhiteBoard never forgets your homework or midterms, your parties, and even your groups in case you’re a nerd.</p>
            </section>
            <section class="columns large-12">
                <div class="columns large-6">
                    <h3 style="text-align: center">Your Schedule</h3>
                    <p class="">Set it and forget it. A schedule that works, and adapts to you.</p>
                    <div class="image-holder schedule"></div>
                </div>
                <div class="columns large-6">
                    <h3 style="text-align: center">Your School</h3>
                    <p class="">Campus life never has been so easy. Parties, clubs, events and groups.</p>
                    <div class="image-holder school"></div>
                </div>
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