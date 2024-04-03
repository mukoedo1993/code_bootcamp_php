def addTo80(n:int)->int:
    print('long time',end=" ")
    return n + 80

cache = dict()
def memoizedAddTo80(n):
    if n in cache:
        return cache[n]
    else:
        print('long time', end="\n")
        cache[n] = n + 80
        return cache[n]
    
def memoziedAddTo80Variant(n, cache1= dict()):
    def helper(n):
        if n in cache1:
            return cache1[n]
        else:
            print('long time!', end="\n")
            cache1[n] = n + 80
            return cache1[n]
    return helper(n)
    
print(f'1 {memoizedAddTo80(5)}')
print(f'2 {memoizedAddTo80(5)}')

memoizedAddTo80(5)
memoizedAddTo80(5)
memoizedAddTo80(5)


print(f'1 {memoziedAddTo80Variant(5)}')
print(f'2 {memoziedAddTo80Variant(5)}')

memoziedAddTo80Variant(5)
memoziedAddTo80Variant(5)
memoziedAddTo80Variant(5)
