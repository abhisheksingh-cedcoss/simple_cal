<!DOCTYPE html>

<head>
	<title>Simple Calculator in PHP</title>
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
    }
}

?>

<body>
    <div >
	<h1>Simple Calculator</h1>
	  <form action="" method="post" >
            <p>
                <label for="first_num">First number</label>
                <input type="number" name="first_num"  value="<?php echo $first_num; ?>" />
            </p>
            <p>
                <label for="second_num">Second number</label>
                <input type="number" name="second_num" value="<?php echo $second_num; ?>" />
            </p>
            <p>
                <label for="result">Result</label>
                <input type ="text" name="result" value="<?php echo $result; ?>"> 
            </p>
            <input type="submit" name="operator" value="+" />
            <input type="submit" name="operator" value="-" />
            <input type="submit" name="operator" value="*" />
            <input type="submit" name="operator" value="/" />
	  </form>
    </div>
</body>
</html>