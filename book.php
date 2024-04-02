<html>
    <body>
        <form action="book1.php" method="POST">
            <h3>Select Book Name: </h3>
            <select name="s1">
                <?php
                  $xml=simplexml_load_file("book.xml");
                  if(!$xml)
                    die("File not found");
                  foreach($xml->book as $val)
                  {
                    echo("<option value=$val->bname>$val->bname");
                  }
                ?>
            </select>
            <br><br>
            <input type="submit">
        </form>
    </body>
</html>