<?php

function sageParse($node){

     $t = $node->xpath('//b005');
     $t[] = '';
     $isbn = $t[0];

     $t = $node->xpath('//b036');
     $t[] = '';
     $author = $t[0];

     $t = $node->xpath('//b079');
     $t[] = '';
     $pub = $t[0];

     $t = $node->xpath('//b028');
     $t[] = '';
     $title = $t[0];

     $t = $node->xpath('//d104');
     $t[] = '';
     $desc = $t[0];

     $t = $node->xpath('//j151');
     $t[] = '';
     $listp = $t[0];

     $t = $node->xpath('//b087');
     $t[] = '';
     $pubyear = $t[0];

     $t = $node->xpath('//j363');
     $t[] = '';
     $discount1 = $t[0];

     $t = $node->xpath('//j364');
     $t[] = '';
     $discount2 = $t[0];

     $discount3 = $node->xpath('//j378');
     $t[] = '';
     $discount3 = $t[0];


     $row = array($isbn, $title, $author, $pub, $pubyear,
                  $listp, strip_tags($desc), $discount1,
                  $discount2, $discount3);


     return $row;
}

function hbgParse($node){

     $t = $node->xpath('//a001');
     $t[] = '';
     $isbn = $t[0];

     $t = $node->xpath('//b037');
     $t[] = '';
     $author = $t[0];

     $t = $node->xpath('//j137');
     $t[] = '';
     $pub = $t[0];

     $t = $node->xpath('//b203');
     $t[] = '';
     $title = $t[0];

     $t = $node->xpath('//j151');
     $t[] = '';
     $listp = $t[0];

     $t = $node->xpath('//j363');
     $t[] = '';
     $discount1 = $t[0];

     $t = $node->xpath('//j364');
     $t[] = '';
     $discount2 = $t[0];

     $discount3 = $node->xpath('//j378');
     $t[] = '';
     $discount3 = $t[0];

     $row = array($isbn, $title, $author, $pub,
                  $listp, $discount1,
                  $discount2, $discount3);


     return $row;
}


function pearParse($node){

     $t = $node->xpath('//b244');
     $t[] = '';
     $isbn = $t[1];

     $t = $node->xpath('//b037');
     $t[] = '';
     $author = $t[0];

     $t = $node->xpath('//b081');
     $t[] = '';
     $pub = $t[0];

     $t = $node->xpath('//b203');
     $t[] = '';
     $title = $t[0];

     $t = $node->xpath('//d104');
     $t[] = '';
     $desc = $t[0];

     $t = $node->xpath('//j151');
     $t[] = '';
     $listp = $t[0];

     $t = $node->xpath('//j363');
     $t[] = '';
     $discount1 = $t[0];

     $t = $node->xpath('//j364');
     $t[] = '';
     $discount2 = $t[0];

     $row = array($isbn, $title, $author, $pub,
                  $listp, strip_tags($desc), $discount1,
                  $discount2);

     return $row;
}



function ingramParse($node){

     $t = $node->xpath('//b244');
     $t[] = '';
     $isbn = $t[1];

     $t = $node->xpath('//b070');
     //$t[] = '';
     $cat = end($t);

     $t = $node->xpath('//d104');
     $t[] = '';
     $anno = $t[0];

     $row = array($isbn, $cat[0], strip_tags($anno));

     return $row;
}









?>
