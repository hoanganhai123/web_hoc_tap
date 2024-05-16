<?php
class Base_model extends Db{
  private $connect;
  public function __construct(){
    $this->connect = $this->connect();
  }
  
  public function all($sql){
    $result = $this->connect->query($sql) or
   die($this->connect->error.__LINE__);
   $data = [];
   while($row = mysqli_fetch_assoc($result)){
       array_push($data,$row);
     }
     return $data;
  }
  
  
  public function insert($sql){
    $insert_row = $this->connect->query($sql) or die($this->connect->error.__LINE__);
    if($insert_row){
      return $insert_row;
    }else{
      return false;
    }
  }
  
  
  public function update($sql){
    $update_row = $this->connect->query($sql) or die($this->connect->error.__LINE__);
    if($update_row){
      return $update_row;
    }else{
      return false;
    }
  }
  
  
  public function delete($sql){
    $delete_row = $this->connect->query($sql) or die($this->connect->error.__LINE__);
    if($delete_row){
      return $delete_row;
    }else{
      return false;
    }
  }
  
}