console.log('Welcome');
const promise1 = new Promise((resolve, reject) => {
    completedPromise = false;
    if (completedPromise) {
        resolve("completed promise 1");
    } else {
        reject(new Error("not completed promise 1"));
    }
})
//create primise

const promise2 = new Promise((resolve, reject) => {
    // resolve('Completed promise 2');
    reject(new Error('Not completed promise 2'));
})
const promise3 = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve('Promise 3');
    }, 2000);
});
const promise4 = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve('Promise 4');
    }, 1000);
});
promise1
.then((res) => {
    console.log(res);
})
.catch((err) => {
    console.log(err);
});
//promise two
promise2.then((res) => {
    console.log(res);
})
.catch((err) => {
    console.log(err.message);
})
console.log('Bye');
Promise.race([promise3, promise4]).then((res) => {
    console.log(res);
})

//Another Promise Example
const aPromise = control => {
    return new Promise((resolve, rejected) => {
        setTimeout(() => {
            if (control) {
                resolve()
            } else {
                rejected()
            }
        }, 3000)        
    })
}
aPromise(true)
    .then(() => {
        console.log('This is a success')
    })
    .catch(() => {
        console.log('This is a Failer')
    })
