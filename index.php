<?php
include('db-connect.php');

if(isset($_POST) && !empty($_POST)) {
    $sql = "INSERT INTO shoutbox (username, comment, active) 
            VALUES(:username, :comment, :active)";
    $result = $conn->prepare($sql);
    $res = $result->execute(
        array(
            ':username' => $_POST['username'],
            ':comment' => $_POST['comment'],
            ':active' => 1
        )
    );

    if($res) {
        $msg = "Ny kommentar!";
    } else {
        $msg = "Error! Nånting gick fel...";
    }

    header('Location:index.php');
}

$sql_select = "SELECT * FROM shoutbox ORDER BY time DESC";
$stmt = $conn->query($sql_select);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shoutbox</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="username">
            <br>
            <br>
            <textarea rows="5" name="comment"></textarea>
            <br>
            <br>
            <input type="submit" placeholder="Comment!">
            <br>
            <br>
        </form>

        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <div style="background-color: green; color: #fff; padding: 5px; margin: 5px; border-radius: 30px;">
                <h4>Username: <?php echo $row['username']?></h4>
                <?php if($row['comment'] != '') {?>
                    <p>Comment: <?php echo nl2br($row['comment'])?></p>
                <?php } else {?>
                <p>Comment: ingen kommentar</p>
                <?php }?>
                <p style="color: #aaa;">Time: <?php echo $row['time']?></p>
            </div>
        <?php } ?>
    </body>
</html>
