# Understanding pre-increment and post-increment

Granted that the language has a concept of both a pre-increment and
post-increment, there is a lot that you can learn from how these two operators
work. This series of questions has to do with their function, use-cases, and
implications of implementation.

## Objective 1: Consider a simple operation: **x++;** How does it work?

### Questions
1. Write a function "postIncrement(int)" that takes x as a parameter and
accomplishes the same thing.
2. What must occur for it to function the same as that statement?
3. Does anything change in your function implementation if the statement is
modified to be **int y = x++;**?

## Objective 2: Consider a simple operation: **++x;** How does it work?

### Questions
1. Write a function "preIncrement(int)" that takes x as a parameter and
accomplishes the same thing.
2. What must occur for it to function the same as that statement?
3. Does anything change in your function implementation if the statement is
modified to be **int y = ++x;**?

## Objective 3: Determine which operation is faster: pre or post-increment

### Questions
1. Based on your implementations of the previous functions, is there a clear
winner, in terms of operation speed?
2. How can you prove the difference in operation speed?
3. Was your prediction correct? Do you understand why the outcome appears as it
does?
