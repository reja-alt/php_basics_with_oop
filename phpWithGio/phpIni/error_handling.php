<?php
    const BR = '<br>';
    // error handling 
    // var_dump(error_reporting(E_ALL & ~E_WARNING));
    // var_dump(error_reporting(E_USER_NOTICE & E_DEPRECATED ));
    // trigger_error('Example error' , E_WARNING);
    // echo 2;
    // error_log();

    // different error handling methods:

    // Simple "die()" statements
    // Custom errors and error triggers
    // Error reporting

    // Basic Error Handling: Using the die() function
    // $file = fopen("mytestfile.txt","r");
    
    if (file_exists("index.php"))
    {
        echo 'Found' . BR;
    }else {
        die("Error: File doesn't exist");
    }

    // Creating a Custom Error Handler
    // This function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and the error context):
    
    //     Syntax
    //     error_function(error_level,error_message,error_file,error_line,error_context)

    // function customError($errno, $errstr) {
    //     echo "<b>Error:</b> [$errno] $errstr<br>" . BR;
    //     echo "Ending Script" . BR;
    //     die();
    // }
    
    // echo $demo . BR;
    // set_error_handler('customError', E_USER_WARNING);

    // Trigger an Error
    
    // $test=2;
    // if ($test>=1) {
    //   trigger_error("Value must be 1 or below",E_USER_WARNING);
    // }
    
    // function handleError($errno, $errstr,$error_file,$error_line) {
    //     echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
    //     echo "<br />";
    //     echo "Terminating PHP Script";
        
    //     die();
    //  }
     
     //set error handler
    //  set_error_handler("handleError");
     
     //trigger error
    //  myFunction();

    //  How to handle exceptions in PHP ?
    
    function division_operation($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Divide by Zero Error");
        }
        return $dividend / $divisor;
    }
      
    try {
        echo division_operation(12, 0);
    } catch (Exception $e) {
        echo 'error';
    }
    
 ?>