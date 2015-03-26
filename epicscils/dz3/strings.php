<head>
    <meta charset="UTF-8">
<h1>Шапка</h1>
</head>
<body>
 <?php   
$text = 'qwee eerwer ewrr werer  ewrr rewqr';
function col_slov($text){
$words = explode(' ', $text);
foreach($words as $key =>$word)
{
 if (empty($word))
 {
     unset($words[$key]);
 }
}
$total=count($words);
return $total;
}
echo col_slov($text)."<br>";


function col_slov_ch($text){
    $totaleven=0;
    $words = explode(' ', $text);
foreach ($words as $value)
{
    $wordlength=mb_strlen($value);
    if($wordlength%2 ==0){
        $totaleven++;
    }
}
return $totaleven;
}
 echo col_slov_ch($text);
 
function chetny($text){
      $words = explode(1, $text);
      foreach ($words as $vars)
{
          echo $vars;
    $wordlength=mb_strlen($vars);
    if($wordlength%2 ==0){
        
    }
}
 }
 ?>