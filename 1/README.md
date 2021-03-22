# What is a For-Loop?

## Potential Languages
* For this assignment you must use a language with a concept of a for-loop with
3 arguments of the following form:
```
for(<declaration/initialization>; <stopping_condition>; <increment>){
    //do something
}
```
* This list is in no particular order. They are simply languages that will work
properly with this set of questions.
1. C
2. C++
3. C#
4. D
5. Java
6. JavaScript
7. PHP
* Languages that will not work with this:
1. Go (Golang, if you prefer)
    * distinction between statements and expressions make preincrement and
    postincrement not a thing. i++ looks like postincrement, but according to
    Golang experts, it is simply "increment by 1". There is no concept of the
    preincrement or postincrement expressions.
2. Python
    * for-loops can be range-based, but but the for-loop in Python is really a
    foreach loop. Also preincrement and postincrement operators are not part of
    the language.
3. Ruby
    * Preincrement and postincrement operators are not part of the language.
4. ML / SML
    * This is a functional language (the use of recursion is preferred over
    loops and even then the for-loop doesn't exist in this form)
5. Matlab / Octave
    * This language doesn't have this concept of a for-loop or the notion of
    preincrement and postincrement

## Objecttive 1
Write a for-loop that prints out the numbers 1 through 5.

### Questions
1. Does it theoretically work?
2. Can you explain how it works?
3. When you run it, does it work the way you say?

## Objective 2
Write the same process from Objective 1 with a while-loop instead of a for-loop

### Questions
1. Where does the declaration/initialization occur?
2. Where does the stopping condition occur?
3. Where does the increment occur?

## Objective 3
Write a preincrement, rather than a postincrement in the 3rd parameter of the
for-loop you wrote in Objective 1.

### Questions
1. What will this print out?
2. Are the numbers going to be the same or change? Why?
3. Run the code. Was the output what you expected? Explain.
