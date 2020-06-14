from .unsigned_integer_array import UnsignedIntegerArray


class S16(UnsignedIntegerArray):
    @property
    def _type_code(self) -> str:
        return 'h'
