<?php
error_reporting(E_ALL);

echo '<html lang="en">';
echo '<head>';
echo '<title>Bootstrap Example</title>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="css/bootstrap.min.css">';
echo '<script src="js/jquery.min.js"></script>';
echo '<script src="js/bootstrap.min.js"></script>';
echo '</head>';
echo '<body>';


$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTMLFile("http://yojana.gov.in/web-exclusives.asp");

//$data = $doc->saveHTML();
$tbody = $doc->getElementById('AutoNumber6');

//print_r(json_decode($tbody, true));
/*
$xml_string = $doc->saveXML($tbody);
$xml = simplexml_load_string($xml_string);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
print_r($json);

echo '<br/>';
*/
echo "hr - ";
$xpath = new DOMXPath($doc);

$result = $xpath->query("//*[(preceding-sibling::hr and following-sibling::hr)]");
foreach ($result as $i=>$node) {
    echo "[$i]$node->textContent<br/>\n";
}
//print_r($tbody->getElementsByTagName('hr')->items(0)->parent_node());


/*
foreach($tbody->getElementsByTagName('a') as $a){
	print_r($a->getAttribute('href'));
	echo "<br />";
} */


  
echo '<div class="container">';  

// To print title and description 
$index = 0;
foreach($tbody->getElementsByTagName('p') as $p){
	if($index % 2 == 0){
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading">'.$index." : ".$p->nodeValue.'</div>';
		//echo "Title : ".$p->nodeValue;
		//echo "<br />";
	}
	if($index % 2 == 1){
		echo '<div class="panel-body">'.$p->nodeValue.'</div>';
		echo '</div>';
		//echo "Description : ".$p->nodeValue;
		// echo "<br/><br/>";
	}
$index++;
}
echo '</div>';
echo '</body>';
echo '</html>';

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