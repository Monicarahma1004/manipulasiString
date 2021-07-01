<?php
echo "<h2> Text </h2>";
$string = "Jangan Jangan iri Jangan Jangan Dengki Jangan iri Dengki";
echo $string;
$kata   = explode(" ", $string);
$data   = array_count_values($kata);
echo '<hr> Dalam Teks diatas terdapat '.str_word_count($string).' kata '; 
echo "<br> <hr> Menghitung Jumlah setiap kata <br>";
foreach($data as $x => $x_value) {
    echo $x." = ".$x_value." kata";
    echo "<br>";
}
echo "<hr> Pengurutan Huruf";
echo "<br> Hasil Pengurutan<br>";
sort($kata);
echo implode(" ",$kata);
echo "<br> Pengurutan Huruf Terbalik <br>";
rsort($kata);
echo implode(" ",$kata);
echo "<hr>"
?>