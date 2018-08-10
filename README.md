# FizzBuzz

## Setup

1. Install php7 and tools  
`sudo apt-get install php composer git`
2. Checkout the project  
`git clone git@github.com:remmel/fizzbuzz.git`  
3. Install dependencies  
`cd fizzbuzz`  
`composer install`  
4. Run test
`vendor/bin/phpunit`

## Develop FizzBuzz
The objective is to write a program that prints the numbers from 1 to 100. 
But for multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz"  
Steps :
1. Implements the `IFizzBuzz` interface. Do not forget to create a Unit Test.
2. Update the `test.php` file in order to print number from 1 to 100 (to run `php test.php`).