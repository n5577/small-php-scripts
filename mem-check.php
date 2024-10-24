</php

// Echo memory usage for testing
function convert($size)
 {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
 }
// Remove after use
 echo convert(memory_get_usage(true)); // 123 kb
