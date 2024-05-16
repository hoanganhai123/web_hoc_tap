<?php
/*
có thể làm route như node



*/




// function check_route($controller,$action){
//   // dạng abc_controller.php
//   $link = $controller . "_controller.php";
//   if(file_exists($link)){
//     require_once "./controllers/$link";
//     $controller_object = new (ucfirst($controller)."_controller")();
//     if(method_exists($controller_object,$action)){
//       $controller_object->$action();
//     }else{
//       require_once("./404.php");
//     }
//   }else{
//     require_once("./404.php");
//   }
// }

$controller = !empty($_GET["controller"])?$_GET["controller"]:"home";
$action = !empty($_GET["action"])?$_GET["action"]:"home";

  // dạng abc_controller.php
$link =  "./controllers/" . $controller . "_controller.php";
if(file_exists($link)){
    require_once($link);
    // Abc_controller
    $controller_object = new (ucfirst($controller)."_controller")();
    if(method_exists($controller_object,$action)){
      $controller_object->$action();
    }else{
      require_once("./404.php");
    }
  }else{
    require_once("./404.php");
  }
