# PHP foreach Loop Key Access Issue

This code demonstrates a potential issue when using foreach loops in PHP to iterate over arrays that are not numerically indexed.  Accessing the `$key` variable in such cases might lead to unexpected behavior or errors.

## Bug

The `bug.php` file contains a function that iterates through an array using a `foreach` loop. If the array is associative (not numerically indexed), accessing the `$key` variable might not give the expected result because it'll return the key of the array, which can be a string.