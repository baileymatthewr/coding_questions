#include <stdio.h>
#include <time.h>
#include <string.h>

int fib1(int);
int fib2(int);
int fib2helper(int, int, int);
int fib3(int);

int fib1(int x){
    if(x <= 0)
        return 0;
    if(x == 1)
        return 1;
    return fib1(x-1) + fib1(x-2);
}

int fib2(int z){
    return fib2helper(0, 1, z-1);
}

int fib2helper(int x, int y, int z){
    if(z < 0)
        return 0;
    if(z == 0)
        return y;
    return fib2helper(y, x+y, z-1);
}

int fib3(int z){
    int tmp = 0;
    int x = 0;
    int y = 1;
    while(z > 0){
        tmp = x;
        x = y;
        y = x + tmp;
        --z;
    }
    return x;
}

int main(int argc, char* argv[]){
    clock_t timer = clock();
    for(int i = 0; i < 40; ++i)
        printf("%d\n", fib1(i));
    timer = clock() - timer;
    printf("fib1 elapsed time: %f\n", (double)timer);

    timer = clock();
    for(int i = 0; i < 40; ++i)
        printf("%d\n", fib2(i));
    timer = clock() - timer;
    printf("fib2 elapsed time: %f\n", (double)timer);

    timer = clock();
    for(int i = 0; i < 40; ++i)
        printf("%d\n", fib3(i));
    timer = clock() - timer;
    printf("fib3 elapsed time: %f\n", (double)timer);

    return 0;
}
