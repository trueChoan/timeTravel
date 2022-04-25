<?php



$destinationTime = new DateTime('', new DateTimeZone('Europe/Paris'));
$destinationTime->setTimestamp('1808662800');

$presentTime = new DateTime();
$presentTime->setTimezone(new DateTimeZone('Europe/Paris'));

$interval = $presentTime->diff($destinationTime);
$timeTravel = ($interval->format('%r%a') * 1440);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Voyage futur</title>
</head>

<body>
    <h1>Destination Time : </h1>
    <p><?= $destinationTime->format('M d Y A g:i'); ?></p>

    <h1>Present time </h1>
    <p><?= $presentTime->format('M d Y A g:i'); ?></p>

    <h2>Interval Jump is :</h2>
    <p class="interval"> <?= $interval->format('%r%y years, %m months, %d days, %h hours, %i minutes'); ?></p>

    <p>Le voyage durera <strong><?= $timeTravel . ' minutes'; ?></strong>. <br>
        Il vous faudra <strong> <?= ceil($timeTravel / 10000); ?> </strong> Litres de carburant</p>

</body>

</html>