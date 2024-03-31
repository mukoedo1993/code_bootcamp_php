#read: https://www.geeksforgeeks.org/counting-sort/
def count_sort(arr):
    #Finding the maximum element of input array
    M = max(arr)

    # Initializing count array with 0
    countArray = [0 for _ in range(M+1)]
    
    # mapping each element of input array as an index of countArray
    for num in arr:
        countArray[num] += 1

    # Calculating prefix sum at every index of sum_array
    for i in range (1, M + 1):
        countArray[i] += countArray[i - 1]
    
    # Creating output_array from count array:
        outputArray = [0 for _ in range(len(arr))]

    for i in range(len(arr) - 1, -1, -1):
        outputArray[countArray[arr[i]] - 1] = arr[i]
        countArray[arr[i]] -= 1

    return outputArray
numbers = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0];
numbers_sorted = count_sort(numbers)
print(numbers_sorted)




