<?php

   $d1=array();
   $d2=array();
   $d3=array();
   $valueA=0;
   $valueB=0;
   $valueC=0;
   $valueD=0;
   $valueE=0;
     
$filed= fopen("0","r");
$file1= fgets($filed);
fclose($filed);
echo $file1."<br>";
  
$filedd= fopen("1","r");
$file2= fgets($filedd);
fclose($filedd);
echo $file2."<br>";

$fileddd= fopen("2","r");
$file3= fgets($fileddd);
fclose($fileddd);
echo $file3."<br>";

$d=array($file1, $file2, $file3);

   //the whole loop for measuring the ratio of each character
   for($i=0; $i<3; $i++){
       $letters=array("A","B","C","D","E");
       $length= strlen($d[$i]);
       $randomString = $d[$i];
       if($i==0){
            for($k=0; $k<5; $k++){
                $d1[$k]= substr_count($randomString, $letters[$k])/$length;
                
                                         }
                                         
             /* for($x=0; $x<5; $x++){
              echo $d1[$x]."<br>";
                         }*/
       }
        else if($i==1){
           for($k=0; $k<5; $k++){
                $d2[$k]= substr_count($randomString, $letters[$k])/$length;
                
        }
        /*for($x=0; $x<5; $x++){
              echo $d2[$x]."<br>";
                         }*/
           }
            
            else {
            for($k=0; $k<5; $k++){
                $d3[$k]= substr_count($randomString, $letters[$k])/$length;
                
                                         }
            /*  for($x=0; $x<5; $x++){
              echo $d3[$x]."<br>";
                         }*/
        } 
   }

 $query=htmlspecialchars($_POST["query_string"]);
 echo $query;
 $queryArray=explode(";", $query);
 $queryLength=count($queryArray);
 for($f=1; $f<($queryLength-2); $f++){
 $subQuery=explode(":",$queryArray[$f]);
if($subQuery[0]=='A'){
    if($subQuery[1]==""){
        $valueA=1;
    }
    else {
        $valueA=$subQuery[1];
    }
}

if($subQuery[0]=='B'){
    if($subQuery[1]==""){
        $valueB=1;
    }
    else {
        $valueB=$subQuery[1];
    }
}

if($subQuery[0]=='C'){
    if($subQuery[1]==""){
        $valueC=1;
    }
    else {
        $valueC=$subQuery[1];
    }
}

if($subQuery[0]=='D'){
    if($subQuery[1]==""){
        $valueD=1;
    }
    else {
        $valueD=$subQuery[1];
    }
}  

if($subQuery[0]=='E'){
    if($subQuery[1]==""){
        $valueE=1;
    }
    else {
        $valueE=$subQuery[1];
    }
}
 }

echo $valueA."<br>";
echo $valueB."<br>";
echo $valueC."<br>";
echo $valueD."<br>";
echo $valueE."<br>";

$queryValues=array($valueA, $valueB, $valueC, $valueD, $valueE);

for($n=0; $n<3; $n++){
    
    if($n==0){
        for($m=0; $m<5; $m++){
            $d1[$m]=$d1[$m]*$queryValues[$m];
        }
    }
    
    else if($n==1){
        for($m=0; $m<5; $m++){
            $d2[$m]=$d2[$m]*$queryValues[$m];
        }
    }
    
    else {
        for($m=0; $m<5; $m++){
            $d3[$m]=$d3[$m]*$queryValues[$m];
        }
    }
}

$rankD1=0;
$rankD2=0;
$rankD3=0;

for($t=0; $t<3; $t++){
    if($t==0){
      for($b=0; $b<5; $b++){
          $rankD1=$rankD1+$d1[$b];
      }  
    }
    else if($t==1){
        for($b=0; $b<5; $b++){
          $rankD2=$rankD2+$d2[$b];
      }
    }
    
    else {
        for($b=0; $b<5; $b++){
          $rankD3=$rankD3+$d3[$b];
      }
    }
}

echo "Rank for file number 1 is: ". $rankD1. "<br>";
echo "Rank for file number 2 is: ". $rankD2. "<br>";
echo "Rank for file number 3 is: ". $rankD3. "<br>";

?>



             