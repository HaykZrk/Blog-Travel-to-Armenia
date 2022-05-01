<?php $title ='dashboard' ?>
<?php ob_start() ?>

<main>
    <?php
        session_start ();
        if ($_SESSION['username'] == 'admin') {
            echo "<h1 style=\"text-align : center; margin: 10px;\">ADMINISTRATION</h1>";
            include_once __DIR__ . '/../model/Connection.php';
            $co = new Connection();
            foreach ($co->recupAllComment() as $value) {
                echo
                '<table class="table-style">
                    
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Article</th>
                            <th>Author</th>
                            <th>Message</th>
                            <th>Valid</th>
                            <th>Options</th>
                            <th>Change</th>
                            <td>To respond</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td data-label="Date">' . $value['Date'] .  '</td>
                            <td data-label="Article">' . $value['Article'] . '</td>
                            <td data-label="Author">' . $value['Author'] . '</td>
                            <td data-label="Message">' . $value['Message'] . '</td>
                            <td data-label="Valid">' . $value['Valid'] . '</td>
                            <td data-label="Options">
                                <form method="post">
                                    <input type="radio" name="optAdmin" id="delete" value="delete">
                                    <label for="delete">Delete</label>

                                    <input type="radio" name="optAdmin" value="valid">
                                    <label for="valid">Valid</label>

                                    <input type="radio" name="optAdmin" value="noValid">
                                    <label type="radio for="noValid">No Valid</label>
                                    <div style="align-items: center; text-align: center;">
                                        <button name="optionsButton" value="' . $value['Id'] . '"' . 'id="optionsButton" class="button-article" type="submit">Active</button>
                                    </div>
                                </form>
                            </td>
                            <td data-label="Change">
                                <form method="post">
                                    <textarea style="font-size: 15px; resize: none;" rows="8" cols="25" maxlength="240" id="comment" name="user_comment" placeholder="Change here !"></textarea>
                                    <div style="align-items: center; text-align: center;">
                                        <button name="changeButton" value="' . $value['Id'] . '"' . 'id="changeButton" class="button-article" type="submit">Change</button>
                                    </div>
                                </form>
                            </td>
                            <td data-label="To respond">
                                <form method="post">
                                    <textarea style="font-size: 15px; resize: none;" rows="8" cols="25" maxlength="240" id="comment" name="admin_comment" placeholder="Respond here !"></textarea>
                                    <div style="align-items: center; text-align: center;">
                                        <button name="respondButton" value="' . $value['Id'] . '"' . 'id="respondButton" class="button-article" type="submit">Respond</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    <tbody>
                </table>';
            }
            $co->optionAdmin();
        }
        else {
            echo '<h1 style="text-align: center; color: red;">YOUR ARE NOT AUTHORIZED TO ACCES THIS PART OF THE SITE</h1>';
        }
    ?>
</main>

<?php $content = ob_get_clean () ?>
<?php include __DIR__.'/layout.php' ?>