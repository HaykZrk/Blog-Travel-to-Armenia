<?php

class GridFlexItem {

    function flexItem ($nameArticleItem, $textArticleItem) {
        include __DIR__ . '/../model/article_database.php';
        echo 
        '<div class="destination-item overlay">
            <img class="item_img" src="img/' . $nameArticleItem . '.jpg" alt="' . $nameArticleItem . ' picture"> 

            <div>
                <span class="name">' . $nameArticleItem . '</span>
            </div>

            <div class="overlay-text">
                <form method="post">
                    <div>
                        <h4>Brief</h4>
                        <p id="brief-text">';
                            echo $textArticleItem; 
                            echo
                            '<br><button class="more" name="' . $nameArticleItem . '"' . '>[More]</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>';
    }

    function gridItem ($nameArticleItem, $textArticleItem) {
        include __DIR__ . '/../model/article_database.php';
        include_once __DIR__ . '/Form.php';
        include_once __DIR__ . '/../model/Connection.php';
        $co = new Connection();
        $form = new Form();
        echo 
        '<div class="test" style="background: linear-gradient(rgba(0,0,0, 0.5), transparent), url(\'img/' . $nameArticleItem . '-article.jpg\'); border: 4px solid #45aad2; box-shadow: -10px -25px 15px #aaa inset;">
            <form method="post"><h3>' . $nameArticleItem . '<button class="more" name="' . $nameArticleItem . '"' . '">[MORE]</button></h3></form>
            <div class="grid">
                <div style="border-radius: 10px;" class="' . $nameArticleItem . ' ' . 'grid-item"></div>

                <div class="grid-item" style=" overflow: auto; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; background-color: #f3f3f3;">
                    <article style="font-size: 1.7rem;">';
                        echo $textArticleItem;
                    echo 
                    '</article>
                </div>
                <div class="grid-item" style="background-color: white; text-align: center; overflow: auto;">';
                    $form->printFormMiniComment($nameArticleItem);
                echo
                '</div>

                <div class="grid-item" style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto;">
                    <h4>All comments </h4>';
                    $co->printAllCommentById($nameArticleItem);
                echo
                '</div>
            </div>
        </div>';
    }
}

?>