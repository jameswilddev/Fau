<?php

namespace Fau;

final class U8 extends UnsignedIntegerArray {
  protected final function maximumValue(): int {
    return 255;
  }
}
