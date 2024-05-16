<?php
class Base_controller 
{
  const VIEW_FOLDER_NAME = "views";
  const LOAD_FOLDER_NAME = "models";
  protected function view($view_path, array $data = []){
    // load lấy tạo tên vào view
    foreach ($data as $key => $value){
      // tạo tên giống như bên controller
      $$key = $value;
    }
    
    $view_path = self::VIEW_FOLDER_NAME . "/" . str_replace(".","/",$view_path) . ".php";
    require($view_path);
  }
  
  
  protected function load_model($model_path){
    $model_path = self::LOAD_FOLDER_NAME . "/" . $model_path . ".php";
    require($model_path);
    
  }
}