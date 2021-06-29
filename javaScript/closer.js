// var a = "Imran Hossain";
// function setName(){
//     console.log("My Name Is " + a);
// }
// console.dir(setName);
var Person = function(name, age, job){
    this.name = name;
    this.age = age;
    this.job = job;
    this.dateOfBirth = function(){
        console.log(this.name + ' is born in ' + (2018-this.age));
    }
}
var imran = new Person("Imran Hossain", 25, 'Student');
var tamim = new Person("Tamim Iqbal", 33, 'Cricketer');
console.log(imran.name);
console.log(tamim.job);
console.log(tamim.dateOfBirth());