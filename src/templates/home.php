<?php $title ='home' ?>
<?php ob_start() ?>

<?php 
    include __DIR__ . '/GridFlexItem.php';
    include __DIR__ . '/../model/article_database.php';
    session_start();
    unset($_SESSION['article']);
?>

<main>
    <section class="welcome">
        <h2>Welcome</h2>
        <a class="button" href="index.php?page=topics">More</a>
        <?php 
        include __DIR__ . '/Form.php';
        $form = new Form();
        
        session_start ();    
        if(!isset($_SESSION['username'])) {
            $form->printFormConnection();
        } else {
            $form->printFormConnected();
            if (isset($_POST['logout'])) {  
                session_unset ();
                if (ini_get ("session.use_cookies")) {
                    $params = session_get_cookie_params ();
                    setcookie(session_name(), '', time() - 3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
                }
                session_destroy();
                session_write_close();
                setcookie(session_name(), '', 0, null, null, false, true);
                session_regenerate_id(true);
                header('Location: index.php?page=home');
            }
        }

        ?>
        </section>

        <section class="welcome_article">
            <h1>GIVE YOUR OPINON ON THE PLACE</h1>

            <div class="destinations-group">
                <?php 
                    $flex = new GridFlexItem();
                    foreach($articleNameBriefArray as $key => $value) {
                        $flex->flexItem($key, $value);
                        if(isset ($_POST[$key])) {
                            session_start ();  
                            $_SESSION['article'] = $key;
                            header('Location: index.php?page=topics');
                        }
                    }
                ?>
            </div>
        </section>
</main>

<?php $content = ob_get_clean () ?>
<?php include __DIR__.'/layout.php' ?>