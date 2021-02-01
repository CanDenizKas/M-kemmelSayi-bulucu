<?php 

function m_bulucu() 
{ 
   
    $kalan = 0; 
       
 
    for ($i = 1; $i < $_POST["deka"]; $i++) 
    { 
        if ($_POST["deka"] % $i == 0) 
        { 
            $kalan = $kalan + $i; 
        }       
    } 
      
 
    return $kalan == $_POST["deka"]; 
} 
   

 
  
if (m_bulucu()) 
    echo " Mükemmel Sayı"; 
else
    echo "Mükemmel Sayı Değil"; 
?> 
