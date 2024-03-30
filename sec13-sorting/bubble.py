def bubbleSort(arr):
    n = len(arr)

    # Traverse through all array elements
    for  i in range(n):
        swapped = False

        # Last i elements are already in place
        for  j in range(n - i - 1):
            if arr[j] > arr[j+1]:
                arr[j], arr[j+1] = arr[j+1], arr[j]
                swapped = True
        if(swapped == False):   #It means that nothing
            #after i is non-ascending:
            break
numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];
bubbleSort(numbers);
print(numbers)