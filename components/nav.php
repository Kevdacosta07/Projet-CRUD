<?php

?>

<nav class="navbar is-responsive is-light" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href=<?="index.php"?>>
            <span class="tag has-background-primary-light is-medium m-2">Mon premier site</span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item <?php if(str_contains($_SERVER["SCRIPT_NAME"], "index")) {echo "is-active";} ?>" href=<?="index.php"?>>Home</a>
            <a class="navbar-item <?php if(str_contains($_SERVER["SCRIPT_NAME"], "blog")) {echo "is-active";} ?>" href=<?="blog.php"?>>Blog</a>
        </div>
    </div>
</nav>