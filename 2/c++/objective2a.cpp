#include <iostream>
#include <chrono>
using std::cout;
using std::endl;

int fib1(int);
int fib2(int);
int fib2helper(int, int, int);

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

int main(int argc, char* argv[]){
    std::chrono::steady_clock::time_point timer = std::chrono::steady_clock::now();
    for(int i = 0; i < 40; ++i)
        cout << fib1(i) << endl;
    timer = std::chrono::steady_clock::now() - timer;
    cout << "fib1 elapsed time: " << timer << endl;
    timer = std::chrono::steady_clock::now();
    for(int i = 0; i < 40; ++i)
        cout << fib2(i) << endl;
    timer = std::chrono::steady_clock::now() - timer;
    cout << "fib2 elapsed time: " << timer << endl;
    return 0;
}
