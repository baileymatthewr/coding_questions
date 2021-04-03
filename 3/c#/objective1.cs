using System;

namespace objective1 {
    class MainClass {
        static void Main(){
            int x = 0, y = 0;

            Console.WriteLine("Test 1a: Check how x++ works by itself");
            x = 1;
            Console.WriteLine("x = {0}", x);
            x++;
            Console.WriteLine("x = {0}", x);


            Console.WriteLine("Test 1b: Make postIncrement(x) match x++");
            x = 1;
            Console.WriteLine("x = {0}", x);
            x++;
            Console.WriteLine("x = {0}", x);


            Console.WriteLine(
                "Test 2a: Make postIncrement(x) work in the following statement"
            );
            Console.WriteLine("y = x++");
            x = 1;
            y = x++;
            Console.WriteLine("y = {0}", y);
            Console.WriteLine("x = {0}", x);

            Console.WriteLine("y = postIncrement(x)");
            x = 1;
            y = x++;
            Console.WriteLine("y = {0}", y);
            Console.WriteLine("x = {0}", x);
        }

        static int postIncrement(ref int x){
            int tmp = x;
            x += 1;
            return tmp;
        }
    }
}
