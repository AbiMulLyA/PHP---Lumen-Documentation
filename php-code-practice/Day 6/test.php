<?php

//closure

$data = function(){

};

// var_dump($data);

// assign function into variable

$area = function($radius, $pi){
    return $radius**2*$pi;
};

echo call_user_func($area, 2, 3.14);
echo "\n";

// HOF
// assign function as a parameter
// return function as a result
function volumeTabung($height, $radius, $pi, callable $area){
    return $area($radius,$pi)*$height;
}

$volume = volumeTabung(10,2,3.14,$area);
echo $volume;
echo "\n";
print($volume);


// built-in function 

function greaterthan2($item){
    if($item > 2){
        return $item;
    }
}

$list = [1,2,3,4,5,6];

$filter = array_filter($list,function($item){
    if($item > 2){
        return $item;
    }
});
var_dump($filter);



