import std;

int fib1(int x){
    if(x <= 0)
        return 0;
    if(x == 1)
        return 1;
    return fib1(x-1) + fib1(x-2);
}

int fib2(int x){
    return fib2helper(0, 1, x-1);
}

int fib2helper(int x, int y, int z){
    if(z < 0)
        return 0;
    if(z == 0)
        return y;
    return fib2helper(y, y+x, z-1);
}


void main(){
    auto start = std.datetime.systime.Clock.currTime();
    for(int i = 0; i < 40; ++i)
        writeln(fib1(i));
    auto end = std.datetime.systime.Clock.currTime();
    auto diff = end - start;
    writeln("fib1: elapsed time: ", diff);

    start = std.datetime.systime.Clock.currTime();
    for(int i = 0; i < 40; ++i)
        writeln(fib2(i));
    end = std.datetime.systime.Clock.currTime();
    diff = end - start;
    writeln("fib2: elapsed time: ", diff);
}
