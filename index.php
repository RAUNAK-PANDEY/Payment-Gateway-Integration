<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Bank</title>
     
    <?php include('links.php') ?>

</head>

<body>
    <?php include('navbar.php') ?>
    <section id="home">
        <h1 class="h-primary">Welcome to People Bank</h1>
    
        <br>
        <div class="bg">
            <div class="center">
                <ul type="none">
                 
                 <li class="operations"><a href="transfer.php"><button class="btn">Transfer Money</button></a></li><br><br>
                <li class="operations"><a href="transactionhistory.php"><button class="btn">Transaction History</button></a></li>
                    
                </ul>

            </div>
        </div>
    </section>
    <?php include('footer.php') ?>


</body>
</html>
      