<?php
class Example_model extends Base_model 
{
  // xử lý các hàm trả về render
  public function test(){
    $sql = "SELECT * FROM user";
    return $this->all($sql);
  }
  
}