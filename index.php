<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
    //ex1
    // $name="Kholoud Khraisat";
    // echo strtoupper($name);
    // echo strtolower($name);
    // echo ucfirst($name);
    // echo lcfirst($name);

    //ex2
   
    $date=date_create("085119");
    echo date_format($date,"H:i:d");


    //ex3
    //     $word = "Orange";
    //     $mystring = "I am a full stack developer at Orange coding academy";
    //     if(strpos($mystring, $word) !== false){
    //     echo "Word Found!";
    //     } else{
    //     echo "Word found";
    //    }

    //ex4
    // $path='www.orange.com/index.php';
    // $file=basename($path);
    // echo $file;


    //ex5
    // $email='info@orange.com';
    // $username=strstr($email,'@',true);
    // echo  $username;

    //ex6
    // $str = "info@orange.com";
    // $n = 3;
    // $start = strlen($str) - $n;
    // $str1 = substr($str, $start);
    // echo $str1;

    //ex7
    // function password_generate($chars) 
    // {
    //   $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    //   return substr(str_shuffle($data), 0, $chars);
    // }
    //   echo password_generate(7)."\n";


    //ex8
    // $str1='Our new trainee is so genius';
  
    // echo preg_replace('/Our/', 'The', $str1);

    //ex9
    // $str1='dragonball';
    // $str2='dragonboll';
    // $str_pos=strspn($str1^$str2,"\0");
    // echo $str_pos;

    //ex10

    //ex11
//     function next1($ch){
    
//     $next_ch = ++$ch;
//     if (strlen($next_ch) > 1) { 
//     $next_ch = $next_ch[0];
//     }
//     echo $next_ch;
    
//     }
//    next1('c');
   
    //ex12
    // $string = 'The brown fox';
    // $replacement = 'quick ';
    // echo substr_replace($string, $replacement, 4, 0); 

    //ex13
    // $number='0000657022.24';
    // echo str_replace("0", "", $number)."\n";

    //ex14
    // $str0='The quick brown fox jumps over the lazy dog';
    // echo str_replace("fox", " ", $str0)."\n";

    //ex15
    // $str0='The quick brown fox jumps over the lazy dog---';
    // echo str_replace("-", " ", $str0)."\n";

    //ex16
    // $str0='abcd/\-&*#@';
    // $newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $str0);
    // echo $newstr;
    
    //ex17
    // $str0 = 'The quick brown fox jumps over the lazy dog';
    // echo implode(' ', array_slice(explode(' ', $str0), 0, 5))."\n";

    //ex18
    // $str0='1,2,3,4,5,6';
    // echo str_replace(",", "", $str0)."\n";

    //ex19
    // for ($letter= ord('a'); $letter <= ord('z'); $letter++)
    // echo chr($letter);
   










    ?>
</body>
</html>