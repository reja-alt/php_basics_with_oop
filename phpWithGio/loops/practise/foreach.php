<?php
$array = [554,65,65,65,434,54,32354,32,54];
foreach($array as $item) {
    echo $item . '<br>'; 
    $array2[] = $item;
}

print_r($array2);

$list = [554,65,65,65,434,54,32354,32,54];
foreach($array as $key => $item) {

    if($key == count($list) - 1) {
        echo  'last item is' . $item . '<br>';
    }
}

$jsonArray = '[
    {
        "var1": "9",
        "var2": "16",
        "var3": "16"
    },
    {
        "var1": "8",
        "var2": "15",
        "var3": "15"
    }
]';

$jsonDecode = json_decode($jsonArray);
echo '<pre>';
print_r($jsonDecode[0]->var1);
echo '<pre>';

$array = array('blue','red','green','yellow','black','white','blue','green');
$array = array_values(array_unique($array)); // remove duplicate and re-index array also
$vals = array_count_values($array);
print_r($array);
print_r($vals);

?>

<?php $products = "['hair drier', 'bluthooth', 'watch']";
print_r($products[0])?>

<script type=text/javascript>
var product = <?php echo $products ?>;
console.log(product);
for (item in product) {
    console.log(product[item]);
}
</script>