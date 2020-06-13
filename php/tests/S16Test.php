<?php

use PHPUnit\Framework\TestCase;
use Fau\S16;

final class S16Test extends TestCase {
  public function testConstructorNegativeThrowsException() {
    $this->expectException(LengthException::class);

    new S16(-1);
  }

  public function testConstructorEmptyReturnsCorrectLength() {
    $array = new S16(0);

    $this->assertEmpty($array);
  }

  public function testConstructorReturnsCorrectLength() {
    $array = new S16(7);

    $this->assertCount(7, $array);
  }

  public function testConstructorReturnsZeroes() {
    $array = new S16(7);

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(0, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testGetNonNumericOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    $array['Test Offset'];
  }

  public function testGetFloatOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    $array[2.3];
  }

  public function testGetNegativeOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(OutOfBoundsException::class);

    $array[-1];
  }

  public function testGetOutOfRangeOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(OutOfBoundsException::class);

    $array[7];
  }

  public function testSetNonNumericOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    $array['Test Offset'] = 95;
  }

  public function testSetFloatOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    $array[2.3] = 95;
  }

  public function testSetNegativeOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(OutOfBoundsException::class);

    $array[-1] = 95;
  }

  public function testSetOutOfRangeOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(OutOfBoundsException::class);

    $array[7] = 95;
  }

  public function testSetMinimumUpdates() {
    $array = new S16(7);

    $array[3] = -32768;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(-32768, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetNegativeUpdates() {
    $array = new S16(7);

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
    $array = new S16(7);

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

  public function testSetPositiveUpdates() {
    $array = new S16(7);

    $array[3] = 95;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(95, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetPositiveReturnsValue() {
    $array = new S16(7);

    $returned = $array[3] = 95;

    $this->assertEquals(95, $returned);
  }

  public function testSetMaximumUpdates() {
    $array = new S16(7);

    $array[3] = 32767;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(32767, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetNonNumericThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    $array[3] = 'Test Value';
  }

  public function testSetFloatThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    $array[3] = 4.5;
  }

  public function testSetLessThanMinimumThrowsException() {
    $array = new S16(7);

    $this->expectException(RangeException::class);

    $array[3] = -32769;
  }

  public function testSetGreaterThanMaximumThrowsException() {
    $array = new S16(7);

    $this->expectException(RangeException::class);

    $array[3] = 32768;
  }

  public function testUnsetNonNumericOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    unset($array['Test Offset']);
  }

  public function testUnsetFloatOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(TypeError::class);

    unset($array[2.3]);
  }

  public function testUnsetNegativeOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(OutOfBoundsException::class);

    unset($array[-1]);
  }

  public function testUnsetOutOfRangeOffsetThrowsException() {
    $array = new S16(7);

    $this->expectException(OutOfBoundsException::class);

    unset($array[7]);
  }

  public function testUnsetMinimumThrowsException() {
    $array = new S16(7);

    $this->expectException(Error::class);

    unset($array[0]);
  }

  public function testUnsetBetweenMinimumAndMaximumThrowsException() {
    $array = new S16(7);

    $this->expectException(Error::class);

    unset($array[3]);
  }

  public function testUnsetMaximumThrowsException() {
    $array = new S16(7);

    $this->expectException(Error::class);

    unset($array[6]);
  }

  public function testIssetNonNumericOffsetReturnsFalse() {
    $array = new S16(7);

    $set = isset($array['Test Offset']);

    $this->assertFalse($set);
  }

  public function testIssetFloatOffsetReturnsFalse() {
    $array = new S16(7);

    $set = isset($array[2.3]);

    $this->assertFalse($set);
  }

  public function testIssetNegativeOffsetReturnsFalse() {
    $array = new S16(7);

    $set = isset($array[-1]);

    $this->assertFalse($set);
  }

  public function testIssetOutOfRangeOffsetReturnsFalse() {
    $array = new S16(7);

    $set = isset($array[7]);

    $this->assertFalse($set);
  }

  public function testIssetMinimumReturnsTrue() {
    $array = new S16(7);

    $set = isset($array[0]);

    $this->assertTrue($set);
  }

  public function testIssetMaximumReturnsTrue() {
    $array = new S16(7);

    $set = isset($array[6]);

    $this->assertTrue($set);
  }

  public function testIssetBetweenMinimumAndMaximumReturnsTrue() {
    $array = new S16(7);

    $set = isset($array[3]);

    $this->assertTrue($set);
  }
}
