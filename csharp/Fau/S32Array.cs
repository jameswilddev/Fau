using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal sealed class S32Array : IArray
  {
    private readonly Int32[] Values;

    internal S32Array(UInt32 length) => Values = new Int32[length];

    public static implicit operator Int32[](S32Array from) => from.Values;

    IEnumerable<Byte> IArray.Write(UInt32 identifier)
    {
      var min = Values.Min();
      var max = Values.Max();

      if (min >= -128 && max <= 127)
      {
        return Write.Array(identifier, Primitive.S8, Values.Select(value => (SByte)value).SelectMany(Write.S8), sizeof(SByte));
      }
      else if (min >= 0 && max <= 255)
      {
        return Write.Array(identifier, Primitive.U8, Values.Select(value => (Byte)value).SelectMany(Write.U8), sizeof(Byte));
      }
      else if (min >= -32768 && max <= 32767)
      {
        return Write.Array(identifier, Primitive.S16, Values.Select(value => (Int16)value).SelectMany(Write.S16), sizeof(Int16));
      }
      else if (min >= 0 && max <= 65535)
      {
        return Write.Array(identifier, Primitive.U16, Values.Select(value => (UInt16)value).SelectMany(Write.U16), sizeof(UInt16));
      }
      else
      {
        return Write.Array(identifier, Primitive.S32, Values.SelectMany(Write.S32), sizeof(Int32));
      }
    }
  }
}
