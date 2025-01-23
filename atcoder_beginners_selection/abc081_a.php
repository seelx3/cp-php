<?php

function main() {
  $sc = new Scanner();
  $str = $sc->next();

  $count = 0;
  for($i = 0; $i < strlen($str); $i++) {
    if($str[$i] == '1') {
      $count++;
    }
  }

  Output::println($count);
}

/**
 * Class Scanner
 */

class Scanner {
  private $arr = [];
  private $count = 0;
  private $pointer = 0;
  public function next() {
    if($this->pointer >= $this->count) {
      $str = trim(fgets(STDIN));
      $this->arr = explode(' ', $str);
      $this->count = count($this->arr);
      $this->pointer = 0;
    }
    $result = $this->arr[$this->pointer];
    $this->pointer++;
    return $result;
  }
  public function hasNext() {
    return $this->pointer < $this->count;
  }
  public function nextInt() {
    return (int)$this->next();
  }
  public function nextDouble() {
    return (double)$this->next();
  }
}

/**
 * Class Output
 */

class Output {
  public static function println($str) {
    echo $str . "\n";
  }
}

/**
 * Entry point
 */

main();