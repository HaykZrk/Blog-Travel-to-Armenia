<?php
include_once __DIR__ . '/../templates/ArticleContainer.php';

class Article {

    public function printArticleContainerId($numArticle) {
        include __DIR__ . '/article_database.php';
        $contentArticle = new ArticleContainer();
        if($numArticle  == "KhorVirap") 
            $contentArticle->printKhorVirap();
        else if ($numArticle == "Noravank")
            $contentArticle->printNoravank();
        else if ($numArticle == "Tsakhkadzor")
            $contentArticle->printTsakhkadzor();
        else if ($numArticle == "LakeSevan")
            $contentArticle->printLakeSevan();
        else if ($numArticle == "Tatev")
            $contentArticle->printTatev();
        else if ($numArticle == "Etchmiadzin")
            $contentArticle->printEtchmiadzin();
        else if ($numArticle == "Garni")
            $contentArticle->printGarni();
        else if ($numArticle == "Jermuk")
            $contentArticle->printJermuk();
        else if ($numArticle == "Dilijan")
            $contentArticle->printDilijan();
    }

    public function printMiniAllView() {
        $contentArticle = new ArticleContainer();
        $contentArticle->printMiniAllView();
    }

}