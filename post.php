<?php
$title = "test";
if (!isset($_GET['id']))
{
    header("location:blog.php");
    exit();
}

require_once "db.php";

$sql = "SELECT * FROM blog WHERE id = :id";
$req = $db->prepare($sql);
$req->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
$req->execute();
$article = $req->fetch();

$title = $article->title;

require_once "components/header.php";

?>

<section class="is-flex is-justify-content-center is-align-content-center">
    <div class="card m-5" style="width: 80%; height: fit-content">
        <header class="card-header">
            <p class="card-header-title">
                <?= strip_tags($article->title) ?>
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <?= strip_tags($article->content) ?>
                <br>
                <i><?= strip_tags($article->created_at) ?></i>
            </div>
        </div>
        <footer class="card-footer">
            <a href="blog.php" class="button is-light is-danger card-footer-item">Retour</a>
        </footer>
    </div>
</section>