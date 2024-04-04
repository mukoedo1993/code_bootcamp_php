'''
Method 2: dp
optimized space complexity O(1)
Time complexity: O(n)
'''
class Solution:
    def maxProfit(self, prices: List[int]) -> int:
        
        n = len(prices)
        if n == 0:
            return 0
        best = 0
        helper = dict()
        profit1 = 0
        low = prices[0]
        for i in range(n):
            low = min(low, prices[i])
            profit = max(profit1, prices[i]-low)
            profit1 = profit
        return profit1