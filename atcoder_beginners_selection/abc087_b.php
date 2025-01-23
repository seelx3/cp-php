<?php

function main() {
  $sc = new Scanner();
  $a = $sc->nextInt();
  $b = $sc->nextInt();
  $c = $sc->nextInt();
  $x = $sc->nextInt();

  $answer = 0;

  for($i = 0; $i < $a + 1; $i++) {
    for($j = 0; $j < $b + 1; $j++) {
      for($k = 0; $k < $c + 1; $k++) {
        $total = $i * 500 + $j * 100 + $k * 50;
        if($total == $x) {
          $answer++;
        }
      }
    }
  }

  Output::println($answer);
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