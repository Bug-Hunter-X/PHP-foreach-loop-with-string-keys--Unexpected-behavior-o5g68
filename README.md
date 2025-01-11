# PHP foreach Loop with String Keys: Unexpected Behavior

This repository demonstrates a common error in PHP related to handling array keys within foreach loops.  When an array has string keys, treating those keys as if they were integer indices can lead to unexpected results or errors.

## The Bug

The provided `bug.php` file showcases the issue. A `foreach` loop iterates through an array with string keys ('a', 'b', 'c'), but the code attempts to treat the keys as integers, leading to incorrect output.

## The Solution

The `bugSolution.php` file offers the correct approach.  It demonstrates how to properly handle string keys within the `foreach` loop, ensuring the code behaves as expected.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter. Observe the output.
3. Run `bugSolution.php` using a PHP interpreter. Compare the output to the output of `bug.php`.