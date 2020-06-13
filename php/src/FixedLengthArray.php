<?php

namespace Fau;

use \OutOfBoundsException;
use \ArrayAccess;
use \Countable;
use \TypeError;
use \LengthException;

abstract class FixedLengthArray implements ArrayAccess, Countable {
  /** var array */
  protected $values;

  protected abstract function validateValue($value): void;

  public function __construct(
    int $length
  ) {
    if ($length < 0) {
      throw new LengthException();
    } else {
      $this->values = array_fill(0, $length, 0);
    }
  }

  public final function offsetExists(
    $offset
  ): bool {
    if (!is_int($offset)) {
      return false;
    } else if ($offset < 0) {
      return false;
    } else if ($offset >= count($this->values)) {
      return false;
    } else {
      return true;
    }
  }

  private final function validateOffset(
    $offset
  ): void {
    if (!is_int($offset)) {
      throw new TypeError();
    } else if ($offset < 0) {
      throw new OutOfBoundsException();
    } else if ($offset >= count($this->values)) {
      throw new OutOfBoundsException();
    }
  }

  public final function offsetGet(
    $offset
  ) {
    $this->validateOffset($offset);

    return $this->values[$offset];
  }

  public final function offsetSet(
    $offset,
    $value
  ) {
    $this->validateOffset($offset);
    $this->validateValue($value);

    $this->values[$offset] = $value;
    return $value;
  }

  public final function offsetUnset(
    $offset
  ): void {
    $this->validateOffset($offset);
    throw new Exception();
  }

  public final function count(): int {
    return count($this->values);
  }
}
