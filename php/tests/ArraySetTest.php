<?php

use PHPUnit\Framework\TestCase;
use Fau\ArraySet;
use Fau\U8;
use Fau\S8;
use Fau\U16;
use Fau\S16;
use Fau\U32;
use Fau\S32;
use Fau\F32;

final class ArraySetTest extends TestCase {
  private function assertBytes(
    string $expected,
    $actual
  ) {
    $actualHex = strtoupper(bin2hex(join(array_map(function (int $byte) {
      return chr($byte);
    }, iterator_to_array($actual)))));

    $this->assertEquals($expected, $actualHex);
  }

  public function testU8NegativeIdentifierThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(-1, 7);
  }

  public function testU8IdentifierZero() {
    $arraySet = new ArraySet();

    $arraySet->u8(0, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testU8IdentifierAtLimit() {
    $arraySet = new ArraySet();

    $arraySet->u8(4294967295, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testU8IdentifierOutOfRangeThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(4294967296, 7);
  }

  public function testU8ReturnsAnArrayOfZeroes() {
    $arraySet = new ArraySet();

    $array = $arraySet->u8(2238122160, 7);

    $this->assertEquals(new U8(7), $array);
  }

  public function testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(2238122160, 3);
  }

  public function testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    $arraySet = new ArraySet();
    $arraySet->s8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(2238122160, 3);
  }

  public function testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(2238122160, 3);
  }

  public function testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(2238122160, 3);
  }

  public function testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(2238122160, 3);
  }

  public function testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(2238122160, 3);
  }

  public function testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u8(2238122160, 3);
  }

  public function testS8NegativeIdentifierThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(-1, 7);
  }

  public function testS8IdentifierZero() {
    $arraySet = new ArraySet();

    $arraySet->s8(0, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testS8IdentifierAtLimit() {
    $arraySet = new ArraySet();

    $arraySet->s8(4294967295, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testS8IdentifierOutOfRangeThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(4294967296, 7);
  }

  public function testS8ReturnsAnArrayOfZeroes() {
    $arraySet = new ArraySet();

    $array = $arraySet->s8(2238122160, 7);

    $this->assertEquals(new S8(7), $array);
  }

  public function testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(2238122160, 3);
  }

  public function testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    $arraySet = new ArraySet();
    $arraySet->s8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(2238122160, 3);
  }

  public function testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(2238122160, 3);
  }

  public function testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(2238122160, 3);
  }

  public function testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(2238122160, 3);
  }

  public function testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(2238122160, 3);
  }

  public function testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s8(2238122160, 3);
  }

  public function testU16NegativeIdentifierThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(-1, 7);
  }

  public function testU16IdentifierZero() {
    $arraySet = new ArraySet();

    $arraySet->u16(0, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testU16IdentifierAtLimit() {
    $arraySet = new ArraySet();

    $arraySet->u16(4294967295, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testU16IdentifierOutOfRangeThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(4294967296, 7);
  }

  public function testU16ReturnsAnArrayOfZeroes() {
    $arraySet = new ArraySet();

    $array = $arraySet->u16(2238122160, 7);

    $this->assertEquals(new U16(7), $array);
  }

  public function testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(2238122160, 3);
  }

  public function testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    $arraySet = new ArraySet();
    $arraySet->s8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(2238122160, 3);
  }

  public function testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(2238122160, 3);
  }

  public function testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(2238122160, 3);
  }

  public function testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(2238122160, 3);
  }

  public function testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(2238122160, 3);
  }

  public function testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u16(2238122160, 3);
  }

  public function testS16NegativeIdentifierThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(-1, 7);
  }

  public function testS16IdentifierZero() {
    $arraySet = new ArraySet();

    $arraySet->s16(0, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testS16IdentifierAtLimit() {
    $arraySet = new ArraySet();

    $arraySet->s16(4294967295, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testS16IdentifierOutOfRangeThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(4294967296, 7);
  }

  public function testS16ReturnsAnArrayOfZeroes() {
    $arraySet = new ArraySet();

    $array = $arraySet->s16(2238122160, 7);

    $this->assertEquals(new S16(7), $array);
  }

  public function testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(2238122160, 3);
  }

  public function testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    $arraySet = new ArraySet();
    $arraySet->s8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(2238122160, 3);
  }

  public function testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(2238122160, 3);
  }

  public function testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(2238122160, 3);
  }

  public function testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(2238122160, 3);
  }

  public function testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(2238122160, 3);
  }

  public function testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s16(2238122160, 3);
  }

  public function testU32NegativeIdentifierThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(-1, 7);
  }

  public function testU32IdentifierZero() {
    $arraySet = new ArraySet();

    $arraySet->u32(0, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testU32IdentifierAtLimit() {
    $arraySet = new ArraySet();

    $arraySet->u32(4294967295, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testU32IdentifierOutOfRangeThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(4294967296, 7);
  }

  public function testU32ReturnsAnArrayOfZeroes() {
    $arraySet = new ArraySet();

    $array = $arraySet->u32(2238122160, 7);

    $this->assertEquals(new U32(7), $array);
  }

  public function testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(2238122160, 3);
  }

  public function testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    $arraySet = new ArraySet();
    $arraySet->s8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(2238122160, 3);
  }

  public function testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(2238122160, 3);
  }

  public function testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(2238122160, 3);
  }

  public function testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(2238122160, 3);
  }

  public function testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(2238122160, 3);
  }

  public function testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->u32(2238122160, 3);
  }

  public function testS32NegativeIdentifierThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(-1, 7);
  }

  public function testS32IdentifierZero() {
    $arraySet = new ArraySet();

    $arraySet->s32(0, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testS32IdentifierAtLimit() {
    $arraySet = new ArraySet();

    $arraySet->s32(4294967295, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testS32IdentifierOutOfRangeThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(4294967296, 7);
  }

  public function testS32ReturnsAnArrayOfZeroes() {
    $arraySet = new ArraySet();

    $array = $arraySet->s32(2238122160, 7);

    $this->assertEquals(new S32(7), $array);
  }

  public function testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(2238122160, 3);
  }

  public function testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    $arraySet = new ArraySet();
    $arraySet->s8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(2238122160, 3);
  }

  public function testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(2238122160, 3);
  }

  public function testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(2238122160, 3);
  }

  public function testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(2238122160, 3);
  }

  public function testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(2238122160, 3);
  }

  public function testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->s32(2238122160, 3);
  }

  public function testF32NegativeIdentifierThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(-1, 7);
  }

  public function testF32IdentifierZero() {
    $arraySet = new ArraySet();

    $arraySet->f32(0, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testF32IdentifierAtLimit() {
    $arraySet = new ArraySet();

    $arraySet->f32(4294967295, 7);

    // doesNotPerformAssertions doesn't seem to work.
    $this->assertTrue(true);
  }

  public function testF32IdentifierOutOfRangeThrowsException() {
    $arraySet = new ArraySet();

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(4294967296, 7);
  }

  public function testF32ReturnsAnArrayOfZeroes() {
    $arraySet = new ArraySet();

    $array = $arraySet->f32(2238122160, 7);

    $this->assertEquals(new F32(7), $array);
  }

  public function testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(2238122160, 3);
  }

  public function testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    $arraySet = new ArraySet();
    $arraySet->s8(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(2238122160, 3);
  }

  public function testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(2238122160, 3);
  }

  public function testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(2238122160, 3);
  }

  public function testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(2238122160, 3);
  }

  public function testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(2238122160, 3);
  }

  public function testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $this->expectException(InvalidArgumentException::class);

    $arraySet->f32(2238122160, 3);
  }

  public function testWriteOutputsEmptyWhenNoArraysExist() {
    $arraySet = new ArraySet();

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsEmptyWhenU8ContainsNoNonDefaultValues() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsU8WhenValuesFitWithinS8() {
    $arraySet = new ArraySet();
    $u8 = $arraySet->u8(2238122160, 7);
    $u8[2] = 0x7F;
    $u8[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B00867850500000000007F0022FF', $bytes);
  }

  public function testWriteOutputsU8WhenValuesFitWithinU8() {
    $arraySet = new ArraySet();
    $u8 = $arraySet->u8(2238122160, 7);
    $u8[2] = 0xCD;
    $u8[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B0086785050000000000CD0022FF', $bytes);
  }

  public function testWriteOutputsEmptyWhenS8ContainsNoNonDefaultValues() {
    $arraySet = new ArraySet();
    $arraySet->u8(2238122160, 7);

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsS8WhenValuesFitWithinS8() {
    $arraySet = new ArraySet();
    $s8 = $arraySet->s8(2238122160, 7);
    $s8[1] = -1;
    $s8[2] = 127;
    $s8[3] = 37;
    $s8[4] = -128;

    $bytes = $arraySet->write();

    $this->assertBytes('01B00867850500000000FF7F2580FF', $bytes);
  }

  public function testWriteOutputsS8WhenValuesFitWithinU8() {
    $arraySet = new ArraySet();
    $s8 = $arraySet->s8(2238122160, 7);
    $s8[2] = 127;
    $s8[3] = 37;

    $bytes = $arraySet->write();

    $this->assertBytes('01B00867850400000000007F25FF', $bytes);
  }

  public function testWriteOutputsEmptyWhenU16ContainsNoNonDefaultValues() {
    $arraySet = new ArraySet();
    $arraySet->u16(2238122160, 7);

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsU16WhenValuesFitWithinS8() {
    $arraySet = new ArraySet();
    $u16 = $arraySet->u16(2238122160, 7);
    $u16[2] = 0x7F;
    $u16[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B00867850500000000007F0022FF', $bytes);
  }

  public function testWriteOutputsU16WhenValuesFitWithinU8AtLowerBound() {
    $arraySet = new ArraySet();
    $u16 = $arraySet->u16(2238122160, 7);
    $u16[2] = 0x80;
    $u16[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B0086785050000000000800022FF', $bytes);
  }

  public function testWriteOutputsU16WhenValuesFitWithinU8AtUpperBound() {
    $arraySet = new ArraySet();
    $u16 = $arraySet->u16(2238122160, 7);
    $u16[2] = 0xFF;
    $u16[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B0086785050000000000FF0022FF', $bytes);
  }

  public function testWriteOutputsU16WhenValuesExceedU8() {
    $arraySet = new ArraySet();
    $u16 = $arraySet->u16(2238122160, 7);
    $u16[2] = 0x100;
    $u16[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('02B00867850500000000000000000100002200FF', $bytes);
  }

  public function testWriteOutputsU16WhenValuesFitWithinU16() {
    $arraySet = new ArraySet();
    $u16 = $arraySet->u16(2238122160, 7);
    $u16[2] = 0xFFFF;
    $u16[4] = 0x6DE5;

    $bytes = $arraySet->write();

    $this->assertBytes('02B00867850500000000000000FFFF0000E56DFF', $bytes);
  }

  public function testWriteOutputsU16WhenValuesFitWithinU16AndLastByteZero() {
    $arraySet = new ArraySet();
    $u16 = $arraySet->u16(2238122160, 7);
    $u16[2] = 0x7FFF;
    $u16[4] = 0x00E5;

    $bytes = $arraySet->write();

    $this->assertBytes('02B00867850500000000000000FF7F0000E500FF', $bytes);
  }

  public function testWriteOutputsEmptyWhenS16ContainsNoNonDefaultValues() {
    $arraySet = new ArraySet();
    $arraySet->s16(2238122160, 7);

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsS16WhenValuesFitWithinS8() {
    $arraySet = new ArraySet();
    $s16 = $arraySet->s16(2238122160, 7);
    $s16[1] = -1;
    $s16[2] = 127;
    $s16[3] = 37;
    $s16[4] = -128;

    $bytes = $arraySet->write();

    $this->assertBytes('01B00867850500000000FF7F2580FF', $bytes);
  }

  public function testWriteOutputsS16WhenValuesFitWithinU8() {
    $arraySet = new ArraySet();
    $s16 = $arraySet->s16(2238122160, 7);
    $s16[2] = 0xCD;
    $s16[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B0086785050000000000CD0022FF', $bytes);
  }

  public function testWriteOutputsS16WhenValuesExceedS8Negatively() {
    $arraySet = new ArraySet();
    $s16 = $arraySet->s16(2238122160, 7);
    $s16[2] = -0x81;
    $s16[4] = 0x64;

    $bytes = $arraySet->write();

    $this->assertBytes('03B008678505000000000000007FFF00006400FF', $bytes);
  }

  public function testWriteOutputsS16WhenValuesExceedS8Positively() {
    $arraySet = new ArraySet();
    $s16 = $arraySet->s16(2238122160, 7);
    $s16[2] = 0x80;
    $s16[4] = -0x64;

    $bytes = $arraySet->write();

    $this->assertBytes('03B00867850500000000000000800000009CFFFF', $bytes);
  }

  public function testWriteOutputsS16WhenValuesFitWithinS16() {
    $arraySet = new ArraySet();
    $s16 = $arraySet->s16(2238122160, 7);
    $s16[1] = -0x0001;
    $s16[2] = 0x7FFF;
    $s16[3] = -0x8000;
    $s16[4] = 0x64E5;

    $bytes = $arraySet->write();

    $this->assertBytes('03B0086785050000000000FFFFFF7F0080E564FF', $bytes);
  }

  public function testWriteOutputsS16WhenValuesFitWithinU16() {
    $arraySet = new ArraySet();
    $s16 = $arraySet->s16(2238122160, 7);
    $s16[2] = 0x7FFF;
    $s16[4] = 0x6DE5;

    $bytes = $arraySet->write();

    $this->assertBytes('03B00867850500000000000000FF7F0000E56DFF', $bytes);
  }

  public function testWriteOutputsS16WhenValuesFitWithinS16AndLastByteZero() {
    $arraySet = new ArraySet();
    $s16 = $arraySet->s16(2238122160, 7);
    $s16[1] = -0x0001;
    $s16[2] = 0x7FFF;
    $s16[3] = -0x8000;
    $s16[4] = 0x00E5;

    $bytes = $arraySet->write();

    $this->assertBytes('03B0086785050000000000FFFFFF7F0080E500FF', $bytes);
  }

  public function testWriteOutputsEmptyWhenU32ContainsNoNonDefaultValues() {
    $arraySet = new ArraySet();
    $arraySet->u32(2238122160, 7);

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinS8() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0x7F;
    $u32[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B00867850500000000007F0022FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinU8AtLowerBound() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0x80;
    $u32[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B0086785050000000000800022FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinU8AtUpperBound() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0xFF;
    $u32[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B0086785050000000000FF0022FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinU16AtLowerBound() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0x100;
    $u32[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('02B00867850500000000000000000100002200FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinU16AtUpperBound() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0xFFFF;
    $u32[4] = 0x6DE5;

    $bytes = $arraySet->write();

    $this->assertBytes('02B00867850500000000000000FFFF0000E56DFF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesExceedU16() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0x10000;
    $u32[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('04B0086785050000000000000000000000000001000000000022000000FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFillUntilEnd() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0xFFFFFFFF;
    $u32[4] = 0x6DE5392A;

    $bytes = $arraySet->write();

    $this->assertBytes('04B0086785050000000000000000000000FFFFFFFF000000002A39E56DFF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinU32WithOneTrailingZero() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0xFFFFFFFF;
    $u32[4] = 0x00E5392A;

    $bytes = $arraySet->write();

    $this->assertBytes('04B0086785050000000000000000000000FFFFFFFF000000002A39E500FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinU32WithTwoTrailingZeroes() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0xFFFFFFFF;
    $u32[4] = 0x0000392A;

    $bytes = $arraySet->write();

    $this->assertBytes('04B0086785050000000000000000000000FFFFFFFF000000002A390000FF', $bytes);
  }

  public function testWriteOutputsU32WhenValuesFitWithinU32WithThreeTrailingZeroes() {
    $arraySet = new ArraySet();
    $u32 = $arraySet->u32(2238122160, 7);
    $u32[2] = 0xFFFFFFFF;
    $u32[4] = 0x0000002A;

    $bytes = $arraySet->write();

    $this->assertBytes('04B0086785050000000000000000000000FFFFFFFF000000002A000000FF', $bytes);
  }

  public function testWriteOutputsEmptyWhenS32ContainsNoNonDefaultValues() {
    $arraySet = new ArraySet();
    $arraySet->s32(2238122160, 7);

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinS8() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[1] = -1;
    $s32[2] = 127;
    $s32[3] = 37;
    $s32[4] = -128;

    $bytes = $arraySet->write();

    $this->assertBytes('01B00867850500000000FF7F2580FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinU8() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = 0xCD;
    $s32[4] = 0x22;

    $bytes = $arraySet->write();

    $this->assertBytes('00B0086785050000000000CD0022FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesExceedS8Negatively() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = -0x81;
    $s32[4] = 0x33;

    $bytes = $arraySet->write();

    $this->assertBytes('03B008678505000000000000007FFF00003300FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesExceedS8Positively() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = 0x80;
    $s32[4] = -0x32;

    $bytes = $arraySet->write();

    $this->assertBytes('03B0086785050000000000000080000000CEFFFF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinU16() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = 0xFFFF;
    $s32[4] = 0x6DE5;

    $bytes = $arraySet->write();

    $this->assertBytes('02B00867850500000000000000FFFF0000E56DFF', $bytes);
  }

  public function testWriteReturnsS32WhenValuesExceedU16Negatively() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = 0xFFFF;
    $s32[4] = -0x0001;

    $bytes = $arraySet->write();

    $this->assertBytes('05B0086785050000000000000000000000FFFF000000000000FFFFFFFFFF', $bytes);
  }

  public function testWriteReturnsS32WhenValuesExceedU16Positively() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = 0x10000;
    $s32[4] = 0x6DE5;

    $bytes = $arraySet->write();

    $this->assertBytes('05B00867850500000000000000000000000000010000000000E56D0000FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinS16() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[1] = -0x0001;
    $s32[2] = 0x7FFF;
    $s32[3] = -0x8000;
    $s32[4] = 0x64E5;

    $bytes = $arraySet->write();

    $this->assertBytes('03B0086785050000000000FFFFFF7F0080E564FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesExceedS16Negatively() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = -0x8001;
    $s32[4] = 0x343D;

    $bytes = $arraySet->write();

    $this->assertBytes('05B0086785050000000000000000000000FF7FFFFF000000003D340000FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesExceedS16Positively() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = 0x8000;
    $s32[4] = -0xDE32;

    $bytes = $arraySet->write();

    $this->assertBytes('05B00867850500000000000000000000000080000000000000CE21FFFFFF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinU32() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[2] = 0x7FFFFFFF;
    $s32[4] = 0x6DE5392A;

    $bytes = $arraySet->write();

    $this->assertBytes('05B0086785050000000000000000000000FFFFFF7F000000002A39E56DFF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinS32() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[1] = -0x00000001;
    $s32[2] = 0x7FFFFFFF;
    $s32[3] = -0x80000000;
    $s32[4] = 0x6893E7A2;

    $bytes = $arraySet->write();

    $this->assertBytes('05B00867850500000000000000FFFFFFFFFFFFFF7F00000080A2E79368FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinS32WithOneTrailingZero() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[1] = -0x00000001;
    $s32[2] = 0x7FFFFFFF;
    $s32[3] = -0x80000000;
    $s32[4] = 0x0093E7A2;

    $bytes = $arraySet->write();

    $this->assertBytes('05B00867850500000000000000FFFFFFFFFFFFFF7F00000080A2E79300FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinS32WithTwoTrailingZeroes() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[1] = -0x00000001;
    $s32[2] = 0x7FFFFFFF;
    $s32[3] = -0x80000000;
    $s32[4] = 0x0000E7A2;

    $bytes = $arraySet->write();

    $this->assertBytes('05B00867850500000000000000FFFFFFFFFFFFFF7F00000080A2E70000FF', $bytes);
  }

  public function testWriteOutputsS32WhenValuesFitWithinS32WithThreeTrailingZeroes() {
    $arraySet = new ArraySet();
    $s32 = $arraySet->s32(2238122160, 7);
    $s32[1] = -0x00000001;
    $s32[2] = 0x7FFFFFFF;
    $s32[3] = -0x80000000;
    $s32[4] = 0x000000A2;

    $bytes = $arraySet->write();

    $this->assertBytes('05B00867850500000000000000FFFFFFFFFFFFFF7F00000080A2000000FF', $bytes);
  }

  public function testWriteOutputsEmptyWhenF32ContainsNoNonDefaultValues() {
    $arraySet = new ArraySet();
    $arraySet->f32(2238122160, 7);

    $bytes = $arraySet->write();

    $this->assertBytes('FF', $bytes);
  }

  public function testWriteOutputsF32WhenContainsNonDefaultValues() {
    $arraySet = new ArraySet();
    $f32 = $arraySet->f32(2238122160, 7);
    $f32[2] = -14.37;
    $f32[4] = 7742.483;

    $bytes = $arraySet->write();

    $this->assertBytes('06B008678505000000000000000000000085EB65C100000000DDF3F145FF', $bytes);
  }

  public function testWriteOutputsF32WhenContainsNonDefaultValuesWithOneTrailingZero() {
    $arraySet = new ArraySet();
    $f32 = $arraySet->f32(2238122160, 7);
    $f32[2] = -14.37;
    $f32[4] = 2.22198e-38;

    $bytes = $arraySet->write();

    $this->assertBytes('06B008678505000000000000000000000085EB65C100000000C3F3F100FF', $bytes);
  }

  public function testWriteOutputsF32WhenContainsNonDefaultValuesWithTwoTrailingZeroes() {
    $arraySet = new ArraySet();
    $f32 = $arraySet->f32(2238122160, 7);
    $f32[2] = -14.37;
    $f32[4] = 8.74817e-41;

    $bytes = $arraySet->write();

    $this->assertBytes('06B008678505000000000000000000000085EB65C100000000DDF30000FF', $bytes);
  }

  public function testWriteOutputsF32WhenContainsNonDefaultValuesWithThreeTrailingZeroes() {
    $arraySet = new ArraySet();
    $f32 = $arraySet->f32(2238122160, 7);
    $f32[2] = -14.37;
    $f32[4] = 3.09687e-43;

    $bytes = $arraySet->write();

    $this->assertBytes('06B008678505000000000000000000000085EB65C100000000DD000000FF', $bytes);
  }

  public function testWriteOutputsAllNonDefaultArraysInOrder() {
    $arraySet = new ArraySet();
    $u16 = $arraySet->u16(2238122160, 7);
    $u16[2] = 0xFFFF;
    $u16[4] = 0x6DE5;
    $arraySet->u32(6787806, 5);
    $s32 = $arraySet->s32(902562636, 10);
    $s32[1] = -0x00000001;
    $s32[2] = 0x7FFFFFFF;
    $s32[3] = -0x80000000;
    $s32[8] = 0x6893E7A2;

    $bytes = $arraySet->write();

    $this->assertBytes('02B00867850500000000000000FFFF0000E56D054C03CC350900000000000000FFFFFFFFFFFFFF7F0000008000000000000000000000000000000000A2E79368FF', $bytes);
  }
}
