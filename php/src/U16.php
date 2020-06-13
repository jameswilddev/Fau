<?php

namespace Fau;

final class U16 extends UnsignedIntegerArray {
  protected final function maximumValue(): int {
    return 65535;
  }
}
