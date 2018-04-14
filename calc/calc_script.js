function c(x){
	document.getElementById("display").value = x;
}

//вывод текста
function view(x){                                          
	document.getElementById("display").value += x;  
}

//вычисление
function math(){                                            
	try{
		c(eval(document.getElementById("display").value)); 
	}
	catch(e){
		c('Ошибка');
	}
}
	
