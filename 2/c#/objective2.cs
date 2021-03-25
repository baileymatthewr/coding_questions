using System;

namespace objective1 {
    class MainClass {
        static void Main(){
            for(int i = 0; i < 40; ++i)
                Console.WriteLine(fib(i));
        }

        static int fib(int x){
            if(x <= 0)
                return 0;
            if(x == 1)
                return 1;
            return fib(x-1) + fib(x-2);
        }
    }
}
