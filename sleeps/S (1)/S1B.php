<html>
    <body>
        <table border=1>
            <tr>
            <th>roll</th>
            <th>name</th>
            <th>address</th>
            <th>college</th>
            <th>course</th>
            </tr>
                 <?php
                 $xml= simplexml_load_file("a.xml")or die("lode failed");
                 echo "<td>".$xml->roll[0]."</td>";
                 echo "<td>".$xml->name[0]."</td>";
                 echo "<td>".$xml->address[0]."</td>";
                 echo "<td>".$xml->college[0]."</td>";
                 echo "<td>".$xml->course[0]."</td>";
                 ?>
        </table>
    </body>
</html>