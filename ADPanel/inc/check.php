<?php
    @session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      include 'main.con.php';
      $adminname = $_POST['login'];
      $adminpass = $_POST['loginpass'];
      //Check If User Exist Database
      $stmt = $conp->prepare("SELECT username,password FROM admins WHERE username = ? AND password = ?");
      $stmt->execute(array($adminname,$adminpass));
      $rowCount = $stmt->rowCount();
      if ($rowCount > 0) {
        $_SESSION["loginuser"] = $adminname; //register The Session
        header("LOCATION:../dashe.php");
      }
      else {
        header("LOCATION:../index.php?error=errAdmin");
        }
    }
    else {
      header("LOCATION:../index.php");
    }
