<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"></meta>
        <title>CSMUH CRS Cancer Database</title>
        <link rel="stylesheet" href="styles.css" />
    </head>

    <body>
        <h1>CSMUH CRS Cancer Database</h1>
        <hr/>
        <?php
        session_start();
        echo "Welcome ";
        echo  $_SESSION['user_id'];
        echo "!<br/>";
        ?>
        
        <button type="button" onclick="window.open('insert.html', '_blank')">新增紀錄</button>
        <br/>
        <button type="button" onclick="window.open('check.php', '_blank')">查看所有紀錄</button>
        <br/>
        <form method="post" action="modify.php" target="_blank">
          <span>Chart : </span>
          <input type="text" name="Chart" size="12" autocomplete="off" required>
          <input type="submit" value="查詢"/>
        </form>
    </body>
</html>