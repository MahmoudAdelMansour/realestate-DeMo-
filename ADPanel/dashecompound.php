<?php session_start(); ?>
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
  $compundt ='';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminRealeStatePanel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<link rel="stylesheet" href="layouts/css/dash.css">
<link rel="stylesheet" href="layouts/css/bootstrap.css">
  <!-- Google Font -->
  <script src="tinymce_5.0.12/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="tinymce_5.0.12/tinymce/js/tinymce/plugins/code/plugin.min.js"></script>
<script src="tinymce_5.0.12/tinymce/js/tinymce/themes/silver/theme.min.js"></script>
<script type="text/javascript">
tinymce.init({
  selector: '#mytextarea'
});
</script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>MF</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>MFODA</span>
    </a>

    <!-- Header Navbar -->

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin Name</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>متصل</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ادوات مساعدة</li>
        <?php echo "<h1>".$compundt."</h1>";?>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="dashe.php"><i class="fa fa-link"></i> <span>الرئيسيه</span></a></li>
        <li class="active"><a href="dasheproject.php"><i class="fa fa-link"></i> <span>المشاريع</span></a></li>
        <li class="active"><a href="dashecompound.php"><i class="fa fa-link"></i> <span>الكمباوند</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Realestate Admin Panel
        <small>MFODA REALESTATE</small>
      </h1>
      <div class="logout-div">
      <a href="logout.php" rolle="button" class="float-right btn btn-danger" style="font-size:2rem; margin-bottom: 15px;"><i class="fas fa-sign-out-alt"></i> &nbsp;تسجيل خروج</a>
    </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <?php
      $do = '';
      if (isset($_GET['do'])) {
          $do = $_GET['do'];
      } else {
        $do = 'dashe';
      }
      if ($do == 'dashe') {
        include 'tablecompound.php';
      }
      elseif ($do == 'edit') {
        include 'compedit.php';
      }
      elseif ($do == 'add') {
        include 'compadd.php';
      }
      elseif ($do == 'update'){
          //Update
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $id_compound           = $_GET['id'];
          $name_compound        = $_POST['compoundeditname'];
          $description_compound  = $_POST['compounddescribe'];
          $stmt = $conp->prepare("UPDATE compound SET compound_name = ?, compound_description = ? WHERE compound_id = ?");
          $stmt->execute(array($name_compound,$description_compound,$id_compound));
          $check  = $stmt->rowCount();
          if ($check > '0'){
              echo "<br/><div class=\"alert alert-success\" role=\"alert\">تم تعديل الكمباوند بنجاح</div>";
              echo"<a href=\"?do=dashe\" role=\"button\" class=\"last btn btn-outline-warning\">الرجوع&nbsp;<i class=\"fas fa-backward\"></i></a>";

          } else {
            exit("<div class=\"alert alert-danger\" role=\"alert\">المعلومات محدثه بالفعل</div>");
            echo "<a href=\"?do=edit\" role=\"button\" class=\"last btn btn-outline-warning\">الرجوع&nbsp;<i class=\"fas fa-backward\"></i></a>";
          }
        }
      }
        elseif ($do == 'insert'){
          //Update
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $add_name_compound         = $_POST['namecomp'];
          $add_description_compound   = $_POST['compdescribeadd'];
          $add_project_compound   = $_POST['forwhat'];
          $stmt = $conp->prepare("INSERT INTO compound(compound_name,compound_description,projects_id) VALUES(:comOne,:comTow,:comThree)");
          $stmt->execute(array(
            'comOne'  => $add_name_compound,
            'comTow'    => $add_description_compound,
            'comThree' => $add_project_compound
          ));
          $check = $stmt->rowCount;
          $check  = $stmt->rowCount();
          if ($check > '0'){
              echo "<div class=\"alert alert-success\" role=\"alert\">تم اضافه الكمباوند بنجاح</div>";
              echo "<a href=\"?do=edit\" role=\"button\" class=\"btn btn-outline-warning\">الرجوع&nbsp;<i class=\"fas fa-backward\"></i></a>";

          } else {
            exit("<div class=\"alert alert-danger\" role=\"alert\">المعلومات تم اضافتها بالفعل</div>");
            echo "<a href=\"?do=edit\" role=\"button\" class=\"btn btn-outline-warning\">الرجوع&nbsp;<i class=\"fas fa-backward\"></i></a>";
          }
        }
        else {
          echo "<div class=\"alert alert-danger\" role=\"alert\">Go Back Mr Ducky</div>";
        }
      }
      elseif ($do == 'delete') {
        include 'deletecomp.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          $delete_id_compound    = $_POST['deletecompound'];
          $stmt = $conp->prepare("DELETE FROM compound WHERE compound_id = :compoundID");
          $stmt->bindParam(":compoundID",$delete_id_compound);
          $stmt->execute();
          $check  = $stmt->rowCount();
          if ($check > '0'){
              echo "<div class=\"alert alert-success\" role=\"alert\">تم حذف الكمباوند بنجاح</div>";
              echo"<a href=\"?do=edit\" role=\"button\" class=\"btn btn-outline-warning\">الرجوع&nbsp;<i class=\"fas fa-backward\"></i></a>";
            }
            else {
              exit("<div class=\"alert alert-danger\" role=\"alert\">تم حذفه بالفعل</div>");
              echo "<a href=\"?do=edit\" role=\"button\" class=\"btn btn-outline-warning\">الرجوع&nbsp;<i class=\"fas fa-backward\"></i></a>";
            }
      }
    }
       else {
      exit("<div class=\"alert alert-danger\" role=\"alert\">This is a danger Wrong Page</div>");
      }
        ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      تعديل المشاريع والكمباوند
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">TECH - MFODA </a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
