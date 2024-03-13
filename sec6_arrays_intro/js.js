var object1 = {value :10}
var object2 = object1
var object3 = {value:10}

console.log(object1 === object2)    //true

console.log(object1 === object3)    //false

object1.value = 15
console.log(object2.value) 
console.log(object3.value) 

//arrays are just objects, which is a data structure, not primitive type
//in JS.

console.log([] === [])  //false
//This condition will always return 'false' since JavaScript compares objects by reference, not value


//context vs scope
function b() {
    let a = 4;
}

//instantiation
//Making instances and multiple copies of a projects
class Player {
    constructor(name, type){
        console.log(this);
        this.name = name
        this.type= type
    }

    introduce () {
        console.log(`Hi I am ${this.name}, I'm a ${this.type}`)
    }
}

class Wizard extends Player{
    constructor(name, type) {

        super(name, type)
        console.log('wizard', this)
        //call the superclass's ctor
    }
    play() {
        console.log(`WEEEEE I'm a ${this.type}`)
    }
}
const wizard1 = new Wizard('Shelly', 'Healer')
const wizard2 = new Wizard('Shawn', 'Dark Magic')
wizard1.play()

wizard2.introduce()