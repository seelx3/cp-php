<?php
declare(strict_types=1);

function main() {
  $sc = new Scanner();
  $n = $sc->nextInt();
  $y = $sc->nextInt();

  $ans = [-1, -1, -1];

  for($i = 0; $i <= $n; $i++) {
    for($j = 0; $j <= $n-$i; $j++) {
      $k = $n - $i - $j;

      if(10000 * $i + 5000 * $j + 1000 * $k === $y) {
        $ans = [$i, $j, $k];
      }
    }
  }

  Output::println($ans[0] . " " . $ans[1] . " " . $ans[2]);
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