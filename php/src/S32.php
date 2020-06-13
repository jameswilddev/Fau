<?php

namespace Fau;

final class S32 extends SignedIntegerArray {
  protected final function minimumValue(): int {
    return -2147483648;
  }

  protected final function maximumValue(): int {
    return 2147483647;
  }
}
