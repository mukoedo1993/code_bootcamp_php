#ref: https://stackoverflow.com/questions/13979714/heap-sort-how-to-sort
def heapify(arr,end, i):
    l = 2 * i + 1
    r = 2 * (i + 1)
    max = i
    if l < end and arr[i] < arr[l]:
        max = l
    if r < end and arr[max] < arr[r]:
        max = r
    if max != i:
        arr[i],arr[max] = arr[max],arr[i]
        heapify(arr, end, max)

def heap_sort(arr):
    end = len(arr)
    start = end // 2 - 1
    for i in range(start, -1, -1):
        heapify(arr, end,i)
    for i in range(end-1,0,-1):
        arr[i],arr[0] = arr[0],arr[i]
        heapify(arr, i, 0)

numbers4 = [99, 44, 6, 2, 1, 5, 63, 87, 283, 4, 0]
heap_sort(numbers4)
print(numbers4)


   