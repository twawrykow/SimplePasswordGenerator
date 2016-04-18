<meta charset="utf-8">
<?php
	
	$tab1=range(0,9);                        //Numbers array
	$tab2=range(a,z);						 //Letters array
	$tab3=range(A,Z);                        //Capital letters array
	$tab12=array_merge($tab1,$tab2);		 //Numbers and letters array
	$tab13=array_merge($tab1,$tab3);         //Numbers and capital letters array
	$tab23=array_merge($tab2,$tab3);         //Letters and capital letters array
	$tab123=array_merge($tab1,$tab2,$tab3);  //Numbers letters and capital letters

	if($_SERVER['REQUEST_METHOD']==='POST') {
		if(isset($_POST['ilznak'])){
			$n=$_POST['ilznak'];

			switch($_POST['choise']){
				case ('numbers'):
				for($i=1;$i<=$n;$i++) {
					$a=array_rand($tab1);
					echo $a;
				}
				break;
				case ('letters'):
				shuffle($tab2);
				for($i=0;$i<=$n;$i++) {
					echo $tab2[$i];
				}
				break;
				case ('bigletters'):
				shuffle($tab3);
				for($i=1;$i<=$n;$i++){
					echo $tab3[$i];
				}
				break;
				case ('numbersANDletters'):
				shuffle($tab12);
				for($i=1;$i<=$n;$i++){
					echo $tab12[$i];
				}
				break;
				case ('numbersANDbigletters'):
				shuffle($tab13);
				for($i=1;$i<=$n;$i++){
					echo $tab13[$i];
				}
				break;
				case ('lettersANDbigletters'):
				shuffle($tab23);
				for($i=1;$i<=$n;$i++){
					echo $tab23[$i];
				}
				break;
				case ('numbersANDlettersANDbigletters'):
				shuffle($tab123);
				for($i=1;$i<=$n;$i++){
					echo $tab123[$i];
				}
				break;
				default;
			}
			echo "<br><br><br><a href='index.html'>Powrót</a>";
		}
	}
	
?>







