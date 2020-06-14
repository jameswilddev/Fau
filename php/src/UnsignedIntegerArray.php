<?php

namespace Fau;

abstract class UnsignedIntegerArray extends IntegerArray {
  protected final function minimumValue(): int {
    return 0;
  }

  protected final function performWrite(
    int $identifier,
    int $trimmedLength
  ) {
    $max = max($this->values);

    if ($max <= 255)
    {
      return Write::array($identifier, 0x00, $trimmedLength, $this->values, [Write::class, 'u8']);
    }
    else if ($max <= 65535)
    {
      return Write::array($identifier, 0x02, $trimmedLength, $this->values, [Write::class, 'u16']);
    }
    else
    {
      return Write::array($identifier, 0x04, $trimmedLength, $this->values, [Write::class, 'u32']);
    }
  }
}
