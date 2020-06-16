package fau;

import org.junit.jupiter.api.Assertions;

public class ArraySetTest {
  public final void testU8ReturnsAnArrayOfZeroes() {
    var arraySet = new ArraySet();

    var array = arraySet.u8(-2056845136, 7);

    Assertions.assertArrayEquals(new byte[] { 0, 0, 0, 0, 0, 0, 0 }, array);
  }

  public final void testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    var arraySet = new ArraySet();
    arraySet.u8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u8(-2056845136, 3));
  }

  public final void testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    var arraySet = new ArraySet();
    arraySet.s8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u8(-2056845136, 3));
  }

  public final void testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    var arraySet = new ArraySet();
    arraySet.u16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u8(-2056845136, 3));
  }

  public final void testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    var arraySet = new ArraySet();
    arraySet.s16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u8(-2056845136, 3));
  }

  public final void testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    var arraySet = new ArraySet();
    arraySet.u32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u8(-2056845136, 3));
  }

  public final void testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    var arraySet = new ArraySet();
    arraySet.s32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u8(-2056845136, 3));
  }

  public final void testU8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    var arraySet = new ArraySet();
    arraySet.f32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u8(-2056845136, 3));
  }

  public final void testS8ReturnsAnArrayOfZeroes() {
    var arraySet = new ArraySet();

    var array = arraySet.s8(-2056845136, 7);

    Assertions.assertArrayEquals(new byte[] { 0, 0, 0, 0, 0, 0, 0 }, array);
  }

  public final void testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    var arraySet = new ArraySet();
    arraySet.u8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s8(-2056845136, 3));
  }

  public final void testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    var arraySet = new ArraySet();
    arraySet.s8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s8(-2056845136, 3));
  }

  public final void testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    var arraySet = new ArraySet();
    arraySet.u16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s8(-2056845136, 3));
  }

  public final void testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    var arraySet = new ArraySet();
    arraySet.s16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s8(-2056845136, 3));
  }

  public final void testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    var arraySet = new ArraySet();
    arraySet.u32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s8(-2056845136, 3));
  }

  public final void testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    var arraySet = new ArraySet();
    arraySet.s32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s8(-2056845136, 3));
  }

  public final void testS8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    var arraySet = new ArraySet();
    arraySet.f32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s8(-2056845136, 3));
  }

  public final void testU16ReturnsAnArrayOfZeroes() {
    var arraySet = new ArraySet();

    var array = arraySet.u16(-2056845136, 7);

    Assertions.assertArrayEquals(new short[] { 0, 0, 0, 0, 0, 0, 0 }, array);
  }

  public final void testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    var arraySet = new ArraySet();
    arraySet.u8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u16(-2056845136, 3));
  }

  public final void testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    var arraySet = new ArraySet();
    arraySet.s8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u16(-2056845136, 3));
  }

  public final void testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    var arraySet = new ArraySet();
    arraySet.u16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u16(-2056845136, 3));
  }

  public final void testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    var arraySet = new ArraySet();
    arraySet.s16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u16(-2056845136, 3));
  }

  public final void testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    var arraySet = new ArraySet();
    arraySet.u32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u16(-2056845136, 3));
  }

  public final void testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    var arraySet = new ArraySet();
    arraySet.s32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u16(-2056845136, 3));
  }

  public final void testU16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    var arraySet = new ArraySet();
    arraySet.f32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u16(-2056845136, 3));
  }

  public final void testS16ReturnsAnArrayOfZeroes() {
    var arraySet = new ArraySet();

    var array = arraySet.s16(-2056845136, 7);

    Assertions.assertArrayEquals(new short[] { 0, 0, 0, 0, 0, 0, 0 }, array);
  }

  public final void testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    var arraySet = new ArraySet();
    arraySet.u8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s16(-2056845136, 3));
  }

  public final void testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    var arraySet = new ArraySet();
    arraySet.s8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s16(-2056845136, 3));
  }

  public final void testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    var arraySet = new ArraySet();
    arraySet.u16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s16(-2056845136, 3));
  }

  public final void testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    var arraySet = new ArraySet();
    arraySet.s16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s16(-2056845136, 3));
  }

  public final void testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    var arraySet = new ArraySet();
    arraySet.u32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s16(-2056845136, 3));
  }

  public final void testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    var arraySet = new ArraySet();
    arraySet.s32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s16(-2056845136, 3));
  }

  public final void testS16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    var arraySet = new ArraySet();
    arraySet.f32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s16(-2056845136, 3));
  }

  public final void testU32ReturnsAnArrayOfZeroes() {
    var arraySet = new ArraySet();

    var array = arraySet.u32(-2056845136, 7);

    Assertions.assertArrayEquals(new int[] { 0, 0, 0, 0, 0, 0, 0 }, array);
  }

  public final void testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    var arraySet = new ArraySet();
    arraySet.u8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u32(-2056845136, 3));
  }

  public final void testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    var arraySet = new ArraySet();
    arraySet.s8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u32(-2056845136, 3));
  }

  public final void testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    var arraySet = new ArraySet();
    arraySet.u16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u32(-2056845136, 3));
  }

  public final void testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    var arraySet = new ArraySet();
    arraySet.s16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u32(-2056845136, 3));
  }

  public final void testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    var arraySet = new ArraySet();
    arraySet.u32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u32(-2056845136, 3));
  }

  public final void testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    var arraySet = new ArraySet();
    arraySet.s32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u32(-2056845136, 3));
  }

  public final void testU32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    var arraySet = new ArraySet();
    arraySet.f32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.u32(-2056845136, 3));
  }

  public final void testS32ReturnsAnArrayOfZeroes() {
    var arraySet = new ArraySet();

    var array = arraySet.s32(-2056845136, 7);

    Assertions.assertArrayEquals(new int[] { 0, 0, 0, 0, 0, 0, 0 }, array);
  }

  public final void testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    var arraySet = new ArraySet();
    arraySet.u8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s32(-2056845136, 3));
  }

  public final void testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    var arraySet = new ArraySet();
    arraySet.s8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s32(-2056845136, 3));
  }

  public final void testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    var arraySet = new ArraySet();
    arraySet.u16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s32(-2056845136, 3));
  }

  public final void testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    var arraySet = new ArraySet();
    arraySet.s16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s32(-2056845136, 3));
  }

  public final void testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    var arraySet = new ArraySet();
    arraySet.u32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s32(-2056845136, 3));
  }

  public final void testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    var arraySet = new ArraySet();
    arraySet.s32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s32(-2056845136, 3));
  }

  public final void testS32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    var arraySet = new ArraySet();
    arraySet.f32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.s32(-2056845136, 3));
  }

  public final void testF32ReturnsAnArrayOfZeroes() {
    var arraySet = new ArraySet();

    var array = arraySet.f32(-2056845136, 7);

    Assertions.assertArrayEquals(new float[] { 0, 0, 0, 0, 0, 0, 0 }, array);
  }

  public final void testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8() {
    var arraySet = new ArraySet();
    arraySet.u8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.f32(-2056845136, 3));
  }

  public final void testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8() {
    var arraySet = new ArraySet();
    arraySet.s8(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.f32(-2056845136, 3));
  }

  public final void testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16() {
    var arraySet = new ArraySet();
    arraySet.u16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.f32(-2056845136, 3));
  }

  public final void testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16() {
    var arraySet = new ArraySet();
    arraySet.s16(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.f32(-2056845136, 3));
  }

  public final void testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32() {
    var arraySet = new ArraySet();
    arraySet.u32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.f32(-2056845136, 3));
  }

  public final void testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32() {
    var arraySet = new ArraySet();
    arraySet.s32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.f32(-2056845136, 3));
  }

  public final void testF32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32() {
    var arraySet = new ArraySet();
    arraySet.f32(-2056845136, 7);

    Assertions.assertThrows(IllegalStateException.class, () -> arraySet.f32(-2056845136, 3));
  }
}
