// local = "Hello I am from local variable";
// function localScoping(){
//     console.log(local);
// }
// localScoping();
// console.log(local);

// function globalFunction(){
//     var a = 5;
//     console.log('Global Function');
//     function localFunc(){
//         var b = 10;
//         console.log(a + b);
//         console.log('Local Function');
//     }
//     localFunc();
// }
// globalFunction();

var num1 = 5;
var sum = function (){
    var num2 = 10;
    var n = 20;
    return function (){
        return num1 + num2 + n;
    }
    
}
var myFunc = sum();
console.dir(myFunc);