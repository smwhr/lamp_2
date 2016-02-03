<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BlackJack</title>
  <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
</head>
<body>

<h3>Vos cartes</h3>
<ul class="card_list">
<?php 
  $hand = $state->player->getHand();
  foreach($hand as $card):
?>
  <li><?php echo $card;?></li>
 <?php 
  endforeach;
  ?>
 </ul>

<form id="play_form" method="POST" action="./play.php">

  <input type="radio"
         name="player_action" 
         value="hit" > Hit <br>
  <input type="radio"
         name="player_action" 
         value="stand" > Stand <br>
  <input type="submit" value="go">
</form>
<form method="POST" action="index.php">
<input type="submit"
         name="reset" 
         value="reset" >
</form>
<script>
$(document).on('submit', '#play_form', function(e){
  console.log($(this).serialize());
  $.post('./play.php',$(this).serialize(),function(data){
    if(typeof(data.error) == "undefined"){
      $('.card_list').append("<li>"+data.card_name+"</li>");
    }else{
      alert(data.error);
    }
  },'json');

  e.preventDefault();
})
</script>
  
</body>
</html>