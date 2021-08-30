<?php
if ($_POST) {
    $name = $_POST['name'];
    $loan = $_POST['loan'];
    $years = $_POST['years'];
    function clc($years, $loan)
    {
        if ($years == 1) {
            return ($loan * 0.1);
        } elseif ($years >= 3) {
            return ($loan * 0.15);
        }
    };
    $gain = clc($years, $loan);
     $loan = $gain + $loan;
     $month = $years * 12 ; 
    $pricepermonth = $loan / $month;
        $msg = $pricepermonth;

    // print_r($_POST);
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 style="text-align: center" class="bg-dark text-white">Clc Your Loaning</h1>
        <form  method="POST" style="text-align: center" action="">
            <br>

            <h5 style="text-align: center" class="">Enter Your Name:</h5>
            <br>
            <input type="text" name="name" value="<?php echo(isset($_POST['name']) ? $_POST['name'] :''); ?>" >
            <br>
            <br>
            <h5 style="text-align: center" class="">Enter The Loan You Need:</h5>
            <br>
            <input type="text" name="loan" value="<?php echo(isset($_POST['loan']) ? $_POST['loan'] :''); ?>">
            <br>
            <br>
            <h5 style="text-align: center" class="">Chose Number Of Years:</h5>
            <br>
            <select class="form-select" id="inputGroupSelect01" name="years" >
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="6">Six</option>
                <option value="7">Seven</option>
                <br>
                <br>
                <input type="submit" name="submit" >
                <br>
                <br>
                <h5 style="text-align: center" class="">result:</h5>
                <br>
                <input type="text" name="result" value="<?php echo (isset($msg) ? $msg : '') ?>">
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>