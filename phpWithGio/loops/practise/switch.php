<?php
$number = 'positive';

switch($number):
    case 'positive': ?>
<h1 style="color:green;">Number is positive</h1>

<?php break;
    case 34: ?>
<h1 style="color:green;">Number is positive</h1>

<?php break;
    case 10: ?>
<h1 style="color:green;">Number is positive</h1>

<?php break;
    default:?>
<h1 style="color:green;">Number is positive</h1>
<?php endswitch ?>

<?php
  $iterations = 10000;
  $options = array('apple', 'banana', 'carrot' ,'date', 'endive');
  $color = NULL;

  // Fill an array with random keys. This ensures
  // that (a) we use the same keys, and (b)
  // slowness in the randomizer doesn't impact the
  // loops (which can happen if entropy collection kicks in)
  $samples = array();
  for ($i = 0; $i < $iterations; ++$i) {
    $samples[] = $options[rand(0, 4)];
    // print_r($samples);
  }

  // Test a switch statement.
  $start_switch = microtime(TRUE);
//   echo $start_switch;

  for ($i = 0; $i < $iterations; ++$i) {
    $option = $samples[$i];
    switch ($option) {
      case 'apple':
        $color = 'red';
        break;
      case 'banana':
        $color = 'yellow';
        break;
      case 'carrot':
        $color = 'orange';
        break;
      case 'date':
        $color = 'brown';
        break;
      case 'endive':
        $color = 'green';
        break;
    }
  }
  $end_switch = microtime(TRUE);

  $total_switch = $end_switch - $start_switch;
  printf("Switch:\t%0.6f sec to process %d" . PHP_EOL, $total_switch, $iterations);

  // Test an array lookup.
  $start_map = microtime(TRUE);
  $map = array(
    'apple' => 'red', 
    'banana' => 'yellow', 
    'carrot' => 'orange',
    'date' => 'brown', 
    'endive' => 'green'
  );
  for ($i = 0; $i < $iterations; ++$i) {
    $option = $samples[$i];
    $color = $map[$option];
  }
  $end_map = microtime(TRUE);

  $total_map = $end_map - $start_map;
  printf("Map:\t%0.6f sec to process %d" . PHP_EOL, $total_map, $iterations);
?>

<?php
$argc = 2;
echo '<br>';
switch ($argc) {
    case 1:
        echo "Hello world!\n";
        break;

    case 2:
        echo "Shit\n";
        break;

    case 3:
        echo 'Hello!';

    case 4:
        echo "WTF\n";
        break;

    default:
        echo "Mazafaka";
        break;
}

echo "Hello!\n";

// Artem Soldatkin!!!
// $bad = 1;
// switch ($bad) {
//     case 1: {
//             echo 'something';
//         }
//     default:
//         return null;
// }
$errCode = 'Employee::BAD_LOGIN';
switch ($errCode) {
    case 'Employee::BAD_LOGIN':
        $vars['login_msg']   = 'Bad email';
        $vars['login_class'] = 'error';
        echo 'access' . '<br>';
        break;

    case Employee::NAME_EXISTS:
        $vars['login_msg']   = 'Name exist';
        $vars['login_class'] = 'error';
        break;

    case Employee::EMPTY_LOGIN:
        $vars['login_msg']   = 'Empty login';
        $vars['login_class'] = 'error';
        break;

    case Employee::EMAIL_EXISTS:
    case Employee::LOGIN_EXISTS:
        $vars['email_msg']   = 'Email already used';
        $vars['email_class'] = 'error';
        break;

    case Employee::EMPTY_NAME:
        $vars['name_msg']   = 'Please fill full name';
        $vars['name_class'] = 'error';
        break;

    case Employee::EMPTY_ADDRESS:
        break;

    case Employee::EMPTY_GROUP_SET:
        break;

    default:
        $unknown_error = 'Error code #' . $errCode;
        break;
}

// other switch

// switch ($something) {
//     case "something":
//     default:
//         echo "hello world\n";
//         break;
// }


?>
<?php
$x=array(
    0 => 'foo',
    1 => 'bar',
    2 => 'foobar'
);

$y = 'foobar';
foreach($x as $item) {
    switch($y) {
            case $item:
                print 'Variable $y tripped switch: '.$item.'<br>';
                break;    
    }
}
$car = 'Audi';
switch($car)
{
    case ($car == "Audi" || $car == "Mercedes"):
        echo "German cars are amazing";
        break;
    case ($car == "Jaguar"):
        echo "Jaguar is the best";
        break;
    default:
        echo "$car is Ok";
}

function test(){
    $output = '';
    $number = rand("0","100");
    switch($number) {
        case $number > 0 && $number < 15:
            $output = 1;
            break;
        case $number > 15 && $number < 50:
            $output = 2;
            break;
    }
    return $output;
}
echo test();
?>