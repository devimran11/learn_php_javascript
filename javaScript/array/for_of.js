var numbers = [0, 1, 2,3, 4, 5, 6, 7, 8,9];

//example one
for(const number of numbers)
{
    if(number === 5) break;
    console.log(`Number printed ${number}`);
}

console.log('The new line');
//example two
for(const number of numbers){
    console.log(`The number is ${number}`);
}

//another example

var findNum = numbers.map(function(theNum){
    return theNum === 8;
});
findNum.indexOf(theNum);