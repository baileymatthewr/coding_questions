//------------- First Attempt ------------
function fib1(z){
    if(z <= 0)
        return 0;
    if(z === 1)
        return 1;
    return fib1(z-1) + fib1(z-2);
}

//-------------- Second Attempt --------------
function fib2(z){
    return fib2helper(0, 1, z-1);
}

function fib2helper(x, y, z){
    if(z < 0)
        return 0;
    if(z == 0)
        return y;
    return fib2helper(y, y+x, z-1);
}

//-------------- Iterative Version -------------
function fib_it(z){
    var x = 0;
    var y = 1;
    if(z <= 0)
        return 0;
    if(z == 1)
        return 1;
    while(z > 0){
        tmp = x;
        x = y;
        y += tmp;
        --z;
    }
    return x;
}


functions = [fib1, fib2, fib_it];

functions.forEach(function(func){
    var start = new Date();
    for(i = 0; i < 40; ++i)
        console.log(func(i));
    var end = new Date();
    var diff = end - start;
    console.log(`${func}: Elapsed time: ${diff}`);
});


