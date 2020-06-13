<?php

namespace Fau;

abstract class UnsignedIntegerArray extends IntegerArray {
  protected final function minimumValue(): int {
    return 0;
  }
}
