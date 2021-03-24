#include <iostream>
using std::cout;
using std::endl;

int fib(int x){
    if(x <= 0)
        return 0;
    if(x == 1)
        return 1;
    return fib(x-1) + fib(x-2);
}

int main(int argc, char* argv[]){
    for(int i = 0; i < 30; ++i)
        cout << fib(i) << endl;
    return 0;
}
