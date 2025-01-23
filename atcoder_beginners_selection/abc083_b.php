<?php
declare(strict_types=1);

function main() {
  $sc = new Scanner();
  $n = $sc->nextInt();
  $a = $sc->nextInt();
  $b = $sc->nextInt();

  $answer = 0;

  for($i = 1; $i <= $n; $i++) {
    $str = strval($i);
    $sum = array_sum(str_split($str));
    if($a <= $sum && $sum <= $b) {
      $answer += $i;
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