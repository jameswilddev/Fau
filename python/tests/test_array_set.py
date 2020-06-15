import unittest
from fau import ArraySet, U8, S8, U16, S16, U32, S32, F32


class TestArraySet(unittest.TestCase):
    def test_u8_negative_identifier_throws_exception(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.u8(-1, 7)

    def test_u8_identifier_zero(self):
        arraySet = ArraySet()

        arraySet.u8(0, 7)

    def test_u8_identifier_at_limit(self):
        arraySet = ArraySet()

        arraySet.u8(4294967295, 7)

    def test_u8_identifier_out_of_range(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.u8(4294967296, 7)

    def test_u8_returns_array_of_zeroes(self):
        arraySet = ArraySet()

        u8 = arraySet.u8(2238122160, 7)

        self.assertIsInstance(u8, U8)
        self.assertEqual(7, len(u8))
        self.assertEqual(0, u8[0])
        self.assertEqual(0, u8[1])
        self.assertEqual(0, u8[2])
        self.assertEqual(0, u8[3])
        self.assertEqual(0, u8[4])
        self.assertEqual(0, u8[5])
        self.assertEqual(0, u8[6])

    def test_u8_throws_exception_when_identifier_already_in_use_by_u8(self):
        arraySet = ArraySet()
        arraySet.u8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u8(2238122160, 3)

    def test_u8_throws_exception_when_identifier_already_in_use_by_s8(self):
        arraySet = ArraySet()
        arraySet.s8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u8(2238122160, 3)

    def test_u8_throws_exception_when_identifier_already_in_use_by_u16(self):
        arraySet = ArraySet()
        arraySet.u16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u8(2238122160, 3)

    def test_u8_throws_exception_when_identifier_already_in_use_by_s16(self):
        arraySet = ArraySet()
        arraySet.s16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u8(2238122160, 3)

    def test_u8_throws_exception_when_identifier_already_in_use_by_u32(self):
        arraySet = ArraySet()
        arraySet.u32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u8(2238122160, 3)

    def test_u8_throws_exception_when_identifier_already_in_use_by_s32(self):
        arraySet = ArraySet()
        arraySet.s32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u8(2238122160, 3)

    def test_u8_throws_exception_when_identifier_already_in_use_by_f32(self):
        arraySet = ArraySet()
        arraySet.f32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u8(2238122160, 3)

    def test_s8_negative_identifier_throws_exception(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.s8(-1, 7)

    def test_s8_identifier_zero(self):
        arraySet = ArraySet()

        arraySet.s8(0, 7)

    def test_s8_identifier_at_limit(self):
        arraySet = ArraySet()

        arraySet.s8(4294967295, 7)

    def test_s8_identifier_out_of_range(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.s8(4294967296, 7)

    def test_s8_returns_array_of_zeroes(self):
        arraySet = ArraySet()

        s8 = arraySet.s8(2238122160, 7)

        self.assertIsInstance(s8, S8)
        self.assertEqual(7, len(s8))
        self.assertEqual(0, s8[0])
        self.assertEqual(0, s8[1])
        self.assertEqual(0, s8[2])
        self.assertEqual(0, s8[3])
        self.assertEqual(0, s8[4])
        self.assertEqual(0, s8[5])
        self.assertEqual(0, s8[6])

    def test_s8_throws_exception_when_identifier_already_in_use_by_u8(self):
        arraySet = ArraySet()
        arraySet.u8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s8(2238122160, 3)

    def test_s8_throws_exception_when_identifier_already_in_use_by_s8(self):
        arraySet = ArraySet()
        arraySet.s8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s8(2238122160, 3)

    def test_s8_throws_exception_when_identifier_already_in_use_by_u16(self):
        arraySet = ArraySet()
        arraySet.u16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s8(2238122160, 3)

    def test_s8_throws_exception_when_identifier_already_in_use_by_s16(self):
        arraySet = ArraySet()
        arraySet.s16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s8(2238122160, 3)

    def test_s8_throws_exception_when_identifier_already_in_use_by_u32(self):
        arraySet = ArraySet()
        arraySet.u32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s8(2238122160, 3)

    def test_s8_throws_exception_when_identifier_already_in_use_by_s32(self):
        arraySet = ArraySet()
        arraySet.s32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s8(2238122160, 3)

    def test_s8_throws_exception_when_identifier_already_in_use_by_f32(self):
        arraySet = ArraySet()
        arraySet.f32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s8(2238122160, 3)

    def test_u16_negative_identifier_throws_exception(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.u16(-1, 7)

    def test_u16_identifier_zero(self):
        arraySet = ArraySet()

        arraySet.u16(0, 7)

    def test_u16_identifier_at_limit(self):
        arraySet = ArraySet()

        arraySet.u16(4294967295, 7)

    def test_u16_identifier_out_of_range(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.u16(4294967296, 7)

    def test_u16_returns_array_of_zeroes(self):
        arraySet = ArraySet()

        u16 = arraySet.u16(2238122160, 7)

        self.assertIsInstance(u16, U16)
        self.assertEqual(7, len(u16))
        self.assertEqual(0, u16[0])
        self.assertEqual(0, u16[1])
        self.assertEqual(0, u16[2])
        self.assertEqual(0, u16[3])
        self.assertEqual(0, u16[4])
        self.assertEqual(0, u16[5])
        self.assertEqual(0, u16[6])

    def test_u16_throws_exception_when_identifier_already_in_use_by_u8(self):
        arraySet = ArraySet()
        arraySet.u8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u16(2238122160, 3)

    def test_u16_throws_exception_when_identifier_already_in_use_by_s8(self):
        arraySet = ArraySet()
        arraySet.s8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u16(2238122160, 3)

    def test_u16_throws_exception_when_identifier_already_in_use_by_u16(self):
        arraySet = ArraySet()
        arraySet.u16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u16(2238122160, 3)

    def test_u16_throws_exception_when_identifier_already_in_use_by_s16(self):
        arraySet = ArraySet()
        arraySet.s16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u16(2238122160, 3)

    def test_u16_throws_exception_when_identifier_already_in_use_by_u32(self):
        arraySet = ArraySet()
        arraySet.u32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u16(2238122160, 3)

    def test_u16_throws_exception_when_identifier_already_in_use_by_s32(self):
        arraySet = ArraySet()
        arraySet.s32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u16(2238122160, 3)

    def test_u16_throws_exception_when_identifier_already_in_use_by_f32(self):
        arraySet = ArraySet()
        arraySet.f32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u16(2238122160, 3)

    def test_s16_negative_identifier_throws_exception(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.s16(-1, 7)

    def test_s16_identifier_zero(self):
        arraySet = ArraySet()

        arraySet.s16(0, 7)

    def test_s16_identifier_at_limit(self):
        arraySet = ArraySet()

        arraySet.s16(4294967295, 7)

    def test_s16_identifier_out_of_range(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.s16(4294967296, 7)

    def test_s16_returns_array_of_zeroes(self):
        arraySet = ArraySet()

        s16 = arraySet.s16(2238122160, 7)

        self.assertIsInstance(s16, S16)
        self.assertEqual(7, len(s16))
        self.assertEqual(0, s16[0])
        self.assertEqual(0, s16[1])
        self.assertEqual(0, s16[2])
        self.assertEqual(0, s16[3])
        self.assertEqual(0, s16[4])
        self.assertEqual(0, s16[5])
        self.assertEqual(0, s16[6])

    def test_s16_throws_exception_when_identifier_already_in_use_by_u8(self):
        arraySet = ArraySet()
        arraySet.u8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s16(2238122160, 3)

    def test_s16_throws_exception_when_identifier_already_in_use_by_s8(self):
        arraySet = ArraySet()
        arraySet.s8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s16(2238122160, 3)

    def test_s16_throws_exception_when_identifier_already_in_use_by_u16(self):
        arraySet = ArraySet()
        arraySet.u16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s16(2238122160, 3)

    def test_s16_throws_exception_when_identifier_already_in_use_by_s16(self):
        arraySet = ArraySet()
        arraySet.s16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s16(2238122160, 3)

    def test_s16_throws_exception_when_identifier_already_in_use_by_u32(self):
        arraySet = ArraySet()
        arraySet.u32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s16(2238122160, 3)

    def test_s16_throws_exception_when_identifier_already_in_use_by_s32(self):
        arraySet = ArraySet()
        arraySet.s32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s16(2238122160, 3)

    def test_s16_throws_exception_when_identifier_already_in_use_by_f32(self):
        arraySet = ArraySet()
        arraySet.f32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s16(2238122160, 3)

    def test_u32_negative_identifier_throws_exception(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.u32(-1, 7)

    def test_u32_identifier_zero(self):
        arraySet = ArraySet()

        arraySet.u32(0, 7)

    def test_u32_identifier_at_limit(self):
        arraySet = ArraySet()

        arraySet.u32(4294967295, 7)

    def test_u32_identifier_out_of_range(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.u32(4294967296, 7)

    def test_u32_returns_array_of_zeroes(self):
        arraySet = ArraySet()

        u32 = arraySet.u32(2238122160, 7)

        self.assertIsInstance(u32, U32)
        self.assertEqual(7, len(u32))
        self.assertEqual(0, u32[0])
        self.assertEqual(0, u32[1])
        self.assertEqual(0, u32[2])
        self.assertEqual(0, u32[3])
        self.assertEqual(0, u32[4])
        self.assertEqual(0, u32[5])
        self.assertEqual(0, u32[6])

    def test_u32_throws_exception_when_identifier_already_in_use_by_u8(self):
        arraySet = ArraySet()
        arraySet.u8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u32(2238122160, 3)

    def test_u32_throws_exception_when_identifier_already_in_use_by_s8(self):
        arraySet = ArraySet()
        arraySet.s8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u32(2238122160, 3)

    def test_u32_throws_exception_when_identifier_already_in_use_by_u16(self):
        arraySet = ArraySet()
        arraySet.u16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u32(2238122160, 3)

    def test_u32_throws_exception_when_identifier_already_in_use_by_s16(self):
        arraySet = ArraySet()
        arraySet.s16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u32(2238122160, 3)

    def test_u32_throws_exception_when_identifier_already_in_use_by_u32(self):
        arraySet = ArraySet()
        arraySet.u32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u32(2238122160, 3)

    def test_u32_throws_exception_when_identifier_already_in_use_by_s32(self):
        arraySet = ArraySet()
        arraySet.s32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u32(2238122160, 3)

    def test_u32_throws_exception_when_identifier_already_in_use_by_f32(self):
        arraySet = ArraySet()
        arraySet.f32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.u32(2238122160, 3)

    def test_s32_negative_identifier_throws_exception(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.s32(-1, 7)

    def test_s32_identifier_zero(self):
        arraySet = ArraySet()

        arraySet.s32(0, 7)

    def test_s32_identifier_at_limit(self):
        arraySet = ArraySet()

        arraySet.s32(4294967295, 7)

    def test_s32_identifier_out_of_range(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.s32(4294967296, 7)

    def test_s32_returns_array_of_zeroes(self):
        arraySet = ArraySet()

        s32 = arraySet.s32(2238122160, 7)

        self.assertIsInstance(s32, S32)
        self.assertEqual(7, len(s32))
        self.assertEqual(0, s32[0])
        self.assertEqual(0, s32[1])
        self.assertEqual(0, s32[2])
        self.assertEqual(0, s32[3])
        self.assertEqual(0, s32[4])
        self.assertEqual(0, s32[5])
        self.assertEqual(0, s32[6])

    def test_s32_throws_exception_when_identifier_already_in_use_by_u8(self):
        arraySet = ArraySet()
        arraySet.u8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s32(2238122160, 3)

    def test_s32_throws_exception_when_identifier_already_in_use_by_s8(self):
        arraySet = ArraySet()
        arraySet.s8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s32(2238122160, 3)

    def test_s32_throws_exception_when_identifier_already_in_use_by_u16(self):
        arraySet = ArraySet()
        arraySet.u16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s32(2238122160, 3)

    def test_s32_throws_exception_when_identifier_already_in_use_by_s16(self):
        arraySet = ArraySet()
        arraySet.s16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s32(2238122160, 3)

    def test_s32_throws_exception_when_identifier_already_in_use_by_u32(self):
        arraySet = ArraySet()
        arraySet.u32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s32(2238122160, 3)

    def test_s32_throws_exception_when_identifier_already_in_use_by_s32(self):
        arraySet = ArraySet()
        arraySet.s32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s32(2238122160, 3)

    def test_s32_throws_exception_when_identifier_already_in_use_by_f32(self):
        arraySet = ArraySet()
        arraySet.f32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.s32(2238122160, 3)

    def test_f32_negative_identifier_throws_exception(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.f32(-1, 7)

    def test_f32_identifier_zero(self):
        arraySet = ArraySet()

        arraySet.f32(0, 7)

    def test_f32_identifier_at_limit(self):
        arraySet = ArraySet()

        arraySet.f32(4294967295, 7)

    def test_f32_identifier_out_of_range(self):
        arraySet = ArraySet()

        with self.assertRaises(OverflowError):
            arraySet.f32(4294967296, 7)

    def test_f32_returns_array_of_zeroes(self):
        arraySet = ArraySet()

        f32 = arraySet.f32(2238122160, 7)

        self.assertIsInstance(f32, F32)
        self.assertEqual(7, len(f32))
        self.assertEqual(0, f32[0])
        self.assertEqual(0, f32[1])
        self.assertEqual(0, f32[2])
        self.assertEqual(0, f32[3])
        self.assertEqual(0, f32[4])
        self.assertEqual(0, f32[5])
        self.assertEqual(0, f32[6])

    def test_f32_throws_exception_when_identifier_already_in_use_by_u8(self):
        arraySet = ArraySet()
        arraySet.u8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.f32(2238122160, 3)

    def test_f32_throws_exception_when_identifier_already_in_use_by_s8(self):
        arraySet = ArraySet()
        arraySet.s8(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.f32(2238122160, 3)

    def test_f32_throws_exception_when_identifier_already_in_use_by_u16(self):
        arraySet = ArraySet()
        arraySet.u16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.f32(2238122160, 3)

    def test_f32_throws_exception_when_identifier_already_in_use_by_s16(self):
        arraySet = ArraySet()
        arraySet.s16(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.f32(2238122160, 3)

    def test_f32_throws_exception_when_identifier_already_in_use_by_u32(self):
        arraySet = ArraySet()
        arraySet.u32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.f32(2238122160, 3)

    def test_f32_throws_exception_when_identifier_already_in_use_by_s32(self):
        arraySet = ArraySet()
        arraySet.s32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.f32(2238122160, 3)

    def test_f32_throws_exception_when_identifier_already_in_use_by_f32(self):
        arraySet = ArraySet()
        arraySet.f32(2238122160, 7)

        with self.assertRaises(AttributeError):
            arraySet.f32(2238122160, 3)
