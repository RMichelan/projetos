
function fMasc(objeto, mascara) {
	obj=objeto
	masc=mascara
	setTimeout("fMascEx()",1)
}

function fMascEx() {
	obj.value=masc(obj.value)
}

function mTel(tel) {
	tel=tel.replace(/\D/g,"")
	tel=tel.replace(/^(\d)/,"($1")
	tel=tel.replace(/(.{3})(\d)/,"$1)$2")
	if(tel.length == 9) {
		tel=tel.replace(/(.{1})$/,"-$1")
	} else if (tel.length == 10) {
		tel=tel.replace(/(.{2})$/,"-$1")
	} else if (tel.length == 11) {
		tel=tel.replace(/(.{3})$/,"-$1")
	} else if (tel.length == 12) {
		tel=tel.replace(/(.{4})$/,"-$1")
	} else if (tel.length > 12) {
		tel=tel.replace(/(.{4})$/,"-$1")
	}
	return tel;
}

function mCNPJ(cnpj){
	cnpj=cnpj.replace(/\D/g,"")
	cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
	cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
	cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
	cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
	return cnpj
}

function mAgencia(agencia){
	agencia=agencia.replace(/\D/g,"")
	agencia=agencia.replace(/^(\d{3})(\d)/,"$1-$2")
	return agencia
}

function mConta(conta){
	conta=conta.replace(/\D/g,"")
	conta=conta.replace(/^(\d{2})(\d)/,"$1.$2")
	conta=conta.replace(/\.(\d{3})(\d)/,".$1-$2")
	return conta
}