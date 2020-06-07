using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal sealed class U8Array : IArray
  {
    private readonly Byte[] Values;

    internal U8Array(UInt32 length) => Values = new Byte[length];

    public static implicit operator Byte[](U8Array from) => from.Values;

    IEnumerable<Byte> IArray.Write(UInt32 identifier) => Write.Array(identifier, Primitive.U8, Values.SelectMany(Write.U8), sizeof(Byte));
  }
}
