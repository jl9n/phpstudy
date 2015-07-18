<?php

function my_scandir($dir)  
{  
   $files = array();  
   if ( $handle = opendir($dir) ) { 
      while ( ($file = readdir($handle)) !== false ) {  
        if ( $file != ".." && $file != "." ) {  
           if ( is_dir($dir . "/" . $file) ) {  
             $files[$file] = scandir($dir . "/" . $file);  
           }else {  
             $files[] = $file;  
          }  
       }  
   }  
   closedir($handle);  
   return $files;  
 }  
}

$files=my_scandir('E:\wamp\www');
print_r($files);