```php
<?php
$myArray = array("a" => 1, "b" => 2, "c" => 3);

foreach ($myArray as $key => $value) {
  // Correct approach: Use the string key directly.
  echo "Element with key '" . $key . "' has value " . $value . "\n";
}
?>
```

This corrected version explicitly handles the string keys, preventing any errors or unexpected results.