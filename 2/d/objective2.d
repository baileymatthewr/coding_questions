import std;

int fib(int x){
    if(x <= 0)
        return 0;
    if(x == 1)
        return 1;
    return fib(x-1) + fib(x-2);
}

void main(){
    for(int i = 0; i < 40; ++i)
        writeln(fib(i));
}
