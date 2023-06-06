<?php
$title = "Associa - Blog";
include "components/header.php";
include "components/nav.php";

require_once "db.php";
require_once "utils/tools.php";

//
$sql = "SELECT * FROM blog ORDER BY 'created_at' DESC";
$req = $db->query($sql);
$users = $req->fetchAll();

?>

    <section class="hero is-info has-text-centered">
        <div class="hero-body">
            <p class="title">
                Blog
            </p>
            <p class="subtitle">
                Blog subtitle
            </p>
        </div>
    </section>

<section class="is-flex">
    <?php foreach ($users as $user)
{
    $title = $user->title;
    $content = shortContent(strip_tags($user->content), 200);
    $date = $user->created_at;

    echo <<<HTML
    <div class="card m-4" style="width: 33%; height: fit-content">
        <header class="card-header">
            <p class="card-header-title">
                $title
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                $content
                <br>
                <i>$date</i>
            </div>
        </div>
        <footer class="card-footer">
            <a href="post.php?id=$user->id" class="button is-light is-warning card-footer-item">Voir plus</a>
        </footer>
    </div>
HTML;

}
?>
</section>

<?php
include "components/footer.php";


?>