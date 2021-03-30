import java.util.Date;
class objective1 {
    public static void main(String[] args){
        long time = time();
        for(int i = 0; i < 40; ++i)
            System.out.println(fib1(i));
        time = time() - time;
        System.out.println("fib1() elapsed time: " + time);

        time = time();
        for(int i = 0; i < 40; ++i)
            System.out.println(fib2(i));
        time = time() - time;
        System.out.println("fib2() elapsed time: " + time);
    }

    public static long time(){
        Date dt = new Date();
        return dt.getTime();
    }

    public static int fib1(int x){
        if(x <= 0)
            return 0;
        if(x == 1)
            return 1;
        return fib1(x-1) + fib1(x-2);
    }

    public static int fib2(int z){
        return fib2helper(0, 1, z-1);
    }

    public static int fib2helper(int x, int y, int z){
        if(z < 0)
            return 0;
        if(z == 0)
            return y;
        return fib2helper(y, x+y, z-1);
    }
}
