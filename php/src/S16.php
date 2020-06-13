<?php

namespace Fau;

final class S16 extends SignedIntegerArray {
  protected final function minimumValue(): int {
    return -32768;
  }

  protected final function maximumValue(): int {
    return 32767;
  }
}
