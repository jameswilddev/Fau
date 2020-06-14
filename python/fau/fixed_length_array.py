from array import array
from abc import abstractmethod


class FixedLengthArray:
    @property
    @abstractmethod
    def _type_code(self) -> str:
        """ pass would count toward coverage statistics """

    def __init__(self, length: int) -> None:
        if length < 0:
            raise OverflowError
        else:
            self._values = array(self._type_code, [0] * length)

    def __len__(self) -> int:
        return len(self._values)
