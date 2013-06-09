<?php include('Includes/header.php'); ?>
    <div class="row">
        <?php include('Includes/left-nav.php'); ?>
        <div class="large-7 columns signup" id="main-content">
            <h1 class="class-title">Dashboard</h1>
            <section class="columns large-12">
                <section class="columns large-6">
                    <h3>Schedule</h3>
                    <div id="schedule" class="striped">
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td>Online Homework</td>
                                    <td>12 hours</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Rough Draft</td>
                                    <td>16 hours</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Econ 201 Class</td>
                                    <td>tomorrow at midnight</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Party</td>
                                    <td>Saturday night</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </section>
                <section class="columns large-6">            
                    <div id="classrooms-list">
                        <h3>Classrooms</h3>
                        <ul class="small-block-grid-2">
                            <li>
                                <div><h4>Class 1</h4></div>
                            </li>
                            <li>
                                <div><h4>Class 2</h4></div>
                            </li>
                            <li>
                                <div><h4>Class 3</h4></div>
                            </li>
                            <li>
                                <div><h4>More</h4></div>
                            </li>
                            
                        </ul>
                        
                    </div>
                </section>

        </div>

        <?php include('Includes/sidebar.php'); ?>
    </div>
<?php include('Includes/footer.php'); ?>