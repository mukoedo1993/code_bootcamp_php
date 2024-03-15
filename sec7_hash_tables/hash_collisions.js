let user = {
    age:54,
    name:'Kylie',
    magic: true,
    scream: function() {
        console.log('ahhhhh!');
    }   
}

user.age // O(1)
user.spell = 'abra kadabra' //O(1)
user.scream();

const a = new Map();    //Map allows even function as keys or arrays.
const b = new Set()
console.log(b)

