
const letters= ['a', 'd', 'z', 'e', 'r', 'b'];

const basket = [2, 65, 34, 2, 1, 7, 8];

const basket1 = [2, 65, 34, 2, 1, 7, 8];

//the issue with basket
console.log(basket.sort());
//Javascript's sort method bascially convert int arrays to string arrays 
//and sort it.

//overwrite the comparison function, then it works.
console.log(basket1.sort(function(lhs, rhs){return lhs - rhs;}))
