class Node:
    def __init__(self,value):
        self.left = None
        self.right = None
        self.value = value

class BinarySearchTree:
    def __init__(self):
        self.root = None

    def insert(self,value):
        newNode = Node(value)
        if self.root is None:
            self.root = newNode
        else:
            currentNode = self.root
            while True:
                if value < currentNode.value:
                    # Left
                    if currentNode.left is None:
                        currentNode.left = newNode
                        
                        return self
                    currentNode = currentNode.left
                else:
                    if currentNode.right is None:
                        currentNode.right = newNode
                        return self
                    currentNode = currentNode.right
    

    def lookup(self,value):
        if self.root is None:
            return False
        currentNode = self.root
        while currentNode != None:
            if value < currentNode.value:
                currentNode = currentNode.left
            elif value > currentNode.value:
                currentNode = currentNode.right
            elif currentNode.value == value:
                return currentNode
        return None
    
    def remove(self, value):
        if self.root is None:
            return False
        
        currentNode = self.root
        parentNode = None

        while currentNode:
            if value < currentNode.value:
                parentNode = currentNode
                currentNode = currentNode.left
            elif value > currentNode.value:
                parentNode = currentNode
                currentNode = currentNode.right
            elif currentNode.value == value:
                # We have a match , get to work

                # Option 1: not right child
                if currentNode.right is None:
                    if parentNode is None:
                        self.root = currentNode.left
                    else:
                        if currentNode.value < parentNode.value:
                            parentNode.left = currentNode.left
                        elif currentNode.value > parentNode.value:
                            parentNode.right = currentNode.left

                # Option 2: Right child which does not have a left child            
                elif currentNode.right.left is None:
                    if parentNode is None:
                        self.root = currentNode.left
                    else:
                        currentNode.right.left = currentNode.left
                    
                    # if parent > current, make right child of the left
                    # the parent
                        if currentNode.value < parentNode.value:
                            parentNode.left = currentNode.right
                        elif currentNode.value > parentNode.value:
                            parentNode.right = currentNode.right
                
                # Option 3: Right child that has a left child
                else:
                    # find the right child's left most child:
                    leftmost = currentNode.right.left
                    leftmostParent = currentNode.right
                    while leftmost.left is not None:
                        leftmostParent = leftmost
                        leftmost = leftmost.left

                    leftmostParent.left = leftmost.right
                    leftmost.left = currentNode.left
                    leftmost.right = currentNode.right

                    if parentNode is None:
                        self.root = leftmost
                    else:
                        if currentNode.value < parentNode.value:
                            parentNode.left = leftmost
                        elif currentNode.value > parentNode.value:
                            parentNode.right = leftmost
                return True     



    def BreadthFirstSearch(self):
        currentNode = self.root
        theList = []
        theQueue = []
        theQueue.append(currentNode)
        while len(theQueue) > 0:
            currentNode = theQueue.pop(0)
            theList.append(currentNode.value)
            if currentNode.left:
                theQueue.append(currentNode.left)
            if currentNode.right:
                theQueue.append(currentNode.right)
            return list
    
    def BreadthFirstSearchR(self, queue, list):
        if 0 == len(queue):
            return list
        currentNode = queue.pop(0)
        list.append(currentNode.value)

        if currentNode.left is not None:
            queue.append(currentNode.left)
        if currentNode.right is not None:
            queue.append(currentNode.right)
        
        return self.BreadthFirstSearchR(queue, list)
    
    def DFSInorder(self):
        return traverseInOrder(self.root, [])
    def DFSPostOrder(self):
        return traversePostOrder(self.root, [])
    def DFSPreorder(self):
        return traversePreOrder(self.root, [])
    
def traverseInOrder(node,list):
    
    if node.left is not None:
        traverseInOrder(node.left, list)
    list.append(node.value)
    print(node.value, end=" ")
    if node.right is not None:
        traverseInOrder(node.right, list)
    return list

def traversePostOrder(node,list):
    print(node.value, end=" ")
    if node.left is not None:
        traversePostOrder(node.left, list)
    
    if node.right is not None:
        traversePostOrder(node.right, list)
    list.append(node.value)
    
    return list

def traversePreOrder(node,list):
    print(node.value, end=" ")
    list.append(node.value)
    if node.left is not None:
        traversePostOrder(node.left, list)
    
    if node.right is not None:
        traversePostOrder(node.right, list)
    return list

tree = BinarySearchTree()
tree.insert(9)
tree.insert(4)
tree.insert(6)
tree.insert(20)
tree.insert(170)
tree.insert(15)
tree.insert(1)
# tree.breadthFirstSearch
print("Inorder: ", end="")
tree.DFSInorder()
print("\nPreorder: ", end="")
tree.DFSPreorder()
print("\nPostorder: ", end="")
tree.DFSPostOrder()
print("")
 