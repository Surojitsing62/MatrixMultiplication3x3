<?php
    $matrix1 = array(array(1,3,2),array(3,1,1),array(1,2,2));
    $m = count($matrix1);
    $n = count($matrix1[2]);
  
    $matrix2 = array(array(2,1,1),array(1,0,1),array(1,3,1));
    $p = count($matrix2);
    $q = count($matrix2[2]);

        echo "This is first matrix:". "<br/> ";
          for ($i=0; $i <$m ; $i++) 
            { 
	             for ($j=0; $j <$n ; $j++) 
	                {
	     	             echo " ".$matrix1[$i][$j];
	                }
	            echo "<br>";
            }

        echo "this is second matrix"."<br>";
          for ($i=0; $i <$p ; $i++) 
            { 
	             for ($j=0; $j <$q ; $j++) 
	                {
	     	             echo " ".$matrix2[$i][$j];
	                }
	            echo "<br>";
            }


            if($n==$p)
                {
	                 echo "the multiplication is: "."<br>";
	                     $result =array();
	                         for ($i=0; $i <$m ; $i++) 
	                            { 
		                             for ($j=0; $j <$q ; $j++)
		                                { 
			                                 $result[$i][$j]=0;

			                                     for ($k=0; $k <$n ; $k++) 
				                                     $result[$i][$j]+=$matrix1[$i][$k]*$matrix2[$k][$j];
		                                }
	                            }

	                                                     for ($row=0; $row <$m ; $row++) 
	                                                        { 
	                                                            for ($col=0; $col <$q ; $col++)  
	  	                                                             echo " ".$result[$row][$col];
	                                                                     echo "<br>";
	                                                        }

                                                             $arrDiag =count($result);
	                                                             $firstD = 0;
                                                                     $secondD = 0;
                                                                         //echo $arrDiag."<br>";

                                                                         $i = 0;
                                                                             for($j = 0; $j < $arrDiag; $j++)
                                                                                {
                                                                                     $firstD +=$result[$i++][$j];
                                                                                         $secondD +=$result[$arrDiag - $i][$j];
                                                                                }
                                                                                    echo "the diagonal addtion of matrix:"."<br>";
                                                                                         echo "First diagonal additon"." ".$firstD."<br>";
                                                                                             echo "Second diagonal addtion"." ".$secondD;
                }

?>