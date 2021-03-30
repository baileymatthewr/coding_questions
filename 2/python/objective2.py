def fib1(x):
    if x <= 0:
        return 0
    if x == 1:
        return 1
    return fib1(x-1) + fib1(x-2)

for x in range(30):
    print('{}'.format(fib1(x)))
