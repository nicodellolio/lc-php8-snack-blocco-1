<?php 

$bkt_games = [
    "HomeTeam" => "Olimpia Milano",
    "GuestTeam" => "Cantù",
    "HomeScore" => "55",
    "GuestScore" => "60"
];

echo ($bkt_games["HomeTeam"] . " - " . $bkt_games["GuestTeam"]);
echo (" | ");
echo ($bkt_games["HomeScore"] . " - " . $bkt_games["GuestScore"]);

?>