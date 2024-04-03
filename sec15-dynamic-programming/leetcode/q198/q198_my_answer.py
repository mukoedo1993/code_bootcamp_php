'''
recursion and DP.
We need a helper_dict which has the 
space complexity O(n)
'''
class Solution:
    def rob(self, nums: List[int]) -> int:
        n = len(nums)
        helper_dict = {} # memoization for DP
        def helper(sum, i):
            if i < n:
                if not(i in helper_dict):
                    helper_dict[i] = max(nums[i] + helper(sum, i+2), helper(sum, i+1))
                return helper_dict[i]
            else:
                return 0
        return helper(0,0)
    