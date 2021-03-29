from datetime import datetime

def fib1(x):
    if x <= 0:
        return 0
    if x == 1:
        return 1
    return fib1(x-1) + fib1(x-2)

def fib2(z):
    return fib2helper(0, 1, z-1)

def fib2helper(x, y, z):
    if z < 0:
        return 0
    if z == 0:
        return y
    return fib2helper(y, x+y, z-1)

def current_time():
    return datetime.now().microsecond

def fib3(z):
    x = 0
    y = 1
    tmp = 0
    if z <= 0:
        return 0
    while z > 0:
        tmp = x
        x = y
        y += tmp
        z -= 1
    return y

time = current_time()
for x in range(30):
    print('{}'.format(fib1(x)))
time = current_time() - time
print('fib1() elapsed time {}'.format(time))

time = current_time()
for x in range(30):
    print('{}'.format(fib2(x)))
time = current_time() - time
print('fib2() elapsed time {}'.format(time))

time = current_time()
for x in range(30):
    print('{}'.format(fib3(x)))
time = current_time() - time
print('fib2() elapsed time {}'.format(time))


