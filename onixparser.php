<?php

include('funcLibrary.php');
define('DATA_PATH',"/home/bsestokas/onixxml/");
define('DATA_FILE',"SagePublications_ONIX_US_04.26.2011.xml");



define('DATA_PATH_O',"/home/bsestokas/csv/");
define('DATA_FILE_O', DATA_FILE . ".csv");

$fp = fopen(DATA_PATH_O . DATA_FILE_O, "w");



$r = new XMLReader;
$r->open(DATA_PATH . DATA_FILE);

// move to the first <product /> node
while ($r->read() && $r->name !== 'product');

// now that we're at the right depth, hop to the next <product/> until the end of the tree
  while ($r->name === 'product'){
     $node = new SimpleXMLElement($r->readOuterXML());
 
      //grab each value in product, just find appropriate onix tag and xpath it!
  
        // THIS IS FOR SAGE PUB, THEY ARE ALL DIFFERENT I GUESS


     $isbn = ($node->xpath('//b005'))[0];

     $author = $node->xpath('//b036');

     $pub = $node->xpath('//b079');

     $title = $node->xpath('//b028');

     $desc = $node->xpath('//d104');

     $listp = $node->xpath('//j151');

     $pubyear = $node->xpath('//b087');

     $discount1 = $node->xpath('//j363');

     $discount2 = $node->xpath('//j364');

     $discount3 = $node->xpath('//j378');

     //add an element to each array to stop index warnings
     $discount1[] = $discount2[] = $discount3[] =
     $isbn[] = $author[] = $pub[] = $title[] = $desc[] = $listp[] = $pubyear[] = '';

     //attach to csv, this order dictates the csv's
     $row = array($isbn, $title[0], $author[0], $pub[0], $pubyear[0],
		 $listp[0], strip_tags($desc[0]), $discount1[0],
                  $discount2[0], $discount3[0]);
     fputcsv($fp,$row);

     //move on
     $r->next('product');

} //end of while


fclose($fp);



?>
