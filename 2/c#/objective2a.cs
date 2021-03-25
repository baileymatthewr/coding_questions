using System;

namespace objective1 {
    class MainClass {
        static void Main(){
            TimeSpan t = now();
            for(int i = 0; i < 40; ++i)
                Console.WriteLine(fib1(i));
            t = now() - t;
            Console.WriteLine("fib1 elapsed time: {0:D}", (long)t.TotalMilliseconds);
            t = now();
            for(int i = 0; i < 40; ++i)
                Console.WriteLine(fib2(i));
            t = now() - t;
            Console.WriteLine("fib2 elapsed time: {0:D}", (long)t.TotalMilliseconds);
        }

        static TimeSpan now(){
            return DateTime.UtcNow - new DateTime(1970, 1, 1);
        }

        static int fib1(int x){
            if(x <= 0)
                return 0;
            if(x == 1)
                return 1;
            return fib1(x-1) + fib1(x-2);
        }

        static int fib2(int z){
            return fib2helper(0, 1, z-1);
        }

        static int fib2helper(int x, int y, int z){
            if(z < 0)
                return 0;
            if(z == 0)
                return y;
            return fib2helper(y, x+y, z-1);
        }
    }
}
