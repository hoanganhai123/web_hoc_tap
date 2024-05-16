<?php
// có thể extend ví dụ 
// class abc extends ab extends bc
class Home_controller extends Base_controller
{
  public function home()
  {
    // load model
    $database = $this->load_model("home_model");
    $database = new Home_model();
    // xử lí để lấy dữ liệu và render
    $value = $database->test();
    
    
    return $this->view("home", [
      // biến đến views

    ]);
  }
  
  public function typing_text(){
    return $this->view("typing_text");
  }
  
  public function mp3_player(){
    return $this->view("mp3_player");
  }
}