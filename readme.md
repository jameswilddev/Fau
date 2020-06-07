# FAU (Flat Arrays, Ubiquitously)

Had this general idea for a simple binary interchange format which describes flat arrays, specific use case being able to write import/export plugins in the native scripting languages of a few different tools, and then being able to accept the resulting files in C# and JavaScript applications.

Its design would also strongly encourage the use of SOA (struct-of-array) design, which lends itself to strong SIMD.

You can find the specification for this format [here](fau-file-format.md).

## Implementations

| Language                    | Status      |
| --------------------------- | ----------- |
| [C#](csharp)                | In Progress |
| PHP                         | Not Started |
| TypeScript                  | Not Started |
| Python                      | Not Started |
| C89 (single-header library) | Not Started |
