<?php
// import các dữ liệu cần thiết
session_start();
require_once("./helpers/format.php");
require_once("./config/db.php");
require_once("./config/session.php");
require_once("./models/base_model.php");
require_once("./controllers/base_controller.php");

$type = !empty($_GET["type"])?$_GET["type"]:"web";

// kiểu http:/localhost:8080/index.php?type=web&controller=abc&data={abc:xyz}
if(isset($type)){
  if($type == "web"){
    require_once("./routers/web.php");
  }else if($type == "api"){
    require_once("./routers/api.php");
  }else{
    // chống hack
    require_once("404.php");
    die();
  }
}else{
  require_once("404.php");
}


?>