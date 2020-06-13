<?php

namespace Fau;

final class S8 extends SignedIntegerArray {
  protected final function minimumValue(): int {
    return -128;
  }

  protected final function maximumValue(): int {
    return 127;
  }
}
