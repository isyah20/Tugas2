<?php
function deskripsi(){
    $input=$_POST["input"];

    $key = array (
      '~' => 'a', 'q' => 'b', '1' => 'c', '&' => 'd', '!' => 'e', '2' => 'f','m' => 'g',
      '=' => 'h', '4' => 'i', '?' => 'j', 's' => 'k', '9' => 'l', '#' => 'm','<' => 'n',
      'y' => 'o', '$' => 'p', 'b' => 'q', '*' => 'r', '+' => 's', '0' => 't','3' => 'u',
      '^' => 'v', ';' => 'w', '>' => 'x', '/' => 'y', '-' => 'z'
    );
    $deskripsi = str_replace(array_keys($key), $key, $input);

    echo "kata deskripsi adalah ", $input;
    echo "<br><br>";
    echo "hasil enkripsi adalah ", $deskripsi;

}
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    deskripsi();
}
?>