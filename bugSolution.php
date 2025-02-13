function foo(array $arr) {
  foreach ($arr as $key => $value) {
    // Check if the key is numeric before using it
    if (is_numeric($key)) {
      // Using $key will be safe here 
      echo "Key: " . $key . ", Value: " . $value . "\n";
    } else {
      // Handle non-numeric keys appropriately (e.g., print the key as a string)
      echo "Key (string): " . $key . ", Value: " . $value . "\n";
    }
  }
} 