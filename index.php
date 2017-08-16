<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <title>Pre-assessment</title>
    </head>
    <body class="container-fluid">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-3"></div>
            <form action="index.php" method="post" class="col-md-6" style="padding: 20px; border: 2px solid black; border-radius: 5px;">
            <div class="form-group">
                <label>Number 1</label>
                <input type="text" class="form-control" name="num1">
            </div>
            <div>
                <label>Number 2</label>
                <input type="text" class="form-control" name="num2">
            </div>
            <div class="text-center">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="oper" value="+" checked> Add
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="oper" value="-"> Subtract
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="oper" value="/"> Divide
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="oper" value="*"> Multiply
                    </label>
                </div>
            </div>
            <input type="submit" class="btn btn-block btn-primary" name="formSubmit" value="CALCULATE"/>
        </form>
        <div class="col-md-3"></div>
        </div>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="text-align: center; padding: 10px;">
            <?php 
            if(isset($_POST['formSubmit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $oper = $_POST['oper'];
                if(empty($num1) || empty($num2)) {
                    echo "Fields should be filled.";
                } else if(!is_numeric($num1) || !is_numeric($num2)) {
                    echo "Inputs should be numeric!";
                } else if(strlen($num1) > 20 || strlen($num2) > 20) {
                		echo "Inputs shall be less than 20 characters.";
                } else {
                    switch ($oper) {
                        case "+":
                            $res = $num1 + $num2;
                            break;
                        case "-":
                            $res = $num1 - $num2;
                            break;
                        case "/":
                            $res = $num1 / $num2;
                            break;
                        case "*":
                            $res = $num1 * $num2;
                            break;
                    }
                    echo "The result is of $num1 $oper $num2 = ". $res;
                }
            }
            ?>
        </div>
        <div class="col-md-3"></div>
        </div>
    </body>
</html>
