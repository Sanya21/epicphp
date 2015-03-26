<table>
<?php
    $k=0;
    echo "<tr>";
    for($i=1;$i<=25;$i++)
    {
        $k++;
        echo "<td><img src='img/tools.png'></td>";
        if($k==5){
            $k=0;
            echo "</tr>";
            echo "<tr>";
        }
    }
   ?>
</table>
