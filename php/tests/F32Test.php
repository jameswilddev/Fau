<?php

use PHPUnit\Framework\TestCase;
use Fau\F32;

final class F32Test extends TestCase {
  public function testConstructorNegativeThrowsException() {
    $this->expectException(LengthException::class);

    new F32(-1);
  }

  public function testConstructorEmptyReturnsCorrectLength() {
    $array = new F32(0);

    $this->assertEmpty($array);
  }

  public function testConstructorReturnsCorrectLength() {
    $array = new F32(7);

    $this->assertCount(7, $array);
  }

  public function testConstructorReturnsZeroes() {
    $array = new F32(7);

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(0, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testGetNonNumericOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(TypeError::class);

    $array['Test Offset'];
  }

  public function testGetFloatOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(TypeError::class);

    $array[2.3];
  }

  public function testGetNegativeOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[-1];
  }

  public function testGetOutOfRangeOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[7];
  }

  public function testSetNonNumericOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(TypeError::class);

    $array['Test Offset'] = 95;
  }

  public function testSetFloatOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(TypeError::class);

    $array[2.3] = 95;
  }

  public function testSetNegativeOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[-1] = 95;
  }

  public function testSetOutOfRangeOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[7] = 95;
  }

  public function testSetNegativeFloatUpdates() {
    $array = new F32(7);

    $array[3] = -2.459;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(-2.459, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetNegativeIntegerUpdates() {
    $array = new F32(7);

    $array[3] = -95;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(-95, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetZeroUpdates() {
    $array = new F32(7);

    $array[3] = 32767;
    $array[3] = 0;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(0, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetPositiveFloatUpdates() {
    $array = new F32(7);

    $array[3] = 2.459;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(2.459, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetPositiveIntegerUpdates() {
    $array = new F32(7);

    $array[3] = 95;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(95, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetPositiveFloatReturnsValue() {
    $array = new F32(7);

    $returned = $array[3] = 2.459;

    $this->assertEquals(2.459, $returned);
  }

  public function testSetNonNumericThrowsException() {
    $array = new F32(7);

    $this->expectException(TypeError::class);

    $array[3] = 'Test Value';
  }

  public function testUnsetNonNumericOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(TypeError::class);

    unset($array['Test Offset']);
  }

  public function testUnsetFloatOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(TypeError::class);

    unset($array[2.3]);
  }

  public function testUnsetNegativeOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(OutOfBoundsException::class);

    unset($array[-1]);
  }

  public function testUnsetOutOfRangeOffsetThrowsException() {
    $array = new F32(7);

    $this->expectException(OutOfBoundsException::class);

    unset($array[7]);
  }

  public function testUnsetMinimumThrowsException() {
    $array = new F32(7);

    $this->expectException(Error::class);

    unset($array[0]);
  }

  public function testUnsetBetweenMinimumAndMaximumThrowsException() {
    $array = new F32(7);

    $this->expectException(Error::class);

    unset($array[3]);
  }

  public function testUnsetMaximumThrowsException() {
    $array = new F32(7);

    $this->expectException(Error::class);

    unset($array[6]);
  }

  public function testIssetNonNumericOffsetReturnsFalse() {
    $array = new F32(7);

    $set = isset($array['Test Offset']);

    $this->assertFalse($set);
  }

  public function testIssetFloatOffsetReturnsFalse() {
    $array = new F32(7);

    $set = isset($array[2.3]);

    $this->assertFalse($set);
  }

  public function testIssetNegativeOffsetReturnsFalse() {
    $array = new F32(7);

    $set = isset($array[-1]);

    $this->assertFalse($set);
  }

  public function testIssetOutOfRangeOffsetReturnsFalse() {
    $array = new F32(7);

    $set = isset($array[7]);

    $this->assertFalse($set);
  }

  public function testIssetMinimumReturnsTrue() {
    $array = new F32(7);

    $set = isset($array[0]);

    $this->assertTrue($set);
  }

  public function testIssetMaximumReturnsTrue() {
    $array = new F32(7);

    $set = isset($array[6]);

    $this->assertTrue($set);
  }

  public function testIssetBetweenMinimumAndMaximumReturnsTrue() {
    $array = new F32(7);

    $set = isset($array[3]);

    $this->assertTrue($set);
  }
}
