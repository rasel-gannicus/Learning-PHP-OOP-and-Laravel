<?php 
include 'functions.php';
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>
<body class="bg-gray-500 min-h-[50vh] flex flex-col justify-center items-center">
    <form action="" method="POST">
    <table>
        <tr class="">
            <td class="pe-10 py-5">Number 1: </td>
            <td><input type="number" value="<?php echo htmlspecialchars($num1); ?>" name="number1" class="bg-white" /></td>
        </tr>
        <tr>
            <td class="pe-10 py-5">Number 2: </td>
            <td><input type="number" name="number2" value="<?php echo htmlspecialchars($num2); ?>" class="bg-white" /></td>
        </tr>
        <tr>
            <td class="pe-10 my-10"></td>
            <td><input type="submit" name="calculateInput" value="calculate" class="bg-gray-200 p-2 rounded-lg"></input></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['calculateInput'])){
        if(empty($num1) || empty($num2)){
            echo '<span style="color:red">No value provided</span>';
        }
        $calculationNew = new calculate() ;
        // $calculationNew->add($num1, $num2) ; 
        // $calculationNew->sub($num1, $num2) ; 
        // $calculationNew->multi($num1, $num2);
        // $calculationNew->division($num1, $num2);
        $calculationNew->all($num1,$num2);
    }
?>