<?php
//echo exec('whoami');  // _www
phpinfo();
try {
    /*** connect to SQLite database ***/
    $dbh = new PDO("sqlite:/Users/andy/git/github/qr-cover/database/database.sdb");
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    exit();
    }
    if ($_GET["n"] && $_GET["a"]) {
      $insert = $dbh->prepare('SELECT Name FROM Events');
      $insert->execute();
      $result = $insert->fetchAll();
      foreach($result as $row) {
        echo "Row:" . $row["Name"] . "<BR>";
      }

      $dbh->exec('INSERT INTO Events(Name, Assignment) VALUES($_GET["n"],$_GET["a"])');
      
      echo "[Done]";
//      $insert = $dbh->prepare('INSERT INTO Events(Name, Assignment) VALUES(:name,:assignment)');
//      $insert->execute(array('name'=>$_GET["n"],'assignment'=>$_GET["a"]));
//      echo "[Added " . $_GET["n"] . " to " . $_GET["a"] . "]\n";
    }

//    phpinfo();
?>

