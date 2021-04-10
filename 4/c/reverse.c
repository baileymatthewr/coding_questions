#include <stdio.h>

/*
 *  "Hello, World"
 *  00 switch with 11
 *  01 switch with 10
 *  02 switch with 09
 *  03 switch with 08
 *  04 switch with 07
 *  05 switch with 06
 */



int main(int argc, char* argv[]){
    int SIZE = 13, i = 0, j = 0, last = 0;
    char tmp = 'a';
    char str[] = {
        'H', 'e', 'l', 'l', 'o', ',', ' ', 'W', 'o', 'r', 'l', 'd', '\0'
    };
    last = SIZE - 1;
    printf("String: %s\n", str);
    for(i = 0; i < SIZE/2; ++i){
        j = last - i - 1; // account for 0-based index
        tmp = str[i];
        str[i] = str[j];
        str[j] = tmp;
    }
    printf("String: %s\n", str);
    return 0;
}
