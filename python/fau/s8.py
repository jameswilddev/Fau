from .unsigned_integer_array import UnsignedIntegerArray


class S8(UnsignedIntegerArray):
    @property
    def _type_code(self) -> str:
        return 'b'
