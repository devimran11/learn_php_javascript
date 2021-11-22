var info = ['imran', '25', 'student']
var name = info[0];
var age = info[1];
var job = info[3];
console.log(age);
const [name6, age6, job6] = info;
console.log(name6)

const add = {
    present: 'Dhaka',
    permanent: 'Lalpur'
}
const {present6, per6} = add;
console.log(add.present);
console.log(per6);