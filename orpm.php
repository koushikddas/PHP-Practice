<?php
class jata
{
  function hello(){
    echo 'Hello Son';
  }
}
class mata extends jata
{
  function hello(){
    echo 'Hello Dad';

  }
  function sotti(){
    parent::hello();
  }
}







 ?>
