<?php 
class QuadraticEquation {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function getC() {
        return $this->c;
    }

    public function getDiscriminant() {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1() {
        $delta = $this->getDiscriminant();
        if ($delta >= 0) {
            return (-$this->b + sqrt($delta)) / (2 * $this->a);
        } else {
            return 0; // Trả về 0 khi delta < 0
        }
    }

    public function getRoot2() {
        $delta = $this->getDiscriminant();
        if ($delta >= 0) {
            return (-$this->b - sqrt($delta)) / (2 * $this->a);
        } else {
            return 0; // Trả về 0 khi delta < 0
        }
    }
}

$result = "";
?>