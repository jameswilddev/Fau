using System;
using System.Collections.Generic;

namespace Fau
{
  internal interface IArray
  {
    IEnumerable<Byte> Write(UInt32 identifier);
  }
}
