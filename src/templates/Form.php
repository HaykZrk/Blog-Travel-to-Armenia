<?php

class Form {

    public function printFormMiniComment($valueButton) {
        echo
        '<form method="post">
            <div>
                <h4>Name* :</h4>
                <input type="text" id="name" name="user_name">
            </div>

            <div>
                <h4>Comment* :</h4>
                <textarea style="font-size: 15px; resize: none;" rows="8" cols="25" maxlength="240" id="comment" name="user_comment"></textarea>
            </div>
            <div>
                <button name="sendButton" value="' . $valueButton . '"' . 'id="sendComment" onclick="msgSendError()" class="button-article" type="submit">Send</button>
                <h4>* required</h4>
            </div>
        </form>';
    }

    public function printFormConnection() {
        echo
        '<form  method="post" class="login">
            <h2>Connection</h2>
                <div class="input">';
                    echo
                    '<div class="reseauContent">
                        <a href="https://fr-fr.facebook.com/" class="social"><img src="img/Facebook.png" alt="Facebook-item" /><div class="fond_facebook"></div></a>
                        <a href="https://www.instagram.com/?hl=fr" class="social"><img src="img/Instagram.png" alt="Intagram-item" /><div class="fond_instagram"></div></a>
                        <a href="https://twitter.com/?lang=fr" class="social"><img src="img/Twitter.png" alt="Twitter-item" /><div class="fond_twitter"></div></a>
                    </div>';
                    if (isset($_POST['email']) || isset($_POST['pass']) || isset($_POST['emailError']) || isset($_POST['passError'])) {
                        echo 
                        '<input style="background-color: rgba(255,0,0,0.6);" id="emailIncorrect"  type="email" name="emailError" size="45" maxlength="40" required placeholder="Email">
                        <input style="background-color: rgba(255,0,0,0.6);" id="passwordIncorrect" type="password" name="passError" size="25" maxlength="20" required placeholder="Password">
                        <h5 id="connectionFail" style="color: red;">incorrect password or email</h4>';
                        echo '<script src="js/verifForm.js"></script>';
                    } else {
                        echo 
                        '<input name="email" type="email" size="45" maxlength="40" required placeholder="Email">
                        <input name="pass" type="password" size="25" maxlength="20" required placeholder="Password">';
                    }
                echo 
                '</div>';
        echo
        '<div>
            <button class="button login_button" onclick="msgConnectionError()" value="msgConnectionError" type="submit">Login</button>
        </div>
        </form>';
    }

    public function printFormConnected() {
        echo 
        '<form  method="post" class="login">
            <h2>YOU ARE CONNECTED</h2>
            <div align="center">
                <button name="logout" class="button" type="submit">Logout</button>
            </div>
        </form>';
    }

}