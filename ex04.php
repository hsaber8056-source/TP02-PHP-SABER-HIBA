<?php
//1. Déclarer les valeurs suivantes : `42`, `"42"`, `15.8`, `true`, `false`, `null` dans six variables.
 $val1 = 42;
 $val2="42";
 $val3= 15.8;
 $val4= true;
 $val5= false;
 $val6= 'null';
//2. Examiner leurs types et leurs valeurs avec `var_dump()`, dans une balise HTML `<pre>`.
echo'<pre>';
var_dump($val1);
var_dump($val2) ;
var_dump($val3) ;
var_dump($val4) ;
var_dump($val5) ;
var_dump($val6) ;
echo "</prer>" ;
//3. Convertir `"42"` en entier, `15.8` en entier et `42` en chaîne ; afficher les résultats avec leurs types.
 $val_1 =(string) 42;
 $val_2=(int)"42";
 $val_3=(int) 15.8;
 echo'<pre>';
var_dump($val_1);
var_dump($val_2) ;
var_dump($val_3) ;
echo "</prer>" ;
//4. Afficher `true` et `false` avec `echo`, puis avec `var_dump()`.
echo" true est : $val4 <br>";
echo"false est :  $val5 <br>";
echo'<pre>';
var_dump($val4) ;
var_dump($val5) ;
echo "</prer>" ;
//5. Convertir `0`, `"0"`, `"PHP"` et un tableau vide en booléens.
var_dump((bool) 0);
var_dump((bool)"0");
var_dump((bool)"PHP");
var_dump((bool)[]);
?>