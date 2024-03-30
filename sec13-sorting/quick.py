#ref:https://stackoverflow.com/a/18262384
import random


def quickSort(array, mode: int = 0):
    """
    Sort the array by using quickSort
    """
    less = []
    equal = []
    greater = []
    pivot = 0

    #Choose either first, last, random or median as the pivot:
    if len(array) > 1:
        if mode == 0:
            pivot = array[0]
        elif mode == -1:
            pivot = array[-1]
        else:
            pivot = array[random.randint(0, len(array) - 1)]
        for x in array:
            if x < pivot:
                less.append(x)
            elif x == pivot:
                equal.append(x)
            elif x > pivot:
                greater.append(x)
        # Don't forget to return sth
        return quickSort(less,mode) + equal + quickSort(greater,mode)
    else:
        # You need to handle the part at the end of the recursion -
        # when you only have one element in your array, just return the array
        return array
    

numbers2 = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0]
N = len(numbers2)
sorted_number2 = quickSort(numbers2, )#0
print(sorted_number2)


numbers3 = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0]
N = len(numbers3)
sorted_number3 = quickSort(numbers3,-1)
print(sorted_number3)


numbers4 = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0]
N = len(numbers4)
sorted_number4 = quickSort(numbers4,3)
print(sorted_number4)