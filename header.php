<!DOCTYPE html>
<?php include 'inc/main.con.php'?>
<?php
  $stmt = $conp->prepare("SELECT * FROM compound");
  $stmtTow = $conp->prepare("SELECT * FROM projects");
  $stmt->execute();
  $stmtTow->execute();
  $compoundCounter  = $stmt->rowCount();
  $projectCounter   = $stmtTow->rowCount();
  $getProject       = $stmtTow->fetchAll();
  $getCompound      = $stmt->fetchAll();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RealeState</title>
    <link rel="shortcut icon" type="image/png" href="layouts/images/favi.ico" />
    <link rel="shortcut icon" type="image/png" href="layouts/images/favi.ico" />
    <link rel="stylesheet" href="layouts/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" />
    <link rel="stylesheet" href="layouts/css/bootstrap.css" />
</head>
<!-- Body Start -->

<body>
    <!-- All Page Grid Split -->
    <main class="all-grid">
        <!-- Main Container Of Page -->
        <section class="nav-contain">
            <i style="display:none;" class="fas fa-bars barisa" id="barisa"></i>
            <!-- Main Nav Because Had 2 Navbar -->
            <nav class="main-nav trac" id="yes">
                <!-- Logo Of Page -->
                <div class="logo-nav">
                    <img src="layouts/images/Logo.png" alt="Logo" />
                </div>
                <!-- Start Navbar Links -->
                <div class="ul-nav">
                    <ul>
                        <a href="index.php">
                            <li>الرئيسيه &nbsp;&nbsp;<span class="fas fa-home"></span></li>
                        </a>
                        <!-- Sun Menu Of  Navbar -->
                        <li class="menu">
                            <a href="projects.php"><span class="fas fa-caret-down"></span>&nbsp;المشروعات
                                &nbsp;&nbsp;<span class="fas fa-city"></span></a>
                            <ul class="sub-menu">
                                <?php
                        foreach($getProject as $data) {
                        echo  '<a href="#"><li>'.$data[1].'</li></a>';
                        }
                        ?>
                            </ul>
                        </li>
                        <a href="#">
                            <li>ادارة المشروعات &nbsp;&nbsp;<span class="fas fa-cogs"></span></li>
                        </a>
                        <a href="#">
                            <li>التصميم الداخلي &nbsp;&nbsp;<span class="fas fa-pencil-ruler"></span></li>
                        </a>
                        <a href="#">
                            <li>من نحن &nbsp;&nbsp;<span class="fas fa-question"></span></li>
                        </a>
                        <a href="#">
                            <li>اتصل بنا &nbsp;&nbsp;<span class="fas fa-phone-alt"></span></li>
                        </a>
                    </ul>
                </div>
            </nav>
        </section>
        <!-- End Of This Section (Nav-Container) -->