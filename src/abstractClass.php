<?php

namespace Vendor\Hw3;

abstract class abstractClass {

    abstract protected function getValue();

    /* print text */
    public function printOut() {
        print $this->getValue() . "\n";
    }

}
