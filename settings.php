    <?php 
/*        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        */
        include("Includes/header.php");         
     ?>

    <div class="row">
        <?php include('Includes/settings-left-nav.php'); ?>
        <div class="large-8 columns signup" id="main-content">
            <h1 class="class-title">Settings</h1>
            <section class="columns large-12">
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>Name Value</td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td>Email value</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>Change Password</td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td>Other value</td>
                        </tr>
                        <tr>
                            <td>Other 2</td>
                            <td>other 2 value</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="columns large-12">
                
            </section>
        

        </div>
    </div>

<?php 
    include ("Includes/footer.php");
 ?>