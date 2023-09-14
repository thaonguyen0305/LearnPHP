<?php
 
function readFileJson($filePath) {
    if (file_exists($filePath)) {
        throw new Exception(message: 'File not found');
}
$dataJson = file_get_contents($filePath);
return json_decode($dataJson, associative: true);
}
try {
    echo readFileJson(filePath:"./data.json");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
echo "<br>";
echo "xin chao cac ban";

?>
