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

  protected final function performWrite(
    int $identifier,
    int $trimmedLength
  ) {
    return Write::array($identifier, 0x06, $trimmedLength, $this->values, [Write::class, 'f32']);
  }
}
