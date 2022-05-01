<?php

class ArticleContainer {

    function printKhorVirap () {
        include __DIR__ . '/Form.php';
        include_once __DIR__ . '/../model/Connection.php';
        $co = new Connection();
        $form = new Form();
        echo
        '<section class="KhorVirap-article">
            <h2>
                Khor Virap
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    Khor Virap Monastery is the first holy place in Christian Armenia, 
                    located on the site of the former capital of ancient Armenia, artachate.
                    Moses of Khorene recounts in his History of Armenia how King Tiridates IV
                    of Armenia (or Trdat) hunted down and persecuted Christians in the 4th 
                    century. Gregory (Krikor) Loussavoritch, future Gregory the Illuminator, 
                    to be thrown into oblivion (“Virap”) in a pit. It miraculously survived for
                    thirteen years (by the way, this monastery is nicknamed Prison of Saint 
                    Gregory; Khor Virap means "deep well"). When the king, after having martyred
                    Gayané, Hripsime and their companions, fell ill, Grégoire Loussavoritch 
                    appeared as the only one capable of treating him. He heals the king and 
                    converts him to Christianity. Armenia becomes the first Christian country.
                    The catholicos Nerses III Chinanar says the builder had a church built above
                    the pit in the 7th century. What is certain is that the monastery
                    was founded in the 7th century. In the 13th century it was rebuilt 
                    and became famous thanks to its university, founded in 1225 by the 
                    cleric Vardan Areveltsi. Many manuscripts of this time have been 
                    found, which are currently kept in the Matenadaran of Yerevan. Around
                    the 17th century, the monastery buildings deteriorated as Armenia
                    declined economically. It was therefore necessary to consider a
                    reconstruction of the place. From 1666 to April 6, 1696, David 
                    Viraptsi worked there. He rebuilt the Holy Mother of God Church
                    (in Armenian Atvatsatsin) with other buildings that were destroyed
                    by the earthquake of June 4, 1679. These will be rebuilt again by
                    David Viraptsi between the years 1680 and 1695. Khor Virap, very 
                    touristy, is currently classified as a historical monument.
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    The monastery is composed of a main church, Astvatsatsin, but also of another 
                    smaller church, Saint-Georges or chapel Saint-Georges, of a rather simple architectural
                    style. Atvatsatsin has a gavit (a kind of narthex). There are a few frescoes inside the
                    churches, but the interior walls are mostly bare and austere. Several buildings complete
                    these two churches, all surrounded by powerful ramparts.
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                <img style="max-width: 1300px; width: 80%;" src="img/KhorVirap-carte.png">
            </div>

            <div>
                <h3>IV) Gallery</h3>
                <img src="img/KhorVirap-gallery1.jpg">
                <img src="img/KhorVirap-gallery2.jpg">
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("KhorVirap");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>';
                    $co->printAllCommentById("KhorVirap");
            '</div>
        </section>';
        
    }

    function printNoravank () {
        include __DIR__ . '/Form.php';
        include_once __DIR__ . '/../model/Connection.php';
        $co = new Connection();
        $form = new Form();
        echo
        '<section class="Noravank-article">
            <h2>
                Noravank
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    Khor Virap Monastery is the first holy place in Christian Armenia, 
                    located on the site of the former capital of ancient Armenia, artachate.
                    Moses of Khorene recounts in his History of Armenia how King Tiridates IV
                    of Armenia (or Trdat) hunted down and persecuted Christians in the 4th 
                    century. Gregory (Krikor) Loussavoritch, future Gregory the Illuminator, 
                    to be thrown into oblivion (“Virap”) in a pit. It miraculously survived for
                    thirteen years (by the way, this monastery is nicknamed Prison of Saint 
                    Gregory; Khor Virap means "deep well"). When the king, after having martyred
                    Gayané, Hripsime and their companions, fell ill, Grégoire Loussavoritch 
                    appeared as the only one capable of treating him. He heals the king and 
                    converts him to Christianity. Armenia becomes the first Christian country.
                    The catholicos Nerses III Chinanar says the builder had a church built above
                    the pit in the 7th century. What is certain is that the monastery
                    was founded in the 7th century. In the 13th century it was rebuilt 
                    and became famous thanks to its university, founded in 1225 by the 
                    cleric Vardan Areveltsi. Many manuscripts of this time have been 
                    found, which are currently kept in the Matenadaran of Yerevan. Around
                    the 17th century, the monastery buildings deteriorated as Armenia
                    declined economically. It was therefore necessary to consider a
                    reconstruction of the place. From 1666 to April 6, 1696, David 
                    Viraptsi worked there. He rebuilt the Holy Mother of God Church
                    (in Armenian Atvatsatsin) with other buildings that were destroyed
                    by the earthquake of June 4, 1679. These will be rebuilt again by
                    David Viraptsi between the years 1680 and 1695. Khor Virap, very 
                    touristy, is currently classified as a historical monument.
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    The monastery is composed of a main church, Astvatsatsin, but also of another 
                    smaller church, Saint-Georges or chapel Saint-Georges, of a rather simple architectural
                    style. Atvatsatsin has a gavit (a kind of narthex). There are a few frescoes inside the
                    churches, but the interior walls are mostly bare and austere. Several buildings complete
                    these two churches, all surrounded by powerful ramparts.
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                <img style="max-width: 1300px; width: 80%;" src="img/KhorVirap-carte.png">
            </div>

            <div>
                <h3>IV) Gallery</h3>
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("Noravank");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>';
                    $co->printAllCommentById("Noravank");
            '</div>
        </section>';
        
    }

    function printTsakhkadzor () {
        include __DIR__ . '/Form.php';
        $form = new Form();
        echo
        '<section class="Tsakhkadzor-article">
            <h2>
                Tsakhkadzor
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                MAP IMAGE
            </div>

            <div>
                <h3>IV) Gallery</h3>
                IMAGE 
                IMAGE
                ....
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("Tsakhkadzor");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>
                <p style="color: green; font-size: 15px;">
                    
                </p>
            </div>

        </section>';

    }

    function printLakeSevan () {
        include __DIR__ . '/Form.php';
        $form = new Form();
        echo
        '<section class="LakeSevan-article">
            <h2>
                Lake Sevan
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                MAP IMAGE
            </div>

            <div>
                <h3>IV) Gallery</h3>
                IMAGE 
                IMAGE
                ....
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("LakeSevan");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>
                <p style="color: green; font-size: 15px;">
                    
                </p>
            </div>

        </section>';

    }

    function printTatev () {
        include __DIR__ . '/Form.php';
        $form = new Form();
        echo
        '<section class="Tatev-article">
            <h2>
                Tatev
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                MAP IMAGE
            </div>

            <div>
                <h3>IV) Gallery</h3>
                IMAGE 
                IMAGE
                ....
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("Tatev");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>
                <p style="color: green; font-size: 15px;">
                    
                </p>
            </div>

        </section>';

    }

    function printEtchmiadzin () {        
        include __DIR__ . '/Form.php';
        $form = new Form();
        echo
        '<section class="Etchmiadzin-article">
            <h2>
                Etchmiadzin
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                MAP IMAGE
            </div>

            <div>
                <h3>IV) Gallery</h3>
                IMAGE 
                IMAGE
                ....
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("Etchmiadzin");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>
                <p style="color: green; font-size: 15px;">
                    
                </p>
            </div>

        </section>';


    }

    function printGarni () {
        include __DIR__ . '/Form.php';
        $form = new Form();
        echo
        '<section class="Garni-article">
            <h2>
                Garni
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                MAP IMAGE
            </div>

            <div>
                <h3>IV) Gallery</h3>
                IMAGE 
                IMAGE
                ....
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("Garni");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>
                <p style="color: green; font-size: 15px;">
                    
                </p>
            </div>

        </section>';

    }

    function printJermuk () {
        include __DIR__ . '/Form.php';
        $form = new Form();
        echo
        '<section class="Jermuk-article">
            <h2>
                Jermuk
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                MAP IMAGE
            </div>

            <div>
                <h3>IV) Gallery</h3>
                IMAGE 
                IMAGE
                ....
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("Jermuk");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>
                <p style="color: green; font-size: 15px;">
                    
                </p>
            </div>

        </section>';

    }

    function printDilijan () {
        include __DIR__ . '/Form.php';
        $form = new Form();
        echo
        '<section class="Dilijan-article">
            <h2>
                Dilijan
            </h2>

            <div>
                <h3>I) History</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>

                <h3>II) monastic complex</h3>
                <p style="max-width: 1300px; font-size: 20px; border: 4px solid;">
                    TEXT...
                </p>
            </div>

            <div>
                <h3>III) Map</h3>
                MAP IMAGE
            </div>

            <div>
                <h3>IV) Gallery</h3>
                IMAGE 
                IMAGE
                ....
            </div>

            <div>
                <h3>V) Give your opinion / Travel experience</h3>
                <div style="border : 4px solid skyblue; border-radius: 10px; box-shadow: -10px -25px 15px #aaa inset;">';
                    $form->printFormMiniComment("Dilijan");
                    echo
                '</div>
            </div>

            <div style="background-color: white; box-shadow: -10px -25px 15px #aaa inset; border-radius: 15px; padding: 10px; overflow: auto; width: 80%; height: 300px; margin: 20px">
                <h4 style= "margin-top: 20px; color: black;">All Comments</h4>
                <p style="color: green; font-size: 15px;">
                    
                </p>
            </div>

        </section>';
 
    }

    function printMiniAllView() {
        include __DIR__ . '/GridFlexItem.php';
        include __DIR__ . '/../model/article_database.php';
        include_once __DIR__ . '/../model/Connection.php';
        $co = new Connection();
        
        if ($co->acceptComment($_POST['user_name'],$_POST['user_comment'], $_POST['sendButton'])) {
            
            $co->ok_comment($_POST['sendButton'], $_POST['user_name'], $_POST['user_comment']);
        }

        echo 
        '<p style="background-color : rgb(141, 93, 5); font-size: 25px; border: 4px solid;padding: 5px;">
            Discover the tourist places in Armenia and share your travel experience
            on the places already visited.
        </p>';

        $grid = new GridFlexItem();
        foreach($articleNameMiniArray as $key => $value) {
            $grid->gridItem($key, $value);
            if(isset ($_POST[$key])) {
                session_start ();  
                $_SESSION['article'] = $key;
                header('Location: index.php?page=topics');
            }

        }
    }
}
?>