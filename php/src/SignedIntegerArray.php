<?php

namespace Fau;

abstract class SignedIntegerArray extends IntegerArray {
  protected final function performWrite(
    int $identifier,
    int $trimmedLength
  ) {
    $min = min($this->values);
    $max = max($this->values);

    if ($min >= -128 && $max <= 127)
    {
      return Write::array($identifier, 0x01, $trimmedLength, $this->values, [Write::class, 's8']);
    }
    else if ($min >= 0 && $max <= 255)
    {
      return Write::array($identifier, 0x00, $trimmedLength, $this->values, [Write::class, 'u8']);
    }
    else if ($min >= -32768 && $max <= 32767)
    {
      return Write::array($identifier, 0x03, $trimmedLength, $this->values, [Write::class, 's16']);
    }
    else if ($min >= 0 && $max <= 65535)
    {
      return Write::array($identifier, 0x02, $trimmedLength, $this->values, [Write::class, 'u16']);
    }
    else
    {
      return Write::array($identifier, 0x05, $trimmedLength, $this->values, [Write::class, 's32']);
    }
  }
}
