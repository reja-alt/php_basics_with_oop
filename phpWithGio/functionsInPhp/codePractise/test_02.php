<?php
const BR = '<br>';
// Name:		PHP Encryption:
// Desc:		Encrypt and Decrypt data.
// Version:	V1.0
// Date:		3/11/2017
// Author:		Prince Adeyemi
// Contact:	prince@vegasnewspaper.com
// Facebook:	fb.com/YourVegasPrince


// Encryption setup:
$dataToEncrypt = "My Secret Telegram: Hakuna matata!";
$encryptMethod = "AES-256-CBC";
$mySecretHash = "somethingRandom12!)!)I!@1U2 goes gere";

//$iv = mcrypt_create_iv(16, MCRYPT_RAND);

// php versopm 5.6.0- 7.2.x compability;

If( phpversion() >= 7)
{
    $bytes = random_bytes(8);
    // echo $bytes . BR;
    $iv = (bin2hex($bytes));
    // echo $iv . BR;
}
elseif( phpversion() < 7 )
{
    for ($i = -1; $i <= 16; $i++) {
        $iv = openssl_random_pseudo_bytes($i, $cstrong);  
    }
}
else {
    $iv = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
}

//Encrypt data:
$encryptedData = openssl_encrypt($dataToEncrypt,$encryptMethod,$mySecretHash, 0, $iv);

//Decrypt data:
$decryptedData = openssl_decrypt($encryptedData, $encryptMethod, $mySecretHash, 0, $iv);

//OUTPUT:
echo ("RandomIV : " . $iv . "\n") . BR;
echo ( "Secret message : " . $dataToEncrypt ."\n" ) . BR;
echo ( "Encrypted message : ". $encryptedData ."\n" ) . BR;
echo ( "Decrypted message: ". $decryptedData ."\ln") . BR;


$message = 'Encrypt this message';
$methodUsed =  "AES-128-CTR";
$iv_length = openssl_cipher_iv_length( "AES-128-CTR");
$iv = '4324353543543543';
$key = 'hide using encryption';

$encryptData = openssl_encrypt($message, $methodUsed, $key, 0, $iv);
echo $encryptData . BR;

$decryptedData = openssl_decrypt($encryptData, $methodUsed, $key, 0, $iv);
echo $decryptedData;
?>