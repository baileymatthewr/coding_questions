#include <stdio.h>

int fib(int x){
    if(x <= 0)
        return 0;
    if(x == 1)
        return 1;
    return fib(x-1) + fib(x-2);
}

int main(int argc, char* argv[]){
    for(int i = 0; i < 30; ++i)
        printf("%d\n", fib(i));
    return 0;
}
