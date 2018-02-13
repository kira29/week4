<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
 
echo "<br><br> 2. "; 

    $date = date('Y/m/d', time());
    echo "The value of \$date in Y/M/D format: ".$date."<br>";
 
echo "<br> 3. ";     
    if ($date > $tar) {
      echo "The Future"; }
    else if($date < $tar) {
      echo "The Past";
    }else{
      echo"Ooops";  }

 
echo "<br> 6. "; 
  $length = strlen($date);
  echo "Length of \$date : ".$length."<br>";

echo "<br> 7. ";   

  echo "ASCII value of \$date : ";
  echo ord($date) ;
?>