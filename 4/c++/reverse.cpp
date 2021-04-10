#include <iostream>
#include <string>
using std::cout;
using std::endl;
using std::string;

int main(int argc, char* argv[]){
    int LEN = 12, i = 0, j = 0;
    char tmp;
    string str = "Hello, World";
    cout << str << endl;
    for(int i = 0; i < LEN/2; ++i){
        j = LEN - i - 1; //account for index
        tmp = str[i];
        str[i] = str[j];
        str[j] = tmp;
    }
    cout << str << endl;
    return 0;
}
