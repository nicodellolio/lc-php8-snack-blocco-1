<?php 

$bkt_games = [
    "HomeTeam" => "Olimpia Milano",
    "GuestTeam" => "Cantù",
    "HomeScore" => "55",
    "GuestScore" => "60"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Score</title>
</head>
<style>
    div.table{
        margin: auto;
        text-transform: uppercase;
        background-image: url('./png-clipart-orange-basket-ball-illustration-basketball-basketball-sport-orange-thumbnail.png');
        background-size: 100%;
        background-repeat: no-repeat;
        background-color: orange;
        display: flex;
        gap: .5rem;
        justify-content: center;
        width: 700px;
        height: 400px;
        border-radius: 50px
    }
    .names, .score{
        display: flex;
        gap: .5rem;
        align-items: center
    }
    .names div, .score div{
        background-color: #fff;
        height: fit-content;
        padding: 1rem;
        font-size: 1.5rem
    }
    .score div{
        font-weight: bolder
    }

</style>
<body>

<div class="table">
    <div class="names">
        <div class="home-name">
            <?php echo ($bkt_games["HomeTeam"]) ?>
        </div>
        <span>-</span>
        <div class="guest-name">
            <?php echo ($bkt_games["GuestTeam"]); ?>
        </div>
        <span>|</span>
    </div>
    <div class="score">
        <div class="home-score">
            <?php echo ($bkt_games["HomeScore"]) ?>
        </div>
        <span>-</span>
        <div class="guest-score">
            <?php echo ($bkt_games["GuestScore"]) ?>
        </div>
    </div>
</div>

</body>
</html>