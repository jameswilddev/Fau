using System;
using System.Linq;
using Microsoft.VisualStudio.TestTools.UnitTesting;

namespace Fau.Tests
{
  [TestClass]
  public sealed class ArraySetTests
  {
    [TestMethod]
    public void U8ReturnsAnArrayOfZeroes()
    {
      var arraySet = new ArraySet();

      var array = arraySet.U8(2238122160, 7);

      CollectionAssert.AreEqual(new Byte[] { 0, 0, 0, 0, 0, 0, 0 }, array);
    }

    [TestMethod]
    public void U8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U8(2238122160, 3));
    }

    [TestMethod]
    public void U8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8()
    {
      var arraySet = new ArraySet();
      arraySet.S8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U8(2238122160, 3));
    }

    [TestMethod]
    public void U8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U8(2238122160, 3));
    }

    [TestMethod]
    public void U8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U8(2238122160, 3));
    }

    [TestMethod]
    public void U8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U8(2238122160, 3));
    }

    [TestMethod]
    public void U8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U8(2238122160, 3));
    }

    [TestMethod]
    public void U8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U8(2238122160, 3));
    }

    [TestMethod]
    public void S8ReturnsAnArrayOfZeroes()
    {
      var arraySet = new ArraySet();

      var array = arraySet.S8(2238122160, 7);

      CollectionAssert.AreEqual(new SByte[] { 0, 0, 0, 0, 0, 0, 0 }, array);
    }

    [TestMethod]
    public void S8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S8(2238122160, 3));
    }

    [TestMethod]
    public void S8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8()
    {
      var arraySet = new ArraySet();
      arraySet.S8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S8(2238122160, 3));
    }

    [TestMethod]
    public void S8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S8(2238122160, 3));
    }

    [TestMethod]
    public void S8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S8(2238122160, 3));
    }

    [TestMethod]
    public void S8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S8(2238122160, 3));
    }

    [TestMethod]
    public void S8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S8(2238122160, 3));
    }

    [TestMethod]
    public void S8ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S8(2238122160, 3));
    }

    [TestMethod]
    public void U16ReturnsAnArrayOfZeroes()
    {
      var arraySet = new ArraySet();

      var array = arraySet.U16(2238122160, 7);

      CollectionAssert.AreEqual(new UInt16[] { 0, 0, 0, 0, 0, 0, 0 }, array);
    }

    [TestMethod]
    public void U16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U16(2238122160, 3));
    }

    [TestMethod]
    public void U16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8()
    {
      var arraySet = new ArraySet();
      arraySet.S8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U16(2238122160, 3));
    }

    [TestMethod]
    public void U16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U16(2238122160, 3));
    }

    [TestMethod]
    public void U16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U16(2238122160, 3));
    }

    [TestMethod]
    public void U16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U16(2238122160, 3));
    }

    [TestMethod]
    public void U16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U16(2238122160, 3));
    }

    [TestMethod]
    public void U16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U16(2238122160, 3));
    }

    [TestMethod]
    public void S16ReturnsAnArrayOfZeroes()
    {
      var arraySet = new ArraySet();

      var array = arraySet.S16(2238122160, 7);

      CollectionAssert.AreEqual(new Int16[] { 0, 0, 0, 0, 0, 0, 0 }, array);
    }

    [TestMethod]
    public void S16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S16(2238122160, 3));
    }

    [TestMethod]
    public void S16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8()
    {
      var arraySet = new ArraySet();
      arraySet.S8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S16(2238122160, 3));
    }

    [TestMethod]
    public void S16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S16(2238122160, 3));
    }

    [TestMethod]
    public void S16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S16(2238122160, 3));
    }

    [TestMethod]
    public void S16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S16(2238122160, 3));
    }

    [TestMethod]
    public void S16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S16(2238122160, 3));
    }

    [TestMethod]
    public void S16ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S16(2238122160, 3));
    }

    [TestMethod]
    public void U32ReturnsAnArrayOfZeroes()
    {
      var arraySet = new ArraySet();

      var array = arraySet.U32(2238122160, 7);

      CollectionAssert.AreEqual(new UInt32[] { 0, 0, 0, 0, 0, 0, 0 }, array);
    }

    [TestMethod]
    public void U32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U32(2238122160, 3));
    }

    [TestMethod]
    public void U32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8()
    {
      var arraySet = new ArraySet();
      arraySet.S8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U32(2238122160, 3));
    }

    [TestMethod]
    public void U32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U32(2238122160, 3));
    }

    [TestMethod]
    public void U32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U32(2238122160, 3));
    }

    [TestMethod]
    public void U32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U32(2238122160, 3));
    }

    [TestMethod]
    public void U32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U32(2238122160, 3));
    }

    [TestMethod]
    public void U32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.U32(2238122160, 3));
    }

    [TestMethod]
    public void S32ReturnsAnArrayOfZeroes()
    {
      var arraySet = new ArraySet();

      var array = arraySet.S32(2238122160, 7);

      CollectionAssert.AreEqual(new Int32[] { 0, 0, 0, 0, 0, 0, 0 }, array);
    }

    [TestMethod]
    public void S32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S32(2238122160, 3));
    }

    [TestMethod]
    public void S32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8()
    {
      var arraySet = new ArraySet();
      arraySet.S8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S32(2238122160, 3));
    }

    [TestMethod]
    public void S32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S32(2238122160, 3));
    }

    [TestMethod]
    public void S32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S32(2238122160, 3));
    }

    [TestMethod]
    public void S32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S32(2238122160, 3));
    }

    [TestMethod]
    public void S32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S32(2238122160, 3));
    }

    [TestMethod]
    public void S32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.S32(2238122160, 3));
    }

    [TestMethod]
    public void F32ReturnsAnArrayOfZeroes()
    {
      var arraySet = new ArraySet();

      var array = arraySet.F32(2238122160, 7);

      CollectionAssert.AreEqual(new Single[] { 0, 0, 0, 0, 0, 0, 0 }, array);
    }

    [TestMethod]
    public void F32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU8()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.F32(2238122160, 3));
    }

    [TestMethod]
    public void F32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS8()
    {
      var arraySet = new ArraySet();
      arraySet.S8(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.F32(2238122160, 3));
    }

    [TestMethod]
    public void F32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU16()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.F32(2238122160, 3));
    }

    [TestMethod]
    public void F32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS16()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.F32(2238122160, 3));
    }

    [TestMethod]
    public void F32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByU32()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.F32(2238122160, 3));
    }

    [TestMethod]
    public void F32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByS32()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.F32(2238122160, 3));
    }

    [TestMethod]
    public void F32ThrowsInvalidOperationExceptionWhenIdentifierAlreadyInUseByF32()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      Assert.ThrowsException<InvalidOperationException>(() => arraySet.F32(2238122160, 3));
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenNoArraysExist()
    {
      var arraySet = new ArraySet();

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenU8ContainsNoNonDefaultValues()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsU8WhenValuesFitWithinS8()
    {
      var arraySet = new ArraySet();
      var u8 = arraySet.U8(2238122160, 7);
      u8[2] = 0x7F;
      u8[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x7F, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU8WhenValuesFitWithinU8()
    {
      var arraySet = new ArraySet();
      var u8 = arraySet.U8(2238122160, 7);
      u8[2] = 0xCD;
      u8[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xCD, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenS8ContainsNoNonDefaultValues()
    {
      var arraySet = new ArraySet();
      arraySet.U8(2238122160, 7);

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsS8WhenValuesFitWithinS8()
    {
      var arraySet = new ArraySet();
      var s8 = arraySet.S8(2238122160, 7);
      s8[1] = -1;
      s8[2] = 127;
      s8[3] = 37;
      s8[4] = -128;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x01,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0xFF, 0x7F, 0x25, 0x80,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS8WhenValuesFitWithinU8()
    {
      var arraySet = new ArraySet();
      var s8 = arraySet.S8(2238122160, 7);
      s8[2] = 127;
      s8[3] = 37;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x01,
        0x04, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x7F, 0x25,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenU16ContainsNoNonDefaultValues()
    {
      var arraySet = new ArraySet();
      arraySet.U16(2238122160, 7);

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsU16WhenValuesFitWithinS8()
    {
      var arraySet = new ArraySet();
      var u16 = arraySet.U16(2238122160, 7);
      u16[2] = 0x7F;
      u16[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x7F, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU16WhenValuesFitWithinU8AtLowerBound()
    {
      var arraySet = new ArraySet();
      var u16 = arraySet.U16(2238122160, 7);
      u16[2] = 0x80;
      u16[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x80, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU16WhenValuesFitWithinU8AtUpperBound()
    {
      var arraySet = new ArraySet();
      var u16 = arraySet.U16(2238122160, 7);
      u16[2] = 0xFF;
      u16[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xFF, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU16WhenValuesExceedU8()
    {
      var arraySet = new ArraySet();
      var u16 = arraySet.U16(2238122160, 7);
      u16[2] = 0x100;
      u16[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x02,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x01, 0x00, 0x00, 0x22, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU16WhenValuesFitWithinU16()
    {
      var arraySet = new ArraySet();
      var u16 = arraySet.U16(2238122160, 7);
      u16[2] = 0xFFFF;
      u16[4] = 0x6DE5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x02,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0x00, 0x00, 0xE5, 0x6D,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU16WhenValuesFitWithinU16AndLastByteZero()
    {
      var arraySet = new ArraySet();
      var u16 = arraySet.U16(2238122160, 7);
      u16[2] = 0x7FFF;
      u16[4] = 0x00E5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x02,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0x7F, 0x00, 0x00, 0xE5, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenS16ContainsNoNonDefaultValues()
    {
      var arraySet = new ArraySet();
      arraySet.S16(2238122160, 7);

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsS16WhenValuesFitWithinS8()
    {
      var arraySet = new ArraySet();
      var s16 = arraySet.S16(2238122160, 7);
      s16[1] = -1;
      s16[2] = 127;
      s16[3] = 37;
      s16[4] = -128;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x01,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0xFF, 0x7F, 0x25, 0x80,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS16WhenValuesFitWithinU8()
    {
      var arraySet = new ArraySet();
      var s16 = arraySet.S16(2238122160, 7);
      s16[2] = 0xCD;
      s16[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xCD, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS16WhenValuesExceedS8Negatively()
    {
      var arraySet = new ArraySet();
      var s16 = arraySet.S16(2238122160, 7);
      s16[2] = -0x81;
      s16[4] = 0x64;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x7F, 0xFF, 0x00, 0x00, 0x64, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS16WhenValuesExceedS8Positively()
    {
      var arraySet = new ArraySet();
      var s16 = arraySet.S16(2238122160, 7);
      s16[2] = 0x80;
      s16[4] = -0x64;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x80, 0x00, 0x00, 0x00, 0x9C, 0xFF,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS16WhenValuesFitWithinS16()
    {
      var arraySet = new ArraySet();
      var s16 = arraySet.S16(2238122160, 7);
      s16[1] = -0x0001;
      s16[2] = 0x7FFF;
      s16[3] = -0x8000;
      s16[4] = 0x64E5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x80, 0xE5, 0x64,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS16WhenValuesFitWithinU16()
    {
      var arraySet = new ArraySet();
      var s16 = arraySet.S16(2238122160, 7);
      s16[2] = 0x7FFF;
      s16[4] = 0x6DE5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0x7F, 0x00, 0x00, 0xE5, 0x6D,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS16WhenValuesFitWithinS16AndLastByteZero()
    {
      var arraySet = new ArraySet();
      var s16 = arraySet.S16(2238122160, 7);
      s16[1] = -0x0001;
      s16[2] = 0x7FFF;
      s16[3] = -0x8000;
      s16[4] = 0x00E5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x80, 0xE5, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenU32ContainsNoNonDefaultValues()
    {
      var arraySet = new ArraySet();
      arraySet.U32(2238122160, 7);

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinS8()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0x7F;
      u32[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x7F, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinU8AtLowerBound()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0x80;
      u32[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x80, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinU8AtUpperBound()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0xFF;
      u32[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xFF, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinU16AtLowerBound()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0x100;
      u32[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x02,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x01, 0x00, 0x00, 0x22, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinU16AtUpperBound()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0xFFFF;
      u32[4] = 0x6DE5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x02,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0x00, 0x00, 0xE5, 0x6D,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesExceedU16()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0x10000;
      u32[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x04,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x01, 0x00, 0x00, 0x00, 0x00, 0x00, 0x22, 0x00, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFillUntilEnd()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0xFFFFFFFF;
      u32[4] = 0x6DE5392A;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x04,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0x00, 0x00, 0x00, 0x00, 0x2A, 0x39, 0xE5, 0x6D,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinU32WithOneTrailingZero()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0xFFFFFFFF;
      u32[4] = 0x00E5392A;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x04,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0x00, 0x00, 0x00, 0x00, 0x2A, 0x39, 0xE5, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinU32WithTwoTrailingZeroes()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0xFFFFFFFF;
      u32[4] = 0x0000392A;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x04,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0x00, 0x00, 0x00, 0x00, 0x2A, 0x39, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsU32WhenValuesFitWithinU32WithThreeTrailingZeroes()
    {
      var arraySet = new ArraySet();
      var u32 = arraySet.U32(2238122160, 7);
      u32[2] = 0xFFFFFFFF;
      u32[4] = 0x0000002A;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x04,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0x00, 0x00, 0x00, 0x00, 0x2A, 0x00, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenS32ContainsNoNonDefaultValues()
    {
      var arraySet = new ArraySet();
      arraySet.S32(2238122160, 7);

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinS8()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[1] = -1;
      s32[2] = 127;
      s32[3] = 37;
      s32[4] = -128;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x01,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0xFF, 0x7F, 0x25, 0x80,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinU8()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[2] = 0xCD;
      s32[4] = 0x22;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x00,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xCD, 0x00, 0x22,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesExceedS8Negatively()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[2] = -0x81;
      s32[4] = 0x33;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x7F, 0xFF, 0x00, 0x00, 0x33, 0x00
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesExceedS8Positively()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[2] = 0x80;
      s32[4] = -0x32;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x80, 0x00, 0x00, 0x00, 0xCE, 0xFF,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinU16()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[2] = 0x7FFF;
      s32[4] = 0x6DE5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0x7F, 0x00, 0x00, 0xE5, 0x6D,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinS16()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[1] = -0x0001;
      s32[2] = 0x7FFF;
      s32[3] = -0x8000;
      s32[4] = 0x64E5;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x03,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x80, 0xE5, 0x64,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesExceedS16Negatively()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[2] = -0x8001;
      s32[4] = 0x343D;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x05,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xFF, 0x7F, 0xFF, 0xFF, 0x00, 0x00, 0x00, 0x00, 0x3D, 0x34, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesExceedS16Positively()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[2] = 0x8000;
      s32[4] = -0xDE32;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x05,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x80, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xCE, 0x21, 0xFF, 0xFF,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinU32()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[2] = 0x7FFFFFFF;
      s32[4] = 0x6DE5392A;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x05,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x00, 0x00, 0x00, 0x2A, 0x39, 0xE5, 0x6D,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinS32()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[1] = -0x00000001;
      s32[2] = 0x7FFFFFFF;
      s32[3] = -0x80000000;
      s32[4] = 0x6893E7A2;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x05,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x00, 0x00, 0x80, 0xA2, 0xE7, 0x93, 0x68,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinS32WithOneTrailingZero()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[1] = -0x00000001;
      s32[2] = 0x7FFFFFFF;
      s32[3] = -0x80000000;
      s32[4] = 0x0093E7A2;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x05,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x00, 0x00, 0x80, 0xA2, 0xE7, 0x93, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinS32WithTwoTrailingZeroes()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[1] = -0x00000001;
      s32[2] = 0x7FFFFFFF;
      s32[3] = -0x80000000;
      s32[4] = 0x0000E7A2;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x05,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x00, 0x00, 0x80, 0xA2, 0xE7, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsS32WhenValuesFitWithinS32WithThreeTrailingZeroes()
    {
      var arraySet = new ArraySet();
      var s32 = arraySet.S32(2238122160, 7);
      s32[1] = -0x00000001;
      s32[2] = 0x7FFFFFFF;
      s32[3] = -0x80000000;
      s32[4] = 0x000000A2;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x05,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x00, 0x00, 0x80, 0xA2, 0x00, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsEmptyWhenF32ContainsNoNonDefaultValues()
    {
      var arraySet = new ArraySet();
      arraySet.F32(2238122160, 7);

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[0], bytes);
    }

    [TestMethod]
    public void WriteReturnsF32WhenContainsNonDefaultValues()
    {
      var arraySet = new ArraySet();
      var f32 = arraySet.F32(2238122160, 7);
      f32[2] = -14.37f;
      f32[4] = 7742.483f;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x06,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x85, 0xEB, 0x65, 0xC1, 0x00, 0x00, 0x00, 0x00, 0xDD, 0xF3, 0xF1, 0x45,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsF32WhenContainsNonDefaultValuesWithOneTrailingZero()
    {
      var arraySet = new ArraySet();
      var f32 = arraySet.F32(2238122160, 7);
      f32[2] = -14.37f;
      f32[4] = 2.22198e-38f;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x06,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x85, 0xEB, 0x65, 0xC1, 0x00, 0x00, 0x00, 0x00, 0xC3, 0xF3, 0xF1, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsF32WhenContainsNonDefaultValuesWithTwoTrailingZeroes()
    {
      var arraySet = new ArraySet();
      var f32 = arraySet.F32(2238122160, 7);
      f32[2] = -14.37f;
      f32[4] = 8.74817e-41f;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x06,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x85, 0xEB, 0x65, 0xC1, 0x00, 0x00, 0x00, 0x00, 0xDD, 0xF3, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsF32WhenContainsNonDefaultValuesWithThreeTrailingZeroes()
    {
      var arraySet = new ArraySet();
      var f32 = arraySet.F32(2238122160, 7);
      f32[2] = -14.37f;
      f32[4] = 3.09687e-43f;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x06,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x85, 0xEB, 0x65, 0xC1, 0x00, 0x00, 0x00, 0x00, 0xDD, 0x00, 0x00, 0x00,
      }, bytes);
    }

    [TestMethod]
    public void WriteReturnsAllNonDefaultArraysInOrder()
    {
      var arraySet = new ArraySet();
      var u16 = arraySet.U16(2238122160, 7);
      u16[2] = 0xFFFF;
      u16[4] = 0x6DE5;
      arraySet.U32(6787806, 5);
      var s32 = arraySet.S32(902562636, 10);
      s32[1] = -0x00000001;
      s32[2] = 0x7FFFFFFF;
      s32[3] = -0x80000000;
      s32[8] = 0x6893E7A2;

      var bytes = arraySet.Write().ToArray();

      CollectionAssert.AreEqual(new Byte[]
      {
        0xB0, 0x08, 0x67, 0x85,
        0x02,
        0x05, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0x00, 0x00, 0xE5, 0x6D,
        0x4C, 0x03, 0xCC, 0x35,
        0x05,
        0x09, 0x00, 0x00, 0x00,
        0x00, 0x00, 0x00, 0x00, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0x7F, 0x00, 0x00, 0x00, 0x80, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0xA2, 0xE7, 0x93, 0x68,
      }, bytes);
    }
  }
}
