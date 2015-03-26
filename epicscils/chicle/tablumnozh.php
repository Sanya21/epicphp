<table bgcolor='yellow' bordercolor='black'>
    <?php
    for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $a=$i*$j;
        echo "<tr><td>$a</td></tr>";
    }
   echo '<br />';
}
    ?>
</table>