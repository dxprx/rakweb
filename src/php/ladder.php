<?php
require "../config/config.php";

// read all row from database table
$sql= "SELECT Class, name, level, exp, win, lose, draw from characterinfo";
$result = $connection->query($sql);

if(!$result){
    die("Invalid query: " . $connection->error);
}

// read data of each row
while($row = $result->fetch_assoc()){
    echo "<tr>
    <th>" . $row["Class"] . "</th>
    <th>" . $row["name"] . "</th>
    <th>" . $row["level"] . "</th>
    <th>" . $row["exp"] . "</th>
    <th>" . $row["win"] . "</th>
    <th>" . $row["lose"] . "</th>
    <th>" . $row["draw"] . "</th>
</tr>";
}
?>