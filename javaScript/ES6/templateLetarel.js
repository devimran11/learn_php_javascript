var name = "Imran Hossain"
var age = 25;
var job = 'student';
var result = `Hello Everyone my name is ${name}, i am ${age} years old, and i'm a ${job}`
console.log(result);
//another example
function ageCalculate(dob){
    return `I'm ${2021 - dob} years old`
}
console.log(ageCalculate(1996));
console.log(result.includes("Hossain"));
console.log(`I always want to say ${'Alhamdulliah ' .repeat(5)}`);