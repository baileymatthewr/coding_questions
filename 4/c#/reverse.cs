using System;

namespace reverse {
    class MainClass {
        static void Main(){
            int i = 0, j = 0;
            char tmp = 'a';
            char* pos = null;
            string str = "Hello, World";
            Console.WriteLine(str);
            unsafe {
                fixed(char* ptr = &str[0]){
                    for(i = 0; i < str.Length/2; ++i){
                        pos = ptr;
                        pos += i;
                        j = str.Length - i - 1;
                        tmp = str[i];
                        *pos = str[j];
                        pos = ptr;
                        pos += j;
                        *pos = tmp;
                    }
                }
            }
            Console.WriteLine(str);
        }
    }
}
