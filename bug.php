function foo(array $arr) {
  foreach ($arr as $key => $value) {
    // Accessing $key might cause an error if the array is not numerically indexed
    echo "Key: " . $key . ", Value: " . $value . "\n";
  }
}