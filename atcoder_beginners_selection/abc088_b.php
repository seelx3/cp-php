<?php
declare(strict_types=1);

function main() {
  $sc = new Scanner();
  $n = $sc->nextInt();
  $a = [];
  for($i = 0; $i < $n; $i++) {
    $a[] = $sc->nextInt();
  }

  rsort($a);

  $arith = 0;
  $bob = 0;

  for($i = 0; $i < $n; $i++) {
    if($i % 2 === 0 ) {
      $arith += $a[$i];
    } else {
      $bob += $a[$i];
    }
  }

  $answer =  $arith - $bob;
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