<?php 
$inputstr=$_POST['string']; 
//echo"sting is".$inputstr"<br>"
$chswitch=$_POST["ch"]; $chdropdown=$_POST['dropdown']; 
//echo"selector is".$chdropdown; 
if($chswitch && $chdropdown) 
{ 
     switch ($chswitch) 
     {  
        case 1:  
            echo "Splitting string is <br>";
            $str = $inputstr;   
            //echo"String is:".$str;  
            $delimiter =$chdropdown;   
            //echo"delimeter is:".$chdropdown;  
            $words = explode($delimiter, $str);
            foreach ($words as $word)    
            {       
                echo $word;          
                echo "<br>";   
            }   
            break;  
        case 2:     
            echo "Replace all the by separator<br>";    
            $str = $inputstr;    
            //echo $str ;    
            $delimiter =$chdropdown;    
            //echo $delimiter;    
            $word=substr_replace($str,$delimiter,5);   
            echo $word;     
            break;  
        case 3:  
            echo "Find the last word in string";     
            $str = $inputstr;
            //$delimiter =$chdropdown;      
            echo strstr("$str","#"); 
            break;  
        default:   
            echo "Input did not match with any case";    
        } 
    } 
?>