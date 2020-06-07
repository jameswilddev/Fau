using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal sealed class S16Array : IArray
  {
    private readonly Int16[] Values;

    internal S16Array(UInt32 length) => Values = new Int16[length];

    public static implicit operator Int16[](S16Array from) => from.Values;

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
      else
      {
        return Write.Array(identifier, Primitive.S16, Values.SelectMany(Write.S16), sizeof(Int16));
      }
    }
  }
}
