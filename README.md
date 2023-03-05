# Find Max Value Challenge
This repository is the answer for the challenge to find the max value in an array.

### Instructions
You are given three integers x,y and n. Your task is to find the maximum integer k such that 0≤k≤n that kmodx=y , where mod is modulo operation. Many programming languages use percent operator % to implement it.

In other words, with given x,y and n you need to find the maximum possible integer from 0 to n that has the remainder y modulo x.

You have to answer t independent test cases. It is guaranteed that such k exists for each test case.

**Input**

The first line of the input contains one integer t (1≤t≤5⋅104) — the number of test cases. The next t lines contain test cases.
The only line of the test case contains three integers x,y and n (2≤x≤109; 0≤y<x; y≤n≤109).

It can be shown that such k always exists under the given constraints.

**Output**

For each test case, print the answer — maximum non-negative integer k such that 0≤k≤n and kmodx=y. It is guaranteed that the answer always exists.

**Example**

**Input**

7

7 5 12345

5 0 4

10 5 15

17 8 54321

499999993 9 1000000000

10 5 187

2 0 999999999


**Output**

12339

0

15

54306

999999995

185

999999998


####Note
In the first test case of the example, the answer is 12339=7⋅1762+5 (thus, 12339mod7=5). It is obvious that there is no greater integer not exceeding 12345
which has the remainder 5 modulo 7
.

### Explanation
First render the main view, this is in the index.php file, this call the main class with the findMaxValue function and a runCases function.

The main view call the runCases functions with the data in the example before mentioned, this function uses the findMaxValue function to get the Max Value according to the description of the task.

Also, the code has unit test with PHPUnit library and Faker library to create dummy data.

### UnitTest instructions 

1. Install Composer: https://getcomposer.org/download/
2. Run command: ``composer install``
3. Run command: ``./vendor/bin/phpunit tests``

