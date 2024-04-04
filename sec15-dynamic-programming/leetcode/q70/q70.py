'''
Optimized method:
Using DP and iterative only.
Space complexity is O(1) here.
'''
class Solution:
    def climbStairs(self, n: int) -> int:
        if n == 1:
            return 1
        if n == 2:
            return 2
        result1 = 2
        result2 = 1
        for i in range(3 ,n+1):
            result = result1 + result2
            result2 = result1
            result1 = result
        return result1