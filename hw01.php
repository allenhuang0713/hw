<table border="1">
    <?php
    for ($j = 0; $j <= 9; $j++) {
        echo '<tr>';
        for ($i = 1; $i <= 10; $i++) {
            $r = $j * 10 + $i;
            $isPrime = true;
            for ($k = 2 ; $k < $r; $k++) {
                if ($r % $k == 0) {
                    $isPrime = false;
                }
            }
            if ($r == 1) {
                echo '<td>';
            } elseif ($isPrime == true) {
                echo '<td bgcolor = "yellow">';
            } else {
                echo '<td>';
            }
            echo "{$r}";
            echo '</td>';
        }
        echo '</tr>';
    }
?>
</table>

