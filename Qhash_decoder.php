<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="" method="post" enctype="application/x-www-form-urlencoded">
<input type="text" name="encode" />
<input type="text" name="tip" />
<input type="submit" />


</form>



<?
$en=$_POST['encode'];
$tip=$_POST['tip'];

if($tip==""){exit("please enter a valid tip");}



function decoder($a){

function one($a){


$diz=array("a","b","c","ç","d","e","f","g","ğ","h","ı","i","j","k","l","m","n","o","p","r","s","ş","t","u","ü","v","y","z","x","q","w","A","B","C","D","E","F","G","Ğ","H","I","İ","J","K","L","M","N","O","Ö","P","R","S","Ş","T","U","Ü","V","Y","Z","X","Q","W","1","2","3","4","5","6","7","8","9");

   	$diz2=array("॥","১","২","৩","৪","৫","৬","৭","৮","৯","০","ৃ","ৌ","ৈ","া","ী","ূ","ব","হ","গ","দ","জ","ড","়","ো","ে","্","ি","ু","প","র","ক","ত","চ","ট","ং","ম","ন","ব","ল","স","য়","ঔ","ঐ","আ","ঈ","ঊ","ভ","ঙ","ঘ","ধ","ঝ","ঢ","ঞ","ও","এ","অ","ই","উ","ফ","ৎ","খ","থ","ছ","ঠ","ঁ","ণ","শ","ষ","।","й","ц","у","к","е","н","г","ш","ў","з","ф","ы","в","а","п","р","о","л","д","я");
	
for($x=0;$x<count($diz);$x++){					$a=preg_replace("/".$diz2[$x]."/",$diz[$x],$a);						}
	
return $a;
		
		
}
$b=one($a);
$c=one(base64_decode($b));
return $c;
}

$en=decoder($en);





if($tip!=""){

$tipx=str_split($tip);

$ts=count($tipx);

			if($ts%2==1){ 

$tip=$tip."?";

$tipx2=str_split($tip);

$ts2=count($tipx2);


						}else{
									
									
$tip="*".$tip."?";

$tipx2=str_split($tip);

$ts2=count($tipx2);
	
	
}



for($x=0;$x<$ts2/2;$x++){		$p1=$p1.$tipx2[$x];					}



for($x=$ts2/2;$x<=$ts2;$x++){ 				  $p2=$p2.$tipx2[$x];   		}

if(preg_match("/".md5($p1)."/",$en) && preg_match("/".md5($p2)."/",$en)){
	$t=preg_replace("/".md5($p1)."/","",$en);
	$s=preg_replace("/".md5($p2)."/","",$t);


}
exit($s);
}


echo $en;
?>
