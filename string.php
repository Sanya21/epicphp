<?php
mb_internal_encoding("UTF-8");
function get_domain_from_email($email) {
    if (!strpos($email, '@')) {
        return false;
    }
    $parts = explode('@', $email);
    return $parts[1];
}

$email = 'hello@evercodelab.com';

$domain = get_domain_from_email($email);

echo $domain."<br>";

$text = 'qwee eerwer ewrr werer  ewrr rewqr';
$words = explode(' ', $text);
//var_dump($words);
foreach($words as $key =>$word)
{
 if (empty($word))
 {
     unset($words[$key]);
 }
}
//var_dump($words);
$total=count($words);
echo $total."<br>";

$totaleven=0;
foreach ($words as $value)
{
    $wordlength=mb_strlen($value);
    if($wordlength%2 ==0){
        $totaleven++;
    }
   
}
 echo $totaleven;
 $texts=file_get_contents('text.php');
 $parts=explode("\r\n\r\n",$texts);
 var_dump($parts);
 $ptext=  array_reverse($parts);