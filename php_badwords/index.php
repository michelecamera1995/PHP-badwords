<?php

$username = $_GET["name"];
$stringa1 = '<h2>ciao, mi chiamo michele , Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>';
$stringa2 = str_replace($username, '***', $stringa1);

?>

<h2>Paragrafo 1</h2>

<?php

echo ($stringa1);
echo (strlen($stringa1));

?>

<h2>Paragrafo 2</h2>

<?php

echo ($stringa2);
echo (strlen($stringa2));

?>