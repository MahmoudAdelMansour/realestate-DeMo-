<?php require 'header.php'; ?>
<?php include 'inc/main.con.php'?>
<?php
  $stmt = $conp->prepare("SELECT * FROM compound");
  $stmtTow = $conp->prepare("SELECT * FROM projects");
  $stmt->execute();
  $stmtTow->execute();
  $compoundCounter  = $stmt->rowCount();
  $projectCounter   = $stmtTow->rowCount();
  $getProject   = $stmtTow->fetchAll();
  $getCompound  = $stmt->fetchAll();
?>
<!-- Picture To View Under The Navbar -->
<section class="about">
    <div class="about-phrase">
        <div class="head-about">
            <h3>منذر فوده المحدودة</h3>
        </div>
        <div class="body-about">
            <p>شركة منذر فوده المحدودة للعقارات</p>
            <p>اكثر من مجرد تسويق عقاري</p>
        </div>
        <a href="#a" role="button" title="Know more">اكثر</a>
    </div>
    <section class="img-back"></section>
    <!-- Slider Show Of Page -->
</section>
<main class="index-main">
    <section id="a" class="slider-area">
        <img class="mySlides" alt="slider" src="layouts/images/slider/slide1.jpg">
        <img class="mySlides" alt="slider" src="layouts/images/slider/slide2.jpg">
        <img class="mySlides" alt="slider" src="layouts/images/slider/slide3.jpg">
        <img class="mySlides" alt="slider" src="layouts/images/slider/slide4.webp">
        <img class="mySlides" alt="slider" src="layouts/images/slider/slide5.png">
    </section>
</main>
<section class="projects-data">
    <div class="project-images">
        <?php
          foreach ($getProject as $projects) {
              echo "<div class=\"imageInProject\">";
              echo "<img src=\"layouts/images/project/pukka.png\" alt=\"\">";
              echo "<div class=\"project-head\">";
              echo  "<h3>".$projects[1]."</h3>";
              echo  "</div>";
              echo  "<div class=\"project-body\">";
              echo  "<p>";
              echo substr($projects[2], 0, 744);
              echo  "</p>";
              echo  "</div>";
              echo  "<a class=\"knowmore\" href=\"projects.php?id=".$projects[0]."\" role=\"button\" title=\"Know more\">اعرف المزيد</a>";
              echo  "</div>";
          }
          ?>
        <!-- <h1 class="head-section-projects">
            المشاريع
          </h1> -->

    </div>
</section>
<section id="video-main">
    <div class="video">
        <video src="layouts/images/keftk.mp4" autoplay loop></video>
    </div>
</section>
<section class="our-contact-card  text-center">
    <div class="container">
        <form action="?Sucess=nice">
            <div class="row">
                <div class="drag-25">
                    <label for="fname">الاسم الاول</label>
                </div>
                <div class="drag-75">
                    <input type="text" id="fname" name="firstname" placeholder="الاسم الاول">
                </div>
            </div>
            <div class="row">
                <div class="drag-25">
                    <label for="lname">الاسم الاخير</label>
                </div>
                <div class="drag-75">
                    <input type="text" id="lname" name="lastname" placeholder="اسم العائلة">
                </div>
            </div>
            <div class="row">
                <div class="drag-25">
                    <label for="country">البلد</label>
                </div>
                <div class="drag-75">
                    <select id="country" name="country">
                        <option value="australia">مصر</option>
                        <option value="canada">الخليج العربي</option>
                        <option value="usa">خارج الوطن العربي</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="drag-25">
                    <label for="subject">العنوان</label>
                </div>
                <div class="drag-75">
                    <textarea id="subject" name="subject" placeholder="نص الرساله" style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="ارسل">
            </div>
        </form>
    </div>
</section>
<section id="social" class="social">
    <!-- The social media icon bar -->
    <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
</section>
</main>
<?php require 'footer.php'; ?>