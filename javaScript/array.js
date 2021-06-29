    //Copy by Reference
    var names, newNames, i, j;
    names = ['Tamim', 'Liton', 'Naim', 'Musfiq', 'Sakib', 'Sabbir', 'Santo'];
    for(i = 0; i<names.length; i++){
        console.log("The name is: ", names[i]);
    }
    var newNames = names;
    console.log(Boolean(newNames===names));
    newNames.push('Imran');
    for(j = 0; j<newNames.length; j++)
    {
        console.log("New Object names is: ", newNames[j]);
    }
    console.log(names.length);
    console.log(newNames.length);
    newNames.pop();
    console.log(names.length);


    //Copy by Value
    var addName = names.slice(0,7);
    console.log(Boolean(addName===names));
    console.log(addName.length);
    addName.push('Sajedul');
    console.log(addName.length);
    console.log(names.length);

