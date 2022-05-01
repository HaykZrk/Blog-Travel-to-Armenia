<?php

class Connection {

    private $dbh;
    public function __construct () {
        include __DIR__ . '/../../config/password_database.php';
        try {
            $dsn = 'mysql:host=osr-mysql.unistra.fr; dbname=zarikian';

            $options = 
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $this->dbh = new PDO ($dsn, $user, $password, $options);
            $this->dbh->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection error : ' . $e->getMessage ();
            die ('No connection');
        }
    }
        public function ok_password ($user, $pwd) {
            $request = $this->dbh->prepare('SELECT * FROM users WHERE Email = ? AND Password = ?');
                                     
            $request->bindValue(1, "$user");
            $request->bindValue(2, "$pwd");
            $request->execute();
            $pass = $request->fetchAll();
            
            if ($pass[0]["Email"] == NULL || $pass[0]["Password"] == NULL)
                return FALSE;

            if (($pass[0]["Email"] == $user) && ($pass[0]["Password"] == $pwd))
                return TRUE;
            else
                return FALSE;
        }

        public function acceptComment($userName, $comment, $button) {
            if ($userName == "" || $comment == "") {
                if(isset($button)) {
                    echo 
                    '<div>
                        <h4 style="color: red;">Error message : Please fill in all fields</h4>
                    </div>';
    
                    return FALSE;
                }
            }
            else {
                if (isset($button)) {
                    echo 
                    '<div>
                        <h4 style="color: green;">The comment has been sent successfully</h4>
                    </div>';
                    return TRUE;
                }
            }
        }


        public function ok_comment ($articleName, $userName, $commentArticle) {
            $date = date('d/m/y    h:i:s');
            $zero = 0;
            $sql = "INSERT INTO comments(Article, Date, Author, Message, Valid) VALUES ('$articleName', '$date', '$userName', '$commentArticle', '$zero')";

            $query = $this->dbh->prepare($sql);
            $query->execute();
        } 

        public function recupAllComment () {
            $request = $this->dbh->prepare('SELECT * FROM comments');
            $request->execute();
            $table = $request->fetchAll();
            return $table;
        }

        public function optionAdmin () {
            if (isset($_POST["optionsButton"])) {
                $identifiant = (int)$_POST["optionsButton"];

                if ($_POST["optAdmin"] == "delete") {
                    echo 
                    '<script type="text/javascript">
                        $(document).ready(function() {
                            $(\'#delete\').click(function() {';
                                $sql = "DELETE FROM `comments` WHERE Id = '$identifiant'";
                                $query = $this->dbh->prepare($sql);
                                $query->execute();
                                $sql = "DELETE FROM `answer` WHERE Id = '$identifiant'";
                                $query = $this->dbh->prepare($sql);
                                $query->execute();
                                echo
                            '});
                        });
                    </script>';
                }

                if ($_POST["optAdmin"] == "valid") {
                    $sql = "UPDATE comments SET Valid = 1 WHERE Id = '$identifiant'";  
                    $query = $this->dbh->prepare($sql);
                    $query->execute();  
                }
                else if ($_POST["optAdmin"] == "noValid") {
                    $sql = "UPDATE comments SET Valid = 0 WHERE Id = '$identifiant'";  
                    $query = $this->dbh->prepare($sql);
                    $query->execute();
                }
            }

            if (isset($_POST["changeButton"])) {
                $identifiant = (int)$_POST["changeButton"];

                if (isset($_POST["user_comment"]) && $_POST["user_comment"] != "") {
                    $comment = $_POST["user_comment"];
                    $sql = "UPDATE comments SET Message = '$comment' WHERE Id = '$identifiant'";  
                    $query = $this->dbh->prepare($sql);
                    $query->execute();
                }
            }

            if (isset($_POST["respondButton"])) {
                $identifiant = (int)$_POST["respondButton"];
                $author = "Admin";

                if (isset($_POST["admin_comment"]) && $_POST["admin_comment"] != "") {
                    $request2 = $this->dbh->prepare('SELECT * FROM answer WHERE Id = ?');
                    $request2->bindValue(1, "$identifiant");
                    $request2->execute();
                    $tableAnswer = $request2->fetchAll();
                    $comment = $_POST["admin_comment"];

                    if ($tableAnswer[0]["Id"] != "") {
                        $sql = "UPDATE answer SET Answer = '$comment' WHERE Id = '$identifiant'"; 
                        $query = $this->dbh->prepare($sql);
                        $query->execute(); 
                    }
                    else {
                        $date = date('d/m/y    h:i:s');
                        $sql = "INSERT INTO answer(Id, Date, Author, Answer) VALUES ('$identifiant', '$date', '$author', '$comment')";
                        $query = $this->dbh->prepare($sql);
                        $query->execute();
                    }
                }
            }
        }

        public function printAllCommentById ($articleName) {
            $request = $this->dbh->prepare('SELECT * FROM comments WHERE Article = ? AND Valid = ?');
            $request->bindValue(1, "$articleName");
            $request->bindValue(2, 1);
            $request->execute();
            $table = $request->fetchAll();

            foreach($table as $value) {
                $identifiant = (int)$value["Id"];
                $request2 = $this->dbh->prepare('SELECT * FROM answer WHERE Id = ?');
                $request2->bindValue(1, "$identifiant");
                $request2->execute();
                $tableAnswer = $request2->fetchAll();
                echo 
                '<div style="background-color: green; border-radius: 5px; overflow: auto; word-wrap: break-word; margin: 10px;">
                    <h5>Comment</h5>
                    <p style="font-size: 15px; margin: 5px;">
                        <br>'
                        . $value["Message"] .
                    '</p>
                    Date  :  ' . $value["Date"] . '  ' . '  Author :  ' . $value["Author"] .
                    '<br>';
                    if ($tableAnswer[0]["Answer"] != "") {
                        echo 
                        '<div style="background-color: rgb(141, 93, 5); border-radius: 5px; overflow: auto; word-wrap: break-word; margin: 10px;">
                            <h5>Answer</h5>
                            <p style="font-size: 15px; margin: 5px;">
                                <br>'
                                . $tableAnswer[0]["Answer"] . 
                            '</p>
                            Date  :  ' . $tableAnswer[0]["Date"] . '  ' . '  Author :  ' . $tableAnswer[0]["Author"] .
                            '<br>
                        </div>';
                    }
                    echo 
                '</div>';
            }
        }  
}

?>