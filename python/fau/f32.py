from array import array
from .fixed_length_array import FixedLengthArray


class F32(FixedLengthArray):
    def __init__(self, length: int) -> None:
        if length < 0:
            raise OverflowError
        else:
            # This logic can't be shared with IntegerArray via a common base
            # class as MyPy assumes it returns an array[int].
            self._values = array('f', [0] * length)

    def __getitem__(self, index: int) -> float:
        if index < 0:
            raise IndexError
        elif index >= len(self._values):
            raise IndexError
        else:
            return self._values[index]

    def __setitem__(self, index: int, value: float) -> None:
        if index < 0:
            raise IndexError
        elif index >= len(self._values):
            raise IndexError
        else:
            self._values[index] = value

    def __len__(self) -> int:
        return len(self._values)
