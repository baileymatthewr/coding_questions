# Lessons from Node
* Tail recursion and iteration run at the same efficiency. If you run the
3rd script many times, you'll see that sometimes one is faster than the other,
but they are clearly running at the same efficiency.
* Non-tail recursion is more than a few orders of magnitude slower. Node does
not try optimizing that on any operating system.
* If you must use recursion, optimize it to tail recursion yourself.
