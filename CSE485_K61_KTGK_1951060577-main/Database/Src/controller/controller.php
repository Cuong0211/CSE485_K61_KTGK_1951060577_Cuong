<?php
  require_once 'model/model.php';
  class controller{
      function index(){
          $model = new model;
          $gvs = $model -> getInfo();
          require_once('view/index.php');

      }
      function details(){
         $model = new model;
         $id= $Get['id'];
         $gvs = $model -> getInfoGV($id);
         if($gv)
         header("location:index.php");
         else
         header("error.php");

      }
      
  }
?>
