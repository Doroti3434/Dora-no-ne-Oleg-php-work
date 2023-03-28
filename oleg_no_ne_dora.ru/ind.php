<?php

$csv_file = fopen('meta.csv', 'r');
$data = array(); 

while (($row = fgetcsv($csv_file, 0, ";")) !== FALSE) {
    $data[] = $row; 
}

fclose($csv_file);
echo '<table border="1">';
foreach ($data as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . htmlspecialchars($cell) . '</td>'; 
    }
    echo '</tr>';
}
echo '</table>';

?>
