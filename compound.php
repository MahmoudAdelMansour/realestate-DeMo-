<?php require 'header.php' ?>
<?php include 'inc/main.con.php'?>
<?php
  $stmt = $conp->prepare("SELECT * FROM compound");
  $stmtTow = $conp->prepare("SELECT * FROM projects");
  $stmt->execute();
  $stmtTow->execute();
  $compoundCounter  = $stmt->rowCount();
  $projectCounter   = $stmtTow->rowCount();
  $getProject   = $stmtTow->fetchAll();
  $getCompound  = $stmt->fetch(PDO::FETCH_ASSOC);
  foreach ($getProject as $key ) {
    $stmtproj = $conp->prepare("SELECT * FROM projects WHERE project_id =:bindID");
    $stmtproj->bindParam(":bindID",$key[0]);
    $stmtproj->execute();
    $get_project = $stmtproj->fetch(PDO::FETCH_ASSOC);

  }
  foreach ($getCompound as $comp ) {
    $compoundID = $comp['0'];
    $stmtcompound = $conp->prepare("SELECT * FROM compound WHERE projects_id = :bindcom");
    $stmtcompound->bindParam(":bindcom",$compoundID);
    $stmtcompound->execute();
    $geter = $stmtcompound->fetchAll();


  }
  foreach ($geter as $datar ) {
      $names = $datar['compound_name'];
      $descriptions = $datar['compound_description'];
  }
?>
  </main>
    <main class="compound-main">
      <section class="project-name">
        <h1>كمباوند : <?php echo $names; ?></h1>
      </section>
      <section class="compound-slider">
        <div class="compound-project-page">
          <img class="mySlides" alt="slider" src="layouts/images/slider/slide1.jpg">
          <img class="mySlides" alt="slider" src="layouts/images/slider/slide2.jpg">
          <img class="mySlides" alt="slider" src="layouts/images/slider/slide3.jpg">
          <img class="mySlides" alt="slider" src="layouts/images/slider/slide4.webp">
          <img class="mySlides" alt="slider" src="layouts/images/slider/slide5.png">
        </div>
      </section>
      <section class="compound-body">
        <section class="compound-about">
          <?php echo $descriptions; ?>
        </section>
        <section class="compound-book">
          <section class="map-in">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="518" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%B9%D8%A7%D8%B5%D9%85%D9%87%20%D8%A7%D9%84%D8%A7%D8%AF%D8%A7%D8%B1%D9%8A%D8%A9&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relativetext-align:rightheight:500pxwidth:518px}.gmap_canvas {overflow:hiddenbackground:none!importantheight:500pxwidth:518px}</style></div>
          </section>
          <div class="book-now">
            <a href="#book" role="button">تفاصيل الحجز</a>
          </div>
        </section>
      </section>
      <section class="compound-contact">
          <div id="book" class="container center">
           <form method="post">

               <label for="fname">الاسم الاول</label>
               <input type="text" id="fname" name="firstname" placeholder="الاسم الاول">

               <label for="lname">الاسم الثاني</label>
               <input type="text" id="lname" name="lastname" placeholder="الاسم الثاني">

               <label for="country">الدوله</label>
               <select id="country" name="country">
                 <option value="egypt">مصر</option>
                 <option value="5aleg">الخليج العربي</option>
                 <option value="out-of">خارج الوطن العربي</option>
               </select>

               <label for="subject">الكمباوند المراد الاستفسار عنه</label>
               <textarea id="subject" name="subject" placeholder="اذكر تفاصيل العرض المراد الاستعلام عنه" style="height:200px"></textarea>
               <input type="submit" value="ارسل">
           </form>
         </div>
      </section>
    </main>
<?php require 'footer.php' ?>
