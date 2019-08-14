<?php require 'header.php'; ?>
<?php include 'inc/main.con.php'?>
<?php
  $names ='';
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
      $names .= '<li><a href="compound.php?y='.$datar['compound_id'].'">'.$datar['compound_name'].'</a></li>';
      $descriptions = $datar['compound_description'];
  }
?>
  </main>
    <main class="projects-main">
        <section class="project-name">
          <h1> <?php echo $get_project['project_name']; ?></h1>
        </section>
        <section class="project-view">
          <div class="image-project-page">
            <img class="mySlides" alt="slider" src="layouts/images/slider/slide1.jpg">
            <img class="mySlides" alt="slider" src="layouts/images/slider/slide2.jpg">
            <img class="mySlides" alt="slider" src="layouts/images/slider/slide3.jpg">
            <img class="mySlides" alt="slider" src="layouts/images/slider/slide4.webp">
            <img class="mySlides" alt="slider" src="layouts/images/slider/slide5.png">
          </div>
          <div class="ul-project-page">
            <ul class="ul-inside-project">
              <?php echo $names; ?>
            </ul>
          </div>
        </section>
        <section class="project-head-phrase">
          <div class="phrase-top-project">
              <div>
                <?php echo substr($descriptions,0,814); ?>
              </div>
          </div>
        </section>
    </main>
<?php require 'footer.php'; ?>
