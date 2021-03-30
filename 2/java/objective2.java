class objective1 {
    public static void main(String[] args){
        for(int i = 0; i < 30; ++i){
            System.out.println(fib(i));
        }
    }

    public static int fib(int x){
        if(x <= 0)
            return 0;
        if(x == 1)
            return 1;
        return fib(x-1) + fib(x-2);
    }
}
