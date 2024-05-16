<?php
// có thể extend ví dụ 
// class abc extends ab extends bc
class Example_controller extends Base_controller
{
  public function example()
  {
    // load model
    $database = $this->load_model("example_model");
    $database = new Example_model();
    // xử lí để lấy dữ liệu và render
    $value = $database->test();
    
    
    return $this->view("example", [
      // biến đến views
      "hi"=>"giá trị biến",
      "test"=>$value,
    ]);
  }
}