using System;

namespace objective1 {
    class MainClass {
        static void Main(){
            int x = 0, y = 0;

            Console.WriteLine("Test 1a: Check how ++x works by itself");
            x = 1;
            Console.WriteLine("x = {0}", x);
            ++x;
            Console.WriteLine("x = {0}", x);


            Console.WriteLine("Test 1b: Make preIncrement(x) match ++x");
            x = 1;
            Console.WriteLine("x = {0}", x);
            preIncrement(ref x);
            Console.WriteLine("x = {0}", x);


            Console.WriteLine(
                "Test 2a: Make postIncrement(x) work in the following statement"
            );
            Console.WriteLine("y = x++");
            x = 1;
            y = ++x;
            Console.WriteLine("y = {0}", y);
            Console.WriteLine("x = {0}", x);

            Console.WriteLine("y = preIncrement(x)");
            x = 1;
            y = preIncrement(ref x);
            Console.WriteLine("y = {0}", y);
            Console.WriteLine("x = {0}", x);
        }

        static int preIncrement(ref int x){
            x += 1;
            return x;
        }
    }
}
