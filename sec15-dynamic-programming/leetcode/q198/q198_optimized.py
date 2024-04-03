'''
Now, only use external
variable dp, dp1 and dp2.
Space Complexity O(3) =>O(1)
'''
class Solution:
    def rob(self, nums: List[int]) -> int:
        n = len(nums)
        dp2 = 0
        dp1 = 0
        for i in range(n):
            dp = max(dp2 + nums[i], dp1)
            dp2 = dp1
            dp1 = dp
        return dp1