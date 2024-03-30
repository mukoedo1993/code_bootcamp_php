class MyQueue:

    def __init__(self):
        self.arr1 = [] 
        self.arr2 = [] 

    def push(self, x: int) -> None:
        self.arr1.insert(0,x)

    def pop(self) -> int:
        #first, clear arr1
        while(len(self.arr1)>0):
            temp = self.arr1.pop()
            self.arr2.insert(0,temp)
        #print(self.arr2)
        return self.arr2.pop(-1)



    def peek(self) -> int:
        while(len(self.arr1) > 0):
            temp1 = self.arr1.pop()
            self.arr2.insert(0,temp1)
        #print(self.arr2)
        return self.arr2[-1]


        

    def empty(self) -> bool:
        return len(self.arr1) == 0 and len(self.arr2) == 0 
        
