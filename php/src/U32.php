<?php

namespace Fau;

final class U32 extends UnsignedIntegerArray {
  protected final function maximumValue(): int {
    return 4294967295;
  }
}
