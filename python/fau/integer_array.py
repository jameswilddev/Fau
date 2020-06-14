from array import array
from abc import abstractmethod
from .fixed_length_array import FixedLengthArray


class IntegerArray(FixedLengthArray):
    @property
    @abstractmethod
    def _type_code(self) -> str:
        """ pass would count toward coverage statistics """

    def __init__(self, length: int) -> None:
        if length < 0:
            raise OverflowError
        else:
            self._values = array(self._type_code, [0] * length)

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

    def __len__(self) -> int:
        return len(self._values)
