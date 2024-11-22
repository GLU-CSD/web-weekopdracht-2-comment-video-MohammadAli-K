<?php
include("config.php");
include("reactions.php");

$getReactions = Reactions::getReactions();
//uncomment de volgende regel om te kijken hoe de array van je reactions eruit ziet
// echo "<pre>".var_dump($getReactions)."</pre>";

if(!empty($_POST)){

    //dit is een voorbeeld array.  Deze waardes moeten erin staan.
    $postArray = [
        'name' => $_POST['naam'],
        'email' => $_POST['email'],
        'message' => $_POST['commentaar']
    ];

    $setReaction = Reactions::setReaction($postArray);

    if(isset($setReaction['error']) && $setReaction['error'] != ''){
        prettyDump($setReaction['error']);
    }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube remake</title>
</head>
<body>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=twI61ZGDECBr4ums" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <h2>Hieronder komen reacties</h2>
    <p>Maak hier je eigen pagina van aan de hand van de opdracht</p>

    <form action="" method="POST">


<fieldset>
<label
 for="naam">Naam <input type="text" name="naam" id="naam" placeholder="Hier komt de naam" required>
</label><br>
<label
 for="email">Email <input type="email" name="email" id="email" placeholder="Hier komt de email" required >
</label><br>
<label for="commentaar">
    <textarea name="commentaar" id="commentaar" rows="3" cols="10" placeholder="Laat een leuk bericht achter..."></textarea>
</label>
</fieldset>

</form>

</body>
</html>

<?php
$con->close();
?>

<!-- <div aria-required="">
    naam: <input type="text" name="naam" placeholder="vul hier je naam in">
</div>

<div>
    email: <input type="text" name="email" placeholder="vul hier je email in">
</div>

<div>
    <textarea name="commentaar" cols="30" rows="10" placeholder="vul hier een bericht..."></textarea>
</div>
<input type="submit" value="verzenden"> -->