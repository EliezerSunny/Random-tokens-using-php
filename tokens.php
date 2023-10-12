$randomIntegers = [];

for ($i = 0; $i < 4; $i++) {
    $randomIntegers[] = rand(1000, 9999) . "-" . rand(1000, 9999) . "-" . rand(1000, 9999) . "-" . rand(1000, 9999) . "-" . rand(1000, 9999);
}

// $randomIntegers now contains an array of 4 random 4-digit integers
