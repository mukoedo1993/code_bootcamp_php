'''
Method 1: for question 98.
limit the range
'''
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def __init__(self):
        pass
    def isValidBST(self, root: Optional[TreeNode]) -> bool:
        return self.isValidBSThelper(root, float("-inf"), float("inf"))
    
    def isValidBSThelper(self, root, min_val, max_val):
        if root is None:
            return True
        if root.val <= min_val or root.val >= max_val:
            return False
        return self.isValidBSThelper(root.left, min_val, root.val) and self.isValidBSThelper(root.right, root.val, max_val)
        