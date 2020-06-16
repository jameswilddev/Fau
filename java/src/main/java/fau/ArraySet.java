package fau;

import java.util.HashSet;

public final class ArraySet {
  private final HashSet<Integer> arrays = new HashSet<Integer>();

  private final void add(int identifier) {
    if (arrays.contains(identifier)) {
      throw new IllegalStateException();
    }

    arrays.add(identifier);
  }

  public final byte[] u8(int identifier, int length) {
    add(identifier);
    return new byte[length];
  }

  public final byte[] s8(int identifier, int length) {
    add(identifier);
    return new byte[length];
  }

  public final short[] u16(int identifier, int length) {
    add(identifier);
    return new short[length];
  }

  public final short[] s16(int identifier, int length) {
    add(identifier);
    return new short[length];
  }

  public final int[] u32(int identifier, int length) {
    add(identifier);
    return new int[length];
  }

  public final int[] s32(int identifier, int length) {
    add(identifier);
    return new int[length];
  }

  public final float[] f32(int identifier, int length) {
    add(identifier);
    return new float[length];
  }
}
