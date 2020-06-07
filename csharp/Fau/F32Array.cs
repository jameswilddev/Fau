using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal sealed class F32Array : IArray
  {
    private readonly Single[] Values;

    internal F32Array(UInt32 length) => Values = new Single[length];

    public static implicit operator Single[](F32Array from) => from.Values;

    IEnumerable<Byte> IArray.Write(UInt32 identifier) => Write.Array(identifier, Primitive.F32, Values.SelectMany(Write.F32), sizeof(Single));
  }
}
