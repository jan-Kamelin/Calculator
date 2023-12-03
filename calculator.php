```php
<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    return $num1 / $num2;
}

function squareRoot($num) {
    return sqrt($num);
}

function power($base, $exponent) {
    return pow($base, $exponent);
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'add':
            $result = add($num1, $num2);
            break;
        case 'subtract':
            $result = subtract($num1, $num2);
            break;
        case 'multiply':
            $result = multiply($num1, $num2);
            break;
        case 'divide':
            $result = divide($num1, $num2);
            break;
        case 'sqrt':
            $result = squareRoot($num1);
            break;
        case 'power':
            $result = power($num1, $num2);
            break;
        default:
            $result = "Invalid operator";
    }
}
?>
