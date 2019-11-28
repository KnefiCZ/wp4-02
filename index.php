<?php 
    require_once  "Debitor.php";

$debitors = array(
    //              id, firstname,  lastname,   description,      amount,   deadline
        new Debitor( 1,  "David",   "Mareš",  "Dluží dost dlouho", 100,       "Teď" ),
        new Debitor( 2,  "Null",    "Null",   "Bruh",              500,       "24.12.2019"),
        new Debitor( 2,  "Counter", "Strike", "Global",            900,       "31.1.2002")
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Debitor_list</title>
        <style>
            body {
                font-family : Arial;
            };
        </style>
</head>
<body>
<p><b>DEBITOR,  FIRST AND LAST NAME, DESCRIPTION, AMOUNT, DEADLINE.</b></p>
    <?php 
        foreach ($debitors as $debitor) {
            ?>
            
                <p> Debitor : <?php echo $debitor->getId();?>,
                            <?php echo $debitor->getFirstName() . " " . $debitor->getLastName();?>,
                            <?php echo $debitor->getDescription();?>,
                            <?php echo $debitor->getAmount();?>,
                            <?php echo $debitor->getDeadline();?>.
                          </p>

            <?php
        }
    ?>
</body>
</html>