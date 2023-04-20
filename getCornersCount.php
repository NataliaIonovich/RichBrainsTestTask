<?php

function getCornersCount(string ...$shapeName){
	$echo = ""; 
    foreach ($shapeName as $shapeItem) {
    	if ($shapeItem === 'square'){
    		$echo .= "$shapeItem - 4\n";
    	}
    	else if ($shapeItem === 'circle'){
    		$echo .= "$shapeItem - 0\n";
    	}
    	else {
    		$echo .= "$shapeItem - not defined\n";
    	}
    }
    
    return $echo;
}

echo getCornersCount('square', 'circle', 'triangle');

echo getCornersCount('square');

