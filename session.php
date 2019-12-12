<?php
   include('config.php');
   session_start();

   define('DirectAccess', TRUE);
   
   if(!isset($_SESSION['loginUser'])){
      header("location:login.php");
      die();
   }

   $user = $_SESSION['loginUser'];
   
   $query = $pdo->prepare('SELECT personnel_login FROM personnel WHERE personnel_login = :user');
   $query->execute(array('user' => $user));
   
   $result = $query->fetch();

   if (!$query) {
      printf("Error: %s\n", $query->errorInfo());
      exit();
   }
      
   $session_user = $result['personnel_login'];
?>