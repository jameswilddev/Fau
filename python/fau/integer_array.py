from .fixed_length_array import FixedLengthArray


class IntegerArray(FixedLengthArray):
    def __getitem__(self, index: int) -> int:
        if index < 0:
            raise IndexError
        elif index >= len(self._values):
            raise IndexError
        else:
            return self._values[index]

    def __setitem__(self, index: int, value: int) -> None:
        if index < 0:
            raise IndexError
        elif index >= len(self._values):
            raise IndexError
        else:
            self._values[index] = value
