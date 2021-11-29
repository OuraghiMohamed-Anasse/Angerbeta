<?php
include "./header.php";
include "./nav.php";
include "./connexiondb.php";
if(isset($_GET['id']) and !empty($_GET['id'])) {
    $get_id = htmlspecialchars($_GET['id']);

    $article= $pdo->prepare('SELECT * FROM articles WHERE id = ?');
    $article->execute(array($get_id));
    if($article->rowCount() == 1 ){
        $article = $article->fetch();
        $titre = $article->titre;
        $contenue = $article->contenue;
    }
    else{
        die("cette articles n existe pas ");
    }
}else{
    die('erreur');
}
?>

<section class="banner"></section>

<h1><?= $titre ?></h1>
<h1><?= $contenue ?></h1>
<?php
include "./footer.php";

?>
