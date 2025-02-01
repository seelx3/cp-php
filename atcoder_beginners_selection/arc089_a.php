<?php
declare(strict_types=1);

function main() {
  $sc = new Scanner();
  $n = $sc->nextInt();
  $arr = [[0, 0, 0]];
  for($i = 0; $i < $n; $i++) {
    $arr[] = [$sc->nextInt(), $sc->nextInt(), $sc->nextInt()];
  }

  $ok = true;

  for($i = 0; $i < $n; $i++) {
    $time = $arr[$i+1][0] - $arr[$i][0];
    $dist = abs($arr[$i+1][1] - $arr[$i][1]) + abs($arr[$i+1][2] - $arr[$i][2]);

    if(!($time - $dist >= 0 && ($time - $dist)%2 === 0)) $ok = false;
  }

  Output::println($ok ? "Yes" : "No");
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