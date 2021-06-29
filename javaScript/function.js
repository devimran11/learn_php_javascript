//argument and parameters
function sumMachine(firstNumber, secondNumber){
    var sum = firstNumber + secondNumber;
    console.log(sum);
}
sumMachine(10, 10);
sumMachine(50, 10);
//argument hisabe function pass kora hoyece
function myName(name, callback){
    myAge = 25;
    callback(myAge);
    console.log("Hello, I am " + name);
}
function hello(age){
    console.log("Hello, I'm from " + age + " years old");
}
myName("Zonayed Ahmed", hello);

//function return

function welcomeMsg(name)
{
    console.log('Welcome Mr. ' + name);
    return function options(menu)
    {
        console.log('Do you like ' + menu + 'Mr. ' + name);
    }
}
welcomeMsg("Zonayed Ahemd")(' Coffee ');

//Primitive data type(Number, string boolean undefiend null) copy by value

function changeValue(a){
    console.log('Value of a inside function before changing: ' + a);
    a = 10;
    console.log('Value of a inside function after changing: ' + a);
    return a;
}
var a = 100;
console.log('Value of a before changing function is applied: ' + a);
changeValue(a);
console.log('Value of a after changing function is applied: ' + a);


//non primitive value data type(array, object, function) copy by reference

function aFunc(a)
{
    console.log('Before changing the property ' + a .one);
    a.one = 'Two';
    console.log('After changing the property ' + a.one);
}
var a = {
    one : 'one'
}
aFunc(a);
console.log('Last element change and ' + a.one);