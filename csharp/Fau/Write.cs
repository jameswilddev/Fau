using System;
using System.Collections.Generic;
using System.Linq;

namespace Fau
{
  internal static class Write
  {
    private static IEnumerable<Byte> InLittleEndianOrder(IEnumerable<Byte> primitive)
    {
      if (BitConverter.IsLittleEndian)
      {
        return primitive;
      }
      else
      {
        return primitive.Reverse();
      }
    }

    internal static IEnumerable<Byte> U8(Byte value)
    {
      yield return value;
    }

    internal static IEnumerable<Byte> S8(SByte value)
    {
      yield return (Byte)value;
    }

    internal static IEnumerable<Byte> U16(UInt16 value) => InLittleEndianOrder(BitConverter.GetBytes(value));
    internal static IEnumerable<Byte> S16(Int16 value) => InLittleEndianOrder(BitConverter.GetBytes(value));
    internal static IEnumerable<Byte> U32(UInt32 value) => InLittleEndianOrder(BitConverter.GetBytes(value));
    internal static IEnumerable<Byte> S32(Int32 value) => InLittleEndianOrder(BitConverter.GetBytes(value));
    internal static IEnumerable<Byte> F32(Single value) => InLittleEndianOrder(BitConverter.GetBytes(value));

    internal static IEnumerable<Byte> Array(UInt32 identifier, Primitive primitive, IEnumerable<Byte> values, int elementSize)
    {
      var untrimmedBytes = values.ToArray();

      var trimmedLength = untrimmedBytes.Length;

      while (trimmedLength > 0)
      {

        var foundNonZero = false;

        for (var i = 0; i < elementSize; i++)
        {
          if (untrimmedBytes[trimmedLength - 1 - i] != 0)
          {
            foundNonZero = true;
            break;
          }
        }

        if (foundNonZero)
        {
          break;
        }

        trimmedLength -= elementSize;
      }

      if (trimmedLength == 0)
      {
        return Enumerable.Empty<Byte>();
      }

      return U32(identifier)
        .Concat(U8((Byte)primitive))
        .Concat(U32((UInt32)(trimmedLength / elementSize)))
        .Concat(untrimmedBytes.Take(trimmedLength));
    }
  }
}
