//Команды "Умного одногруппника"
<?php
include 'files/img.php';
include 'files/labs.php';

function raspisan($chat_id){
	sendPhoto($chat_id, FILE_RASP); 	
	}
function today(){
	$nedel = strftime("%W", time());
	$data = strftime("%a", time());
	if (($nedel+1)%2!=0) 
		switch ($data) {
			case 'Mon':	return "11:00 - 12:35 Современное производство и окружающая среда(ЛК)\n13:15 - 14:50 Обмен данными в корпоративных сетях(ЛК)";
   			case 'Tue':	return "11:00 - 12:35 Иностранный язык(ПЗ)";
   			case 'Wed':	return "9:15-10:50 Вычислительные измерительные приборы\n11:00 - 12:35 Кросс-платформенное программирование (Лаб)\nЭлективные курсы по физической культуре";
  			case 'Thu': return "День самоподготовки!";
   			case 'Fri':	return "9:15-11:00 Правоведение (ЛК)\n11:00 - 12:35 Правоведение(ПЗ)";
 			case 'Sat':	return "9:15-10:50 Технология программирования";
			case 'Sun': return "Выходной!";
			}
	else {
		switch ($data) {
			case 'Mon':	return "11:00 - 12:35 Современное производство и окружающая среда(ЛК)\n13:15 - 14:50 Обмен данными в корпоративных сетях(ЛК)";
   			case 'Tue':	return "09:15 - 12:35 Иностранный язык(ПЗ)";
   			case 'Wed':	return "9:15-10:50 Вычислительные измерительные приборы\n11:00 - 12:35 Кросс-платформенное программирование (Лаб)\nЭлективные курсы по физической культуре";
  			case 'Thu': return "День самоподготовки!";
   			case 'Fri':	return "Выходной!";
 			case 'Sat':	return "Выходной!";
			case 'Sun': return "Выходной!";
			}
	}
	}
function tomorrow(){
	$nedel = strftime("%W", time());
	$data = strftime("%a", time());
	if (($nedel+1)%2!=0) 
		switch ($data) {
			case 'Mon':	return "11:00 - 12:35 Иностранный язык(ПЗ)";
   			case 'Tue':	return "9:15-10:50 Вычислительные измерительные приборы\n11:00 - 12:35 Кросс-платформенное программирование (Лаб)\nЭлективные курсы по физической культуре";
   			case 'Wed':	return "День самоподготовки!";
  			case 'Thu': return "9:15-11:00 Правоведение (ЛК)\n11:00 - 12:35 Правоведение(ПЗ)";
   			case 'Fri':	return "9:15-10:50 Технология программирования";
 			case 'Sat':	return "Выходной!";
			case 'Sun': return "11:00 - 12:35 Современное производство и окружающая среда(ЛК)\n13:15 - 14:50 Обмен данными в корпоративных сетях(ЛК)";
			}
	else {
		switch ($data) {
			case 'Mon':	return "09:15 - 12:35 Иностранный язык(ПЗ)";
   			case 'Tue':	return "9:15-10:50 Вычислительные измерительные приборы\n11:00 - 12:35 Кросс-платформенное программирование (Лаб)\nЭлективные курсы по физической культуре";
   			case 'Wed':	return "День самоподготовки!";
  			case 'Thu': return "Выходной!";
   			case 'Fri':	return "Выходной!";
 			case 'Sat':	return "Выходной!";
			case 'Sun': return "11:00 - 12:35 Современное производство и окружающая среда(ЛК)\n13:15 - 14:50 Обмен данными в корпоративных сетях(ЛК)";
			}
	}
	}
function week($chat_id){
        if ((strftime("%W", time())+1)%2!=0) {
			return 1;
		}
		else return 2;
	}
function labccna($chat_id, $mess){
	$i = explode("-", $mess);
	switch ($i[1]) {
		case '': sendMessage($chat_id, "Формат команды такой: /labccna-номер лабы"); break;
		case '0.0.0.1': sendFile($chat_id, TBLAB0001); break;
		case '1.0.1.2': sendFile($chat_id, TBLAB1012); break;
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		//case '-': sendFile($chat_id, TBLAB);
		}
	}
?>
