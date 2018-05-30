<DOCKTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rev="stylecheet" href="style/style_new.css">
	<title>
		Кубики в PHP
	</title>
</head>
<body >
	<div id='content'>
		<?php
			$kubik         = mt_rand(1,6);
			$kubik2        = mt_rand(1,6);
			$res_prev      = "Ваши кубики значением ";	
			$res_kubik     = array ('один' , 'два' , 'три' , 'четыре' , 'пять' , 'шесть' );
			$res_summa     = "Сумма двух кубиков равна ";
			$res_sum_kubik = array ( 'двум' , 'трем' , 'четырем' , 'пяти' , 'шести' , 'семи' , 'восьми' , 'девяти' , 'десяти' , 'одинадцати' , 'двенадцати');
			
//Использование структуры if-elseif-else			
			if ( $kubik == 1 ) {
				echo '<pre><h1>
      
  0  
     </h1>'		;} 
			elseif ($kubik == 2){
				echo '<pre><h1>
0  
      
    0</h1>';}
			elseif ($kubik == 3){
				echo '<pre><h1>
0  
  0 
    0</h1>';}
			elseif ($kubik == 4){
				echo '<pre><h1>
0   0
   
0   0</h1>';}
			elseif ($kubik == 5){
				echo '<pre><h1>
0   0
  0			   
0   0</h1>';}
			elseif ($kubik == 6){
				echo '<pre><h1>
0   0
0   0
0   0</h1>';}

			if ( $kubik2 == 1 ) {
				echo '<pre><h1>
      
  0  
     </h1>'		;} 
			elseif ($kubik2 == 2){
				echo '<pre><h1>
0  
      
    0</h1>';}
			elseif ($kubik2 == 3){
				echo '<pre><h1>
0  
  0 
    0</h1>';}
			elseif ($kubik2 == 4){
				echo '<pre><h1>
0   0
   
0   0</h1>';}
			elseif ($kubik2 == 5){
				echo '<pre><h1>
0   0
  0			   
0   0</h1>';}
			elseif ($kubik2 == 6){
				echo '<pre><h1>
0   0
0   0
0   0</h1>';}
			
			echo '<br>';
			echo $res_prev;
		
		
//Использование конструкции switch		
			switch ($kubik){
				case 1: echo $res_kubik [0]; break;
				case 2: echo $res_kubik [1]; break;
				case 3: echo $res_kubik [2]; break;
				case 4: echo $res_kubik [3]; break;
				case 5: echo $res_kubik [4]; break;
				default : echo $res_kubik [5];
			}
			
			switch ($kubik2){
				case 1: echo ' и ' . $res_kubik [0]; break;
				case 2: echo ' и ' . $res_kubik [1]; break;
				case 3: echo ' и ' . $res_kubik [2]; break;
				case 4: echo ' и ' . $res_kubik [3]; break;
				case 5: echo ' и ' . $res_kubik [4]; break;
				default : echo ' и ' . $res_kubik [5];	
			}
			
			echo '<br>';
			
			switch ($kubik + $kubik2){
				case 2: echo $res_summa . $res_sum_kubik [0]; break;
				case 3: echo $res_summa . $res_sum_kubik [1]; break;
				case 4: echo $res_summa . $res_sum_kubik [2]; break;
				case 5: echo $res_summa . $res_sum_kubik [3]; break;
				case 6: echo $res_summa . $res_sum_kubik [4]; break;
				case 7: echo $res_summa . $res_sum_kubik [5]; break;
				case 8: echo $res_summa . $res_sum_kubik [6]; break;
				case 9: echo $res_summa . $res_sum_kubik [7]; break;
				case 10: echo $res_summa . $res_sum_kubik [8]; break;
				case 11: echo $res_summa . $res_sum_kubik [9]; break;
				default : echo $res_summa . $res_sum_kubik [10];
			}
			
			
		?>
	</div>
	<!--подсмотренно в интернете js еще не изученный материал-->
<input type="button" value="Новый результат" onClick="window.location.reload()">  

		
	</div>
	
</body>
</html>
