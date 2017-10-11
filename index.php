<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>";

  $slash = str_replace("-","/",$date);
  echo "2. $slash<br>";

	if($slash>$tar){
		echo "3. Future<br>";
	}
	elseif($date<$slash){
		echo "3. Past<br>";
		}
	else{
		echo "3. Oops<br>";
		}

	$posnum =strpos($date,"-");
	$substring = substr($date,$posnum+1);
	$posnum1 = strpos($substring,"-");
	$number = $posnum+$posnum1+1;
	echo "4. The position of / are: $posnum $number <br>";
	$len = str_word_count($date);
  $l = $len+1;
	echo "5. The number of words in string are: $l <br>";
  $numlen = strlen($date);
  echo "6. The length of the string : $numlen <br>";
  $aci = ord($date);
  echo "7. The ascii value of first character of $date : $aci <br>";
  $lt = substr($date,-2);
  echo "8. The last two character of the date : $lt <br>";
  $dts = explode("-",$date);
  echo "9. ";
  print_r($dts);
    echo "<br>";
  echo "10. Leap years<br>";
  foreach($year as $values){
    if((($values % 4) == 0) && ((($values % 100) != 0) || (($values % 400) == 0))){
      echo "$values: True | ";
      }else{
      echo "$values: False | ";
      }
      }
?>
