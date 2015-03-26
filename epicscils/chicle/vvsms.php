<table>
    <tr>
        <td>пн</td>
        <td>вт</td>
        <td>ср</td>
        <td>чт</td>
        <td>пт</td>
        <td>сб</td>
        <td>вс</td>
    </tr>
    
        <?php

$k=0;
echo "<tr>";
        for($i=1;$i<=31;$i++)
    {
$k++;
echo "<td>$i</td>";
if($k==7){
$k=0;
echo "</tr>";
echo "<tr>";
}
 
    }
    ?>
    
   
</table>