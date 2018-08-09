<p>Bonjour !</p>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo strip_tags($_POST['prenom']); ?> !</p>


<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

<p>
Ton message est : <br />
<?php echo $_POST['message']; ?>
</p>

<p>
Tu as choisi le <?php echo $_POST['choix']; ?>
</p>

<p>
La case est cochée ? <?php echo $_POST['case']; ?>
</p>

<p>
Aimes-tu les frites ?
<?php echo $_POST['frites']; ?>
</p>

<pre><?php

var_dump( $_POST );

?></pre>