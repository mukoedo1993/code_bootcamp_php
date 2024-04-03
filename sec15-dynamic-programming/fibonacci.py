#0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55
calculations = 0
def fibonacci(n):
    # O(2^n)

    if n < 2:
        return n
    return fibonacci(n - 1) + fibonacci(n - 2)

def fibonacciMaster():
    #O(n)
    cache = dict()
    def fib(n):
        global calculations
        calculations += 1
        if n in cache:
            return cache[n]
        else:
            if n <2:
                return n
            else:
                cache[n] = fib(n-1) + fib(n-2)
                return cache[n]
    return fib


def fibonacciMaster2(n:int):
    answer = [0 , 1]
    for i in range(2, n+1):
        answer.append(answer[i - 2] + answer[i - 1])
    return answer.pop()

fasterFib = fibonacciMaster()

print(f"Slow {fibonacci(35)}\n")
print(f"DP {fasterFib(100)}\n")
print(f"DP2 {fibonacciMaster2(100)}\n")
print(f"we did {calculations} calculations")
