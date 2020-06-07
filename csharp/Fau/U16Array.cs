using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal sealed class U16Array : IArray
  {
    private readonly UInt16[] Values;

    internal U16Array(UInt32 length) => Values = new UInt16[length];

    public static implicit operator UInt16[](U16Array from) => from.Values;

    IEnumerable<Byte> IArray.Write(UInt32 identifier)
    {
      var max = Values.Max();

      if (max <= 255)
      {
        return Write.Array(identifier, Primitive.U8, Values.Select(value => (Byte)value).SelectMany(Write.U8), sizeof(Byte));
      }
      else
      {
        return Write.Array(identifier, Primitive.U16, Values.SelectMany(Write.U16), sizeof(UInt16));
      }
    }
  }
}
