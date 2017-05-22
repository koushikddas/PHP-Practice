<?php
$temp = new test();
echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->get_sp() . "<br>";
echo "Test C: " . $temp->static_property . "<br>";





class test {
  static $static_property = 'I am Static';
  function get_sp()
  {
    return self::$static_property;
  }
}






 ?>
