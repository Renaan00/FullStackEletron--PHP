function exibir_categoria(categoria){

	let elementos = document.getElementsByClassName("box_produto");
	for (let i = 0; i < elementos.length; i++) {
		if (categoria == elementos[i].id){
			elementos[i].style = "display:inline-block; position:center";
		}else{
			elementos[i].style = "display:none";
		}
	}
}

let todosProdutos = () => {  

	let elementos = document.getElementsByClassName("box_produto");
	for (let i = 0; i < elementos.length; i++) {
		elementos[i].style = "display:inline-block; position:center";
	}
}

let sobreCategoria = (cat) => {
	cat.style = "color:red; font-size:15px"
} 

let foraCategoria = (cat) => {
	cat.style = "color:black"
}

let zoomProduto = (imagem) => {
	if (imagem.width == "240") {
		imagem.width = "120";
	}else{
		imagem.width = "240";
	}
}