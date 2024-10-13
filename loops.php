<?php

for ($start = 0; $start <= 10; $start++) {
    if ($start == 5) {
        continue;
    }
    if ($start == 9) {
        break;
    }
    echo "Hello  $start <br />";
}
?>