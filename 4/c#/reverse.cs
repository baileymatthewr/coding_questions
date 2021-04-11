using System;

namespace reverse {
    class MainClass {
        static void Main(){
            int i = 0, j = 0;
            char tmp = 'a';
            char* first = null;
            char* last = null;
            string str = "Hello, World";
            Console.WriteLine(str);
            for(i = 0; i < str.Length/2; ++i){
                j = str.Length - i - 1;
                tmp = str[i];
                first = &str[i];
                *first = str[j];
                last = &str[j];
                *last = tmp;
            }
            Console.WriteLine(str);
        }
    }
}
