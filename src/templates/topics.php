<?php $title ='topics' ?>
<?php ob_start() ?>

<main>
    <?php
        session_start ();
        include __DIR__ . '/../model/Article.php';
        $article = new Article ();
        if (isset($_SESSION['article'])) {
            $article->printArticleContainerId($_SESSION['article']);
            session_start();
            unset($_SESSION['article']);
        }
        else {
            $article->printMiniAllView();
        }
    ?>
</main>

<?php $content = ob_get_clean () ?>
<?php include __DIR__.'/layout.php' ?>