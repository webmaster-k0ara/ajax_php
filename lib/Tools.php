<?php


class Tools
{
  private $str;
  private static $count = 0;
  public function __construct($str)
  {
    $this->str = $str;
    self::$count++;
  }

  public function prm()
  {
    echo '<pre>';
    print_r($this->str);
    echo '</pre>';
  }

  public static function show_count()
  {
    self::$count++;
    echo self::$count;
  }
}
