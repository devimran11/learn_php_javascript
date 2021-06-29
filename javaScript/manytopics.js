//typeof keyword
/*
var name = "Imran Hossain";
console.log(name);
name = 10;
console.log(name);
console.log(typeof(name));
var a = 20;
console.log(typeof(a));
*/

//array
// var arrName = ['Tamim', 'Sakib', 'Musfiq', 'Riyad', 'Sabbir'];
// console.log(arrName);
// console.log(arrName.length);
// console.log(arrName.indexOf('Musfiq'));
// arrName.push("Liton");
// console.log(arrName);
// arrName.unshift("Naim");
// console.log(arrName);
// var newSplice = arrName.splice(3);
// console.log(arrName);
// console.log(newSplice);
// var newslice = arrName.slice(1);
// console.log(newslice);
// console.log(arrName);

//Object

/*
var Rahim = {
    name : 'Sakib',
    age : 32,
    style : 'left-hand',
    address : 'magura',
    style : function(){
        console.log('He is a number one allrounder');
    },
    roll : [10, 20, 30, 40, {
        animal : 'Dog',
        pc : 200
    }],
};
Rahim.zipecode = 6420;
Rahim.welcomeMsg = function(){
    console.log("Hello Everyone, I am from Bangladesh");
}
console.log(Rahim);
console.log(Rahim.welcomeMsg());
console.log(Rahim.style());
console.log(Rahim.roll[2]);
console.log(Rahim.roll[4].pc);
*/

//function
function funcName(){
    console.log("Hello World");
};
funcName();
var func = function(name){
    console.log('Hello Anonymous function ' + name);
}
func("Imran");

function sumFunction(a, b){
    sum = a + b;
    console.log(sum);
}
sumFunction(10, 20);
sumFunction(20, 20);

function callMyName(name, callback){
    var age = 24;
    callback(age);
    console.log("Is it interesting? yes it is Mr. " + name);
}
function hello(age){
    console.log('I am passed through argument and my age is: ' + age);
}
callMyName("Imran", hello);

function welcomeMessage (name){
    console.log('Welcome Mr. ' + name);
    return function options(menu){
        console.log('Do you like ' + menu + ' Mr. ' + name);
    }
}
welcomeMessage("Imran")('Coffee');

function changeValue(a){
    console.log('Value of a inside function before changing: ' + a);
    a = 10;
    console.log('Value of a inside function after changing :' + a);
    console.log('Value of a inside function after changing :' + a);
    return a;
    console.log('Value of a inside function after changing :' + a);
}
var a = 100;
console.log('Value of a before changing function is applied: ' + a);
changeValue(a);
console.log('Value of a after changing function is applied: ' + a);
changeValue(a);

function aFunc(b){
    console.log('Before changing the property: ' + b.one);
    b.one = 'two';
    console.log('After changing the property: ' + b.one);
}
var b = {
    one : 'One'
}
aFunc(b);
console.log(b.one);