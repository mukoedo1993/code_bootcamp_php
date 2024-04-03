'''
Method 2: 
Use the property:
inorder traversal of a bst is sorted.
    '''
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def __init__(self):
        self.prev_ = None
    def isValidBST(self, root: Optional[TreeNode]) -> bool:
        return self.inOrder(root)
    def inOrder(self, root):
        if root is None:
            return True
        if self.inOrder(root.left) == False:
            return False
        if self.prev_ != None and self.prev_.val >= root.val:
            return False
        self.prev_ = root
        return self.inOrder(root.right)