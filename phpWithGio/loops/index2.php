<!DOCTYPE html>
<html>

<body>
    <?php
$letter = array();
for ($letters = 'A'; $letters != 'AA'; $letters++)
{
    array_push($letter, $letters);
}
echo '<pre>' . var_export($letter, true) . '</pre>';

?>
</body>

</html>