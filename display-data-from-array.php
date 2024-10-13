
<?php
$users = [
    [1, "cat", "army"],
    [2, "owl", "airforce"],
    [3, "otter", "navy"],
    [4, "seal", "marine"],
];

echo "<table border=1> 
    <tr>
        <td>
            Sr. No.
        </td>
        <td>
            Name
        </td>
        <td>
            Field
        </td>
    </tr>
";

for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>" . ucfirst($users[$i][$j]) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>