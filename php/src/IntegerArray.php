<?php

namespace Fau;

use \TypeError;
use \RangeException;

abstract class IntegerArray extends FixedLengthArray {
  protected abstract function minimumValue(): int;
  protected abstract function maximumValue(): int;

  protected final function validateValue(
    $value
  ): void {
    if (!is_int($value)) {
      throw new TypeError();
    } else if ($value < $this->minimumValue()) {
      throw new RangeException();
    } else if ($value > $this->maximumValue()) {
      throw new RangeException();
    }
  }
}
