<?php

namespace Fau;

use \InvalidArgumentException;

final class ArraySet {
  /** var array */
  private $arrays;

  public function __construct() {
    $this->arrays = [];
  }

  private final function addArray(
    int $identifier,
    string $class,
    int $length
  ) {
    if ($identifier < 0) {
      throw new InvalidArgumentException();
    } else if ($identifier > 4294967295) {
      throw new InvalidArgumentException();
    } else if (array_key_exists($identifier, $this->arrays)) {
      throw new InvalidArgumentException();
    } else {
      return $this->arrays[$identifier] = new $class($length);
    }
  }

  public final function u8(
    int $identifier,
    int $length
  ): U8 {
    return $this->addArray($identifier, U8::class, $length);
  }

  public final function s8(
    int $identifier,
    int $length
  ): S8 {
    return $this->addArray($identifier, S8::class, $length);
  }

  public final function u16(
    int $identifier,
    int $length
  ): U16 {
    return $this->addArray($identifier, U16::class, $length);
  }

  public final function s16(
    int $identifier,
    int $length
  ): S16 {
    return $this->addArray($identifier, S16::class, $length);
  }

  public final function u32(
    int $identifier,
    int $length
  ): U32 {
    return $this->addArray($identifier, U32::class, $length);
  }

  public final function s32(
    int $identifier,
    int $length
  ): S32 {
    return $this->addArray($identifier, S32::class, $length);
  }

  public final function f32(
    int $identifier,
    int $length
  ): F32 {
    return $this->addArray($identifier, F32::class, $length);
  }

  public final function write() {
    foreach ($this->arrays as $identifier => $array) {
      foreach ($array->write($identifier) as $byte) {
        yield $byte;
      }
    }

    yield 0xFF;
  }
}
