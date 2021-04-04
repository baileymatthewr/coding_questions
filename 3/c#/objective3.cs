using System;

namespace objective1 {
    class MainClass {
        public const int TIMES = 10000000;
        static void Main(){
            int i = 0, x = 0;
            long time;

            Console.WriteLine(
                "Intuitively, pre-increment seems faster than post-increment" +
                " because it's one less step."
            );

            Console.WriteLine("Test 1: pre-increment {0} times", TIMES);
            x = 0;
            time = theTime();
            for(i = 0; i < TIMES; ++i)
                preIncrement(ref x);
            time = theTime() - time;
            Console.WriteLine("Elapsed Time: {0}", time);

            Console.WriteLine("Test 2: ++x {0} times", TIMES);
            x = 0;
            time = theTime();
            for(i = 0; i < TIMES; ++i)
                ++x;
            time = theTime() - time;
            Console.WriteLine("Elapsed Time: {0}", time);


            Console.WriteLine("Test 3: post-increment {0} times", TIMES);
            x = 0;
            time = theTime();
            for(i = 0; i < TIMES; ++i)
                postIncrement(ref x);
            time = theTime() - time;
            Console.WriteLine("Elapsed Time: {0}", time);

            Console.WriteLine("Test 4: x++ {0} times", TIMES);
            x = 0;
            time = theTime();
            for(i = 0; i < TIMES; ++i)
                x++;
            time = theTime() - time;
            Console.WriteLine("Elapsed Time: {0}", time);


        }

        static int preIncrement(ref int x){
            x += 1;
            return x;
        }

        static int postIncrement(ref int x){
            int tmp = x;
            x += 1;
            return tmp;
        }

        static long theTime(){
            DateTimeOffset now = DateTimeOffset.UtcNow;
            return now.ToUnixTimeMilliseconds();
        }

    }
}
