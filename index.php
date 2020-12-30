<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JustInClicks.com | Internship</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12 d-flex justify-content-center">
            <h1>JustInClicks.com Internship</h1>
        </div><br>

        <div class="col-md-12 d-flex justify-content-center">
            <h4 class="text-danger">Que: Write PHP/Javascript Program/class that will take number as input and print thath number in output.</h4>
        </div>

        <div class="col-md-12 d-flex justify-content-center">
            <h5>Example: 15050 = fifteen thousand fifty etc.</h5>
        </div>
    </div>


    <div class="container-fluid">
        <div class="col-md-4">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="email">Enter Any Number:</label>
                <input type="text" class="form-control" placeholder="Enter Any Number" id="num" name="number">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Print <span><i class="fas fa-print"></i></span> </button>
        </form>
        </div>
    </div><br><br>

    <div class="container">
        <div class="col-md-12">
            <h3 class="text-success">Answer:</h3>
            <h3 class="text-dark" id="ans">  </h3>
        </div>
    </div>

<?php

if(isset($_POST['submit']))
{
    $number = $_POST['number'];
    $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    //echo $number. "=" .$f->format($number);
    ?>
    <script>
        var string = '<?php echo $number. "=" .$f->format($number) ?>';
        document.getElementById("ans").innerText = string;
    </script>
    <?php

}

?>
</body>
</html>


