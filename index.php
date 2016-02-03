<?php

require_once("model/GameState.php");
session_start();


if(!isset($_SESSION['game_state'])){
  $state =  new GameState("Julien");
  $_SESSION['game_state'] = $state;
}else{
  $state = $_SESSION['game_state'];
}

include("view/home.php");





