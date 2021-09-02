//console.log("Hello World");

var Rahim = {
    fullName:"Abdur Rahim",
    age: 25,
    job: "Student",
    welcomeMsg: function()
    {
        console.log("Hello Abdur Rahim");
    }
}

for(var props in Rahim)
{
    console.log(Rahim[props]);
}