<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array (
      'a' => '~', 'b' => 'q', 'c' => '1', 'd' => '&', 'e' => '!', 'f' => '2','g' => 'm',
      'h' => '=', 'i' => '4', 'j' => '?', 'k' => 's', 'l' => '9', 'm' => '#','n' => '<',
      'o' => 'y', 'p' => '$', 'q' => 'b', 'r' => '*', 's' => '+', 't' => '0','u' => '3',
      'v' => '^', 'w' => ';', 'x' => '>', 'y' => '/', 'z' => '-'
    );
    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang dienkripsi adalah ", $input;
    echo "<br><br>";
    echo "hasil enkripsi adalah ", $enkripsi;

}
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    enkripsi();
}
?>