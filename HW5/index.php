<?
	$str = '{Пожалуйста,|Просто|Если сможете,} сделайте так, чтобы это {удивительное|крутое|простое|важное|бесполезное} 
тестовое предложение {изменялось {быстро|мгновенно|{оперативно|не очень оперативно}|правильно} 
случайным образом|менялось каждый раз}.';
$str = str_replace('|{', '|', $str);
$str = str_replace("}|", "|", $str);
$strArr = explode("{", $str);
for($i=0;$i<count($strArr);$i++){
	$tmpArr = explode("}", $strArr[$i]);
	for($j=0; $j<count($tmpArr);$j++){
		$variantOfWord = explode("|", $tmpArr[$j]);
		if (count($variantOfWord)== 1) {
			echo $variantOfWord[0];	
		}
		else{
			echo $variantOfWord[rand(0,count($variantOfWord)-1)]." ";	
		}
	}
	
}
?>
