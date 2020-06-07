using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal sealed class S8Array : IArray
  {
    private readonly SByte[] Values;

    internal S8Array(UInt32 length) => Values = new SByte[length];

    public static implicit operator SByte[](S8Array from) => from.Values;

    IEnumerable<Byte> IArray.Write(UInt32 identifier) => Write.Array(identifier, Primitive.S8, Values.SelectMany(Write.S8), sizeof(SByte));
  }
}
