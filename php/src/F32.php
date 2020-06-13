<?php

namespace Fau;

use \TypeError;

final class F32 extends FixedLengthArray {
  protected final function validateValue(
    $value
  ): void {
    if (!is_float($value) && !is_integer($value)) {
      throw new TypeError();
    }
  }
}
