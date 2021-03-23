# Lessons from D
* Tail recursion and iteration run at nearly the same efficiency. If you run
the 3rd script many times, you'll see that there is about a 3 ms difference in
runtimes.
* Tail recusion happens to be faster than iteration in the case of the d
language.
* Non-tail recursion is more than a few orders of magnitude slower. D does
not try optimizing that on any operating system.
* If you need to use a recursive algorithm, use tail recursion. It is the
fastest way to go.
