<?php

//データベース接続関数
function Connection($host, $user, $pass, $dbName){
  $cn = mysqli_connect($host, $user, $pass, $dbName);
  if (mysqli_connect_errno()) {
    die('データベースに接続できませんでした。');
  }
  mysqli_set_charset($cn, 'UTF-8');
  return $cn;
}

//データベースinsert関数
function Insert($sql, $host, $user, $pass, $dbName){
  $cn = Connection($host, $user, $pass, $dbName);
  mysqli_query($cn, $sql);
  mysqli_close($cn);
}

//データベースselect関数
function Select($sql, $host, $user, $pass, $dbName){
  $cn = Connection($host, $user, $pass, $dbName);
  $result = mysqli_query($cn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $array[] = $row; 
  }
  mysqli_close($cn);
  return $array;
}

//データベーステーブル作成関数
function Create($sql, $host, $user, $pass, $dbName){
  $cn = Connection($host, $user, $pass, $dbName);
  if (mysqli_query($cn, $sql)) {
    return "データベースにテーブルが作成されました。";
  }
  else {
    return "テーブル作成に失敗しました。";
  }
  mysqli_close($cn);
}

 ?>