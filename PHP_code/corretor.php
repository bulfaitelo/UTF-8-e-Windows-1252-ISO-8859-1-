<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Corretor UTF-8 ~ Windows-1252 </title>
</head>
<body>

<?php

 /**
  * Este código tem a função de repara os erros ao exportar arquivos em URF-8 ou Windos-1252
  * @author Thiago Rodigues (Bulfaitelo) @bulfaitelo
  * @copyright 2016 - Rodries Informatica
  * @link http://bulfaitelo.com.br/
  * @version 0.0.1
  */

// OBS. o vetor é relacionado a chave do vetor em paralelo, então ao remover ou adicionar alguma valor ao vetor atente para a posição do mesmo no vetor paralelo. 
// Vetor com os caracteres com problemas. 
$vetorStringProblen = [
'Ã€', 'Ã‚', 'Ãƒ', 'Ã„', 'Ã…', 'Ã†', 'Ã‡', 'Ãˆ', 'Ã‰', 'ÃŠ', 'Ã‹', 'ÃŒ', 'Ã ', 'ÃŽ', 'Ã ', 'Ã ', 'Ã‘', 'Ã’', 'Ã“', 'Ã”', 'Ã•', 'Ã–', 'Ã—', 'Ã˜', 'Ã™', 'Ãš', 'Ã›', 'Ãœ', 'Ã ', 'Ãž', 'ÃŸ', 'Ã ', 'Ã¡', 'Ã¢', 'Ã£', 'Ã¤', 'Ã¥', 'Ã¦', 'Ã§', 'Ã¨', 'Ã©', 'Ãª', 'Ã«', 'Ã¬', 'Ã­', 'Ã®', 'Ã¯', 'Ã°', 'Ã±', 'Ã²', 'Ã³', 'Ã´', 'Ãµ', 'Ã¶', 'Ã·', 'Ã¸', 'Ã¹', 'Ãº', 'Ã»', 'Ã¼', 'Ã½', 'Ã¾', 'Ã¿', 'Ã',
];

// Vetor respctico com os caracteres corretos.
$vetorStringCorret = [
'À', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', '×', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'Þ', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', '÷', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'þ', 'ÿ', 'Á',
];
echo "<h2>Iniciando a analise e correção do arquivo</h2>";
// Iniciando a abertura do Arquivos a serem analizados e criados
$file_name = "test.txt";

$file = fopen($file_name, "r") or die ("Arquivo não encontrado!");
$file_output = fopen("Output_".$file_name, "w") or die ("Arquivo não criado!");

while(!feof($file)){
	
	$strTratada =  fgets($file)	;
	// tratando linha conforme o sua referencia no vetor.
	$strTratada = str_replace($vetorStringProblen, $vetorStringCorret, $strTratada);	
	fwrite($file_output, $strTratada);
}

fclose($file_output);
fclose($file);

echo "<h2>Concluido!</h2>";

?>
	
</body>
</html>