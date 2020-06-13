using System;
using System.Linq;
using System.Collections.Generic;
using System.Collections.Specialized;

namespace Fau
{
  /// <summary>A schema of flat arrays and an instance of corresponding data; this can be written to and read from <see cref="Byte" /> streams.</summary>
  public sealed class ArraySet
  {
    private readonly List<UInt32> IdentifierOrder = new List<UInt32>();

    private readonly Dictionary<UInt32, IArray> Arrays = new Dictionary<UInt32, IArray>();

    private T Add<T>(UInt32 identifier, T array) where T : IArray
    {
      if (IdentifierOrder.Contains(identifier))
      {
        throw new InvalidOperationException();
      }

      Arrays[identifier] = array;
      IdentifierOrder.Add(identifier);

      return array;
    }

    /// <summary>Create a new array of unsigned 8-bit integers.</summary>
    /// <param name="identifier">The unique identifier of the array to create.</param>
    /// <param name="length">The length of the array to create.</param>
    /// <returns>The created array of unsigned 8-bit integers.</returns>
    /// <exception cref="InvalidOperationException">Thrown when <paramref name="identifier" /> is already in use.</exception>
    public Byte[] U8(UInt32 identifier, UInt32 length) => Add(identifier, new U8Array(length));

    /// <summary>Create a new array of signed 8-bit integers.</summary>
    /// <param name="identifier">The unique identifier of the array to create.</param>
    /// <param name="length">The length of the array to create.</param>
    /// <returns>The created array of signed 8-bit integers.</returns>
    /// <exception cref="InvalidOperationException">Thrown when <paramref name="identifier" /> is already in use.</exception>
    public SByte[] S8(UInt32 identifier, UInt32 length) => Add(identifier, new S8Array(length));

    /// <summary>Create a new array of unsigned 16-bit integers.</summary>
    /// <param name="identifier">The unique identifier of the array to create.</param>
    /// <param name="length">The length of the array to create.</param>
    /// <returns>The created array of unsigned 16-bit integers.</returns>
    /// <exception cref="InvalidOperationException">Thrown when <paramref name="identifier" /> is already in use.</exception>
    public Int16[] S16(UInt32 identifier, UInt32 length) => Add(identifier, new S16Array(length));

    /// <summary>Create a new array of signed 16-bit integers.</summary>
    /// <param name="identifier">The unique identifier of the array to create.</param>
    /// <param name="length">The length of the array to create.</param>
    /// <returns>The created array of signed 16-bit integers.</returns>
    /// <exception cref="InvalidOperationException">Thrown when <paramref name="identifier" /> is already in use.</exception>
    public UInt16[] U16(UInt32 identifier, UInt32 length) => Add(identifier, new U16Array(length));

    /// <summary>Create a new array of unsigned 32-bit integers.</summary>
    /// <param name="identifier">The unique identifier of the array to create.</param>
    /// <param name="length">The length of the array to create.</param>
    /// <returns>The created array of unsigned 32-bit integers.</returns>
    /// <exception cref="InvalidOperationException">Thrown when <paramref name="identifier" /> is already in use.</exception>
    public UInt32[] U32(UInt32 identifier, UInt32 length) => Add(identifier, new U32Array(length));

    /// <summary>Create a new array of signed 32-bit integers.</summary>
    /// <param name="identifier">The unique identifier of the array to create.</param>
    /// <param name="length">The length of the array to create.</param>
    /// <returns>The created array of signed 32-bit integers.</returns>
    /// <exception cref="InvalidOperationException">Thrown when <paramref name="identifier" /> is already in use.</exception>
    public Int32[] S32(UInt32 identifier, UInt32 length) => Add(identifier, new S32Array(length));

    /// <summary>Create a new array of 32-bit IEEE floats.</summary>
    /// <param name="identifier">The unique identifier of the array to create.</param>
    /// <param name="length">The length of the array to create.</param>
    /// <returns>The created array of 32-bit IEEE floats.</returns>
    /// <exception cref="InvalidOperationException">Thrown when <paramref name="identifier" /> is already in use.</exception>
    public Single[] F32(UInt32 identifier, UInt32 length) => Add(identifier, new F32Array(length));

    /// <summary>Generates a sequence of <see cref="Byte" />s describing a Fau file containing <see langword="this" /> <see cref="ArraySet" />'s contained arrays.</summary>
    /// <returns>A sequence of <see cref="Byte" />s describing a Fau file containing <see langword="this" /> <see cref="ArraySet" />'s contained arrays.</returns>
    public IEnumerable<Byte> Write()
    {
      return IdentifierOrder.SelectMany(identifier => Arrays[identifier].Write(identifier)).Concat(new Byte[] { 0xFF });
    }
  }
}
