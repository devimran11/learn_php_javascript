var poorCountry = ['Bangladesh', 'India', "Afganistha"];
var reachCountry = ['Canada', 'America', 'China'];

var reachCountry = [...poorCountry, 'Canada', 'America', 'China'];
console.log(reachCountry);

//2nd Example
var arrOne = [1, 2, 3, 4, 5, 6];
var arrTwo = [7, 8, 9, 10];
//ES5
var arrFour = arrOne.concat(arrTwo);
console.log(arrFour);
//ES6
var arrThree6 = [...arrOne, ...arrTwo];
console.log(arrThree6);
//Another Example

arrOne.push(arrTwo);
console.log(arrOne);