<?php

class Db{
  // dữ liệu database
  const HOST = "127.0.0.1";
  const USERNAME = "root";
  const PASSWORD = "root";
  const DB_NAME = "hoanglo123";
  public function connect(){
    $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME );
    mysqli_set_charset($connect,"utf8");
    if(mysqli_connect_errno() === 0){
      return $connect;
    }
    return false;
  }
}
