<link rel="stylesheet" href="main.css">

<h1>Formulaire d'envoi</h1>
<form action="result.php" method="POST">
    <input type="text" name="firstName" placeholder="Nom"><br>
    <input type="text" name="lastName" placeholder="Prénom"><br>
    <input type="text" name="mail" placeholder="E-mail"><br>
    <input type="text" name="phoneNumber" placeholder="Numéro de téléphone"><br>
    <select name="sujet">
        <option value="Annonce">Annonce</option>
        <option value="Réclamation">Réclamation</option>
    </select><br>
    <textarea name="message" placeholder="Ecrivez votre message..."></textarea><br>
    <input type="submit" name="submit">
</form>