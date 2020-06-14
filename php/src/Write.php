<?php

namespace Fau;

final class Write {
  private static function toBytes(
    string $format,
    $value
  ): array {
    return unpack('C*', pack($format, $value));
  }

  private static function toBytesAndSwapIfBigEndian(
    string $format,
    $value
  ): array {
    $packed = self::toBytes($format, $value);

    switch (pack('S', 0x4849)) {
      case 'HI':
        // This is machine architecture dependent.
        // @codeCoverageIgnoreStart
        return array_reverse($packed);
        // @codeCoverageIgnoreEnd
        break;

      case 'IH':
        // This is machine architecture dependent.
        // @codeCoverageIgnoreStart
        return $packed;
        // @codeCoverageIgnoreEnd
        break;

      default:
        // This is machine architecture dependent.
        // @codeCoverageIgnoreStart
        throw new RuntimeException('Unexpected endianness.');
        // @codeCoverageIgnoreEnd
    }
  }

  public static function u8(
    int $u8
  ) {
    return [$u8];
  }

  public static function s8(
    int $s8
  ) {
    return self::toBytes('c', $s8);
  }

  public static function u16(
    int $u16
  ) {
    return self::toBytes('v', $u16);
  }

  public static function s16(
    int $s16
  ) {
    return self::toBytesAndSwapIfBigEndian('s', $s16);
  }

  public static function u32(
    int $u32
  ) {
    return self::toBytes('V', $u32);
  }

  public static function s32(
    int $s32
  ) {
    return self::toBytesAndSwapIfBigEndian('l', $s32);
  }

  public static function f32(
    float $f32
  ) {
    if (pack('g', -14.37) !== hex2bin('85EB65C1')) {
      // This is machine architecture dependent.
      // @codeCoverageIgnoreStart
      throw new RuntimeException('Unexpected float format.');
      // @codeCoverageIgnoreEnd
    }

    return self::toBytes('g', $f32);
  }

  public static function array(
    int $identifier,
    int $primitive,
    int $trimmedLength,
    array $values,
    Callable $writeValue
  ) {
    foreach (self::u8($primitive) as $byte) {
      yield $byte;
    }

    foreach (self::u32($identifier) as $byte) {
      yield $byte;
    }

    foreach (self::u32($trimmedLength) as $byte) {
      yield $byte;
    }

    for ($i = 0; $i < $trimmedLength; $i++) {
      foreach ($writeValue($values[$i]) as $byte) {
        yield $byte;
      }
    }
  }
}
