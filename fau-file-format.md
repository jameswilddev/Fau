# FAU (Flat Arrays, Ubiquitously) File Format

## Primitive Types

| ID | Name | Description                           |
| -- | ---- | ------------------------------------- |
| 00 | u8   | 8-bit unsigned integer                |
| 01 | s8   | 8-bit signed integer                  |
| 02 | u16  | 16-bit little-endian unsigned integer |
| 03 | s16  | 16-bit little-endian signed integer   |
| 04 | u32  | 32-bit little-endian unsigned integer |
| 05 | s32  | 32-bit little-endian signed integer   |
| 06 | f32  | 32-bit little-endian IEEE float       |

## Format

The following is repeated until the end of the file:

| Primitive Type   | Quantity | Description                                                           |
| ---------------- | -------- | --------------------------------------------------------------------- |
| u32              | 1        | Identifier; usually in lower case ASCII, e.g. `test` is `74 65 73 74` |
| u8               | 1        | Primitive type                                                        |
| u32              | 1        | Length                                                                |
| (Primitive Type) | (Length) | Values                                                                |

## Version tolerance

Arrays in the file with unexpected identifiers are to be skipped.

Arrays which are expected but not present in the file are to be filled with zeroes.

Should an array in the file be of a shorter length than expected, the excess values are to be filled with zeroes.

### Conversions

The following conversions are to be performed automatically should the types in the file not match those expected:

| File Type | Expected Type | Conversion            | Fails below | Fails above |
| --------- | ------------- | --------------------- | ----------- | ----------- |
| u8        | u8            | -                     | -           | -           |
| u8        | s8            | Integer cast          | -           | 127         |
| u8        | u16           | Integer cast          | -           | -           |
| u8        | s16           | Integer cast          | -           | -           |
| u8        | u32           | Integer cast          | -           | -           |
| u8        | s32           | Integer cast          | -           | -           |
| u8        | f32           | Integer to float cast | -           | -           |
|           |               |                       |             |             |
| s8        | u8            | Integer cast          | 0           | -           |
| s8        | s8            | -                     | -           | -           |
| s8        | u16           | Integer cast          | 0           | -           |
| s8        | s16           | Integer cast          | -           | -           |
| s8        | u32           | Integer cast          | 0           | -           |
| s8        | s32           | Integer cast          | -           | -           |
| s8        | f32           | Integer to float cast | -           | -           |
|           |               |                       |             |             |
| u16       | u8            | Integer cast          | -           | 255         |
| u16       | s8            | Integer cast          | -           | 127         |
| u16       | u16           | -                     | -           | -           |
| u16       | s16           | Integer cast          | -           | 32767       |
| u16       | u32           | Integer cast          | -           | -           |
| u16       | s32           | Integer cast          | -           | -           |
| u16       | f32           | Integer to float cast | -           | -           |
|           |               |                       |             |             |
| s16       | u8            | Integer cast          | 0           | 255         |
| s16       | s8            | Integer cast          | -128        | 127         |
| s16       | u16           | Integer cast          | 0           | -           |
| s16       | s16           | -                     | -           | -           |
| s16       | u32           | Integer cast          | 0           | -           |
| s16       | s32           | Integer cast          | -           | -           |
| s16       | f32           | Integer to float cast | -           | -           |
|           |               |                       |             |             |
| u32       | u8            | Integer cast          | -           | 255         |
| u32       | s8            | Integer cast          | -           | 127         |
| u32       | u16           | Integer cast          | -           | 65535       |
| u32       | s16           | Integer cast          | -           | 32767       |
| u32       | u32           | -                     | -           | -           |
| u32       | s32           | Integer cast          | -           | 2147483647  |
| u32       | f32           | Integer to float cast | -           | -           |
|           |               |                       |             |             |
| s32       | u8            | Integer cast          | 0           | 255         |
| s32       | s8            | Integer cast          | -128        | 127         |
| s32       | u16           | Integer cast          | 0           | 65535       |
| s32       | s16           | Integer cast          | -32768      | 32767       |
| s32       | u32           | Integer cast          | 0           | -           |
| s32       | s32           | -                     | -           | -           |
| s32       | f32           | Integer to float cast | -           | -           |
|           |               |                       |             |             |
| f32       | u8            | Round to nearest      | 0           | 255         |
| f32       | s8            | Round to nearest      | -128        | 127         |
| f32       | u16           | Round to nearest      | 0           | 65535       |
| f32       | s16           | Round to nearest      | -32768      | 32767       |
| f32       | u32           | Round to nearest      | 0           | 4294967295  |
| f32       | s32           | Round to nearest      | -2147483648 | 2147483647  |
| f32       | f32           | -                     | -           | -           |

## Errors

A file is to be rejected should:

- It end while an array is being described.
- Two arrays share an identifier.
- An array use an unrecognized primitive type.
- A value fail to convert.
- An array specify a greater length in the file than expected.
