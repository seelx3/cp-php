<?php
declare(strict_types=1);


function main() {
  $divs = ["dream", "dreamer", "erase", "eraser"];

  $sc = new Scanner();
  $s = $sc->next();
  $n = strlen($s);

  $dp = array_fill(0, $n, false);

  for($i = 0; $i < $n; $i++) {
    foreach($divs as $div) {
      $offset = $i-strlen($div)+1;
      if(($offset-1 < 0 || $dp[$offset-1]) && $offset >= 0 && substr($s, $offset, strlen($div)) === $div) {
        $dp[$i] = true;
      }
    }
  }

  Output::println($dp[$n-1] ? "YES" : "NO");
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