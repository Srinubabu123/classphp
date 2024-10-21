<?php
function findSecondAndSecondLast($array) {
    $uniqueArray = array_unique($array);

    sort($uniqueArray);

    if (count($uniqueArray) < 2) {
        return "Array doesn't have enough elements.";
    }

    $second = $uniqueArray[1];

    $secondLast = $uniqueArray[count($uniqueArray) - 2];

    return [
        'second' => $second,
        'second_last' => $secondLast
    ];
}

$array = ["apple", "banana", "cherry", "banana", "apple", "date", "cherry", "fig","graph","cherry"];
print_r(array_flip($array));
$result = findSecondAndSecondLast($array);

echo "Second string: " . $result['second'] . "<br>";
echo "Second last string: " . $result['second_last'] . "\n";
?>
