<?php

require_once("model/GameState.php");
session_start();

if(!isset($_POST['player_action'])){
  echo json_encode(["error" => "no action !"]);
  exit;
}
if(!isset($_SESSION['game_state'])){
  echo json_encode(["error" => "no game !"]);
  exit;
}

$state = $_SESSION['game_state'];

if($_POST['player_action'] == "hit"){
    $newCard = $state->dealToPlayer();
}

echo json_encode(["card_name" => $newCard->__toString()]);
exit;