<?php 
$myvar = "varname";
$x = $_GET['arg'];
// eval("$x;");

// uncomment line 4 and call this page with /codeInjection.php?arg=1;phpinfo()
// then comment it again and try again, in this time only math operations are allowed
// for example: ((800 + 20) - 800 / 2)
$tokens = token_get_all("<?php {$x}");
$expr = '';

foreach($tokens as $token){

  if(is_string($token)){

    if(in_array($token, array('(', ')', '+', '-', '/', '*'), true))
      $expr .= $token;

   continue;   
  }

  list($id, $text) = $token;

  if(in_array($id, array(T_DNUMBER, T_LNUMBER)))
    $expr .= $text;
}

eval("\$result = {$expr};");

print "expr = " . $expr . "<br>";
print "res = " . $result . "<br>";