<?php
//require " ../dbBroker.php";

if (!empty($_POST['search'])) {
    $Search_Query = $conn->real_escape_string($_POST['search']);
    $query = "SELECT * FROM jelovnik
    WHERE name LIKE '%{$Search_Query}%' OR type LIKE '%{$Search_Query}%' LIMIT 6 OFFSET 0; ";
    $result = $conn->query($query) or die($conn->error);
    $html = "<table class='table";
    $html .= "
    <tr >
      <th>Broj</th>
      <th>Naziv </th>
      <th>Količina</th>
      <th>Cena</th>
    </tr>
 ";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= "<tr><td>" . $row['id'] . "</td>";
            $html .= "<td>" . $row['type'] . "</td>";
            $html  .= "<td>" . $row['name'] . "</td>";
            $html  .= "<td>" . $row['quantity'] . "</td>";
            $html  .= "<td>" . $row['price'] ."</td></tr>";
        }
        
        $html .= "</table>";
        echo $html;
    } else {
        echo "Nema rezultata";
    }
} else {
    echo "Unesite pretragu!";
}
$conn->close();
?>