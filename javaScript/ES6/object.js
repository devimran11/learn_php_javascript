var personalInfo = {
    'name' : 'Imran Hossain',
    'age' : 25,
    'job' : 'Student',
}
for(var props in personalInfo){
    console.log(props + " = " + personalInfo[props]);
}