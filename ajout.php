<?php
include "./header.php";
include "./nav.php";
include "./connexiondb.php";
if(isset($_POST['titre'],$_POST['contenue'])){
    if(!empty($_POST['titre']) AND !empty($_POST['contenue'])){
        $contenue = htmlspecialchars($_POST['contenue']);
        $titre = htmlspecialchars(($_POST['titre']));

        $ins = $pdo ->prepare('INSERT INTO articles (titre,contenue,date_ajout) VALUES (?,?,NOW())');
        $ins -> execute(array($titre , $contenue));
        $message = "Votre article a bien ete poste ";

    }
    else{
        $message = "veuillez remplir tous les champs ";
    }
}

?>
<section class="banner"></section>
<h1>Bienvenue dans la section d'ajout </h1>
<form method="POST">
    <input type ="text" name="titre" placeholder="Titre"></br>
    <textarea name="contenue"placeholder="Contenu de l article"></textarea>
    <input type="submit" value="Envoyer l'article">
</form>
</br>
<?php if(isset($message)){ echo $message;}?>
<?php
include "./footer.php";
?>

