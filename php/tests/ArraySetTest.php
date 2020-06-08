<?php

use PHPUnit\Framework\TestCase;
use Fau\ArraySet;

final class ArraySetTest extends TestCase {
  public function test_placeholder() {
    (new ArraySet())->write();
    $this->assertEquals(0, 0);
  }
}
