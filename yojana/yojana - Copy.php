<?php
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTMLFile("http://yojana.gov.in/web-exclusives.asp");
//$data = $doc->saveHTML();
$tbody = $doc->getElementById('AutoNumber6');

print_r($tbody->getElementsByTagName('div'));


/*
foreach($tbody->getElementsByTagName('a') as $a){
	print_r($a->getAttribute('href'));
	echo "<br />";
} */


// To print title and description 
$index = 0;
foreach($tbody->getElementsByTagName('p') as $p){
	if($index % 2 == 0){
		echo "Title : ".$p->nodeValue;
		echo "<br />";
	}
	if($index % 2 == 1){
		echo "Description : ".$p->nodeValue;
		 echo "<br/><br/>";
	}
$index++;
}


/*
foreach($tbody->getElementsByTagName('td') as $tds) {
        # Show the <a href>
        $index = 0;
       
        echo "-----------------<br />";
        foreach($tds->getElementsByTagName('p') as $p){
        echo "index". $index;
        echo "Title : ".$p->nodeValue;
        	/*if($index == 0){
        	echo "Title : ".$p->nodeValue;
        	}
        	if($index == 1){
        	echo "Description : ".$p->nodeValue;
        	}*/
        	//print_r($p);
 /*       	echo "<br />";
         $index++; 
        }
      
      //  echo "<br/><br/>";
        
//        print_r ($link);
  
}*/

?> 