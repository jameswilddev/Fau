using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal sealed class U32Array : IArray
  {
    private readonly UInt32[] Values;

    internal U32Array(UInt32 length) => Values = new UInt32[length];

    public static implicit operator UInt32[](U32Array from) => from.Values;

    IEnumerable<Byte> IArray.Write(UInt32 identifier)
    {
      var max = Values.Max();

      if (max <= 255)
      {
        return Write.Array(identifier, Primitive.U8, Values.Select(value => (Byte)value).SelectMany(Write.U8), sizeof(Byte));
      }
      else if (max <= 65535)
      {
        return Write.Array(identifier, Primitive.U16, Values.Select(value => (UInt16)value).SelectMany(Write.U16), sizeof(UInt16));
      }
      else
      {
        return Write.Array(identifier, Primitive.U32, Values.SelectMany(Write.U32), sizeof(UInt32));
      }
    }
  }
}
