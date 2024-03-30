def insertionSort(arr):

    # Traverse through 1 to len(arr)
    n = len(arr)
    for i in range(1, n):
        key = arr[i]
        j = i - 1
        while j >= 0 and key < arr[j]:
            arr[j+1] = arr[j]
            j = j - 1
        arr[j + 1] = key

numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0]
insertionSort(numbers)
print(numbers)