Rahim = {
    fullName : "Musfiqur Rahim",
    age : 25,
    address : "Dhaka",
    profession : "Student"
}
Rahim.zipcode = 6420;
Rahim.welcomeMsg = function(){
    console.log("Hello There");
}
console.log(Rahim.welcomeMsg());
console.log(Rahim);
var age = Rahim.age;
console.log(age);

for(item in Rahim){
    console.log(item);
}