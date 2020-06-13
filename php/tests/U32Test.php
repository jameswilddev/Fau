<?php

use PHPUnit\Framework\TestCase;
use Fau\U32;

final class U32Test extends TestCase {
  public function testConstructorNegativeThrowsException() {
    $this->expectException(LengthException::class);

    new U32(-1);
  }

  public function testConstructorEmptyReturnsCorrectLength() {
    $array = new U32(0);

    $this->assertEmpty($array);
  }

  public function testConstructorReturnsCorrectLength() {
    $array = new U32(7);

    $this->assertCount(7, $array);
  }

  public function testConstructorReturnsZeroes() {
    $array = new U32(7);

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(0, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testGetNonNumericOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    $array['Test Offset'];
  }

  public function testGetFloatOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    $array[2.3];
  }

  public function testGetNegativeOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[-1];
  }

  public function testGetOutOfRangeOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[7];
  }

  public function testSetNonNumericOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    $array['Test Offset'] = 144;
  }

  public function testSetFloatOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    $array[2.3] = 144;
  }

  public function testSetNegativeOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[-1] = 144;
  }

  public function testSetOutOfRangeOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(OutOfBoundsException::class);

    $array[7] = 144;
  }

  public function testSetMinimumUpdates() {
    $array = new U32(7);

    $array[3] = 4294967295;
    $array[3] = 0;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(0, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetBetweenMinimumAndMaximumUpdates() {
    $array = new U32(7);

    $array[3] = 144;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(144, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetBetweenMinimumAndMaximumReturnsValue() {
    $array = new U32(7);

    $returned = $array[3] = 144;

    $this->assertEquals(144, $returned);
  }

  public function testSetMaximumUpdates() {
    $array = new U32(7);

    $array[3] = 4294967295;

    $this->assertEquals(0, $array[0]);
    $this->assertEquals(0, $array[1]);
    $this->assertEquals(0, $array[2]);
    $this->assertEquals(4294967295, $array[3]);
    $this->assertEquals(0, $array[4]);
    $this->assertEquals(0, $array[5]);
    $this->assertEquals(0, $array[6]);
  }

  public function testSetNonNumericThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    $array[3] = 'Test Value';
  }

  public function testSetFloatThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    $array[3] = 4.5;
  }

  public function testSetLessThanMinimumThrowsException() {
    $array = new U32(7);

    $this->expectException(RangeException::class);

    $array[3] = -1;
  }

  public function testSetGreaterThanMaximumThrowsException() {
    $array = new U32(7);

    $this->expectException(RangeException::class);

    $array[3] = 4294967296;
  }

  public function testUnsetNonNumericOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    unset($array['Test Offset']);
  }

  public function testUnsetFloatOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(TypeError::class);

    unset($array[2.3]);
  }

  public function testUnsetNegativeOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(OutOfBoundsException::class);

    unset($array[-1]);
  }

  public function testUnsetOutOfRangeOffsetThrowsException() {
    $array = new U32(7);

    $this->expectException(OutOfBoundsException::class);

    unset($array[7]);
  }

  public function testUnsetMinimumThrowsException() {
    $array = new U32(7);

    $this->expectException(Error::class);

    unset($array[0]);
  }

  public function testUnsetBetweenMinimumAndMaximumThrowsException() {
    $array = new U32(7);

    $this->expectException(Error::class);

    unset($array[3]);
  }

  public function testUnsetMaximumThrowsException() {
    $array = new U32(7);

    $this->expectException(Error::class);

    unset($array[6]);
  }

  public function testIssetNonNumericOffsetReturnsFalse() {
    $array = new U32(7);

    $set = isset($array['Test Offset']);

    $this->assertFalse($set);
  }

  public function testIssetFloatOffsetReturnsFalse() {
    $array = new U32(7);

    $set = isset($array[2.3]);

    $this->assertFalse($set);
  }

  public function testIssetNegativeOffsetReturnsFalse() {
    $array = new U32(7);

    $set = isset($array[-1]);

    $this->assertFalse($set);
  }

  public function testIssetOutOfRangeOffsetReturnsFalse() {
    $array = new U32(7);

    $set = isset($array[7]);

    $this->assertFalse($set);
  }

  public function testIssetMinimumReturnsTrue() {
    $array = new U32(7);

    $set = isset($array[0]);

    $this->assertTrue($set);
  }

  public function testIssetMaximumReturnsTrue() {
    $array = new U32(7);

    $set = isset($array[6]);

    $this->assertTrue($set);
  }

  public function testIssetBetweenMinimumAndMaximumReturnsTrue() {
    $array = new U32(7);

    $set = isset($array[3]);

    $this->assertTrue($set);
  }
}
