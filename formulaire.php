<p>

    Cette page ne contient que du HTML.<br />

    Veuillez taper votre prénom :

</p>


<form action="cible.php" method="post">

    <input type="text" name="prenom" />

<br />
<br />

    <textarea name="message" rows="8" cols="45">
Votre message ici.
    </textarea>

<br />
<br />

    <select name="choix">

        <option value="choix1">Choix 1</option>

        <option value="choix2">Choix 2</option>

        <option value="choix3">Choix 3</option>

        <option value="choix4">Choix 4</option>

    </select>

<br />
<br />

    <input type="hidden" name="case" value="0" />
    <input type="checkbox" name="case" id="case" value="1" /> <label for="case">Ma case à cocher</label>

<br />
<br />

Aimez-vous les frites ?

    <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>

    <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>

<br />
<br />

<input type="submit" value="Valider" />

</form>

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">

    <p>Formulaire d'envoi de fichier<br />

    <input type="file" name="monfichier" /><br />

    <input type="submit" value="Envoyer le fichier" /></p>

</form>