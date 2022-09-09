function toast() {
    const divToast = document.getElementById('toast')
    const div = document.createElement('div')
    const p = document.createElement('p')
    p.style.textAlign = 'center'
    p.style.marginTop = '13px'
    div.append(p);
    divToast.append(div);

    p.innerHTML = 'Produto adicionado com sucesso!'
    setTimeout(function () {
        div.innerHTML = ''
    }, 4000);

}
function toast_destroy() {
    const divToast = document.getElementById('toast-carrinho')
    const div = document.createElement('div')
    const p = document.createElement('p')
    p.style.textAlign = 'center'
    p.style.marginTop = '13px'
    div.append(p);
    divToast.append(div);

    p.innerHTML = 'Produto removido com sucesso!'
    setTimeout(function () {
        div.innerHTML = ''
    }, 4000);

}
function toast_finalizar_compora() {
    const divToast = document.getElementById('toast-pagamento')
    const div = document.createElement('div')
    const p = document.createElement('p')
    p.style.textAlign = 'center'
    p.style.marginTop = '13px'
    div.append(p);
    divToast.append(div);

    p.innerHTML = 'Pagamento realizado com sucesso!'
    setTimeout(function () {
        div.innerHTML = ''
    }, 4000);

}

function ResetCampos()
{ for (var o = document.getElementsByTagName("input"), e = 0; e < o.length; e++)"text" == o[e].type && (o[e].style.backgroundColor = "", o[e].style.borderColor = "") } function coresMask(o) { var e = o.value, r = e.length, t = o.maxLength; 0 == r ? (o.style.borderColor = "", o.style.backgroundColor = "") : r < t ? (o.style.borderColor = corIncompleta, o.style.backgroundColor = corIncompleta) : (o.style.borderColor = corCompleta, o.style.backgroundColor = corCompleta) } function mascara(o, e, r, t) { var l = e.selectionStart, a = e.value; a = a.replace(/\D/g, ""); var s = a.length, c = o.length; window.event ? id = r.keyCode : r.which && (id = r.which), cursorfixo = !1, l < s && (cursorfixo = !0); var n = !1; if ((16 == id || 19 == id || id >= 33 && id <= 40) && (n = !0), ii = 0, mm = 0, !n) { if (8 != id) for (e.value = "", j = 0, i = 0; i < c && ("#" == o.substr(i, 1) ? (e.value += a.substr(j, 1), j++) : "#" != o.substr(i, 1) && (e.value += o.substr(i, 1)), 8 == id || cursorfixo || l++, j != s + 1); i++); t && coresMask(e) } cursorfixo && !n && l--, e.setSelectionRange(l, l) } var corCompleta = "#99ff8f", corIncompleta = "#eff70b";

var corCompleta = ""
var corIncompleta = ""

function ResetCampos(){
    var textFields = document.getElementsByTagName("input");
        for(var i=0; i < textFields.length; i++){
        if(textFields[i].type == "text"){
            textFields[i].style.backgroundColor = "";
            textFields[i].style.borderColor = "";
        }
    }
}

function coresMask(t){
	var l = t.value;
	var m = l.length;
	var x = t.maxLength;
	if(m==0){
		t.style.borderColor="";
		t.style.backgroundColor="";
	}
	else if(m<x){
		t.style.borderColor=corIncompleta;
		t.style.backgroundColor=corIncompleta;
	}else{
		t.style.borderColor=corCompleta;
		t.style.backgroundColor=corCompleta;
	}
}

function mascara(m,t,e,c){
	var cursor = t.selectionStart;
	var texto = t.value;
	texto = texto.replace(/\D/g,'');
	var l = texto.length;
	var lm = m.length;
	if(window.event) {
	    id = e.keyCode;
	} else if(e.which){
	    id = e.which;
	}
	cursorfixo=false;
	if(cursor < l)cursorfixo=true;
	var livre = false;
	if(id == 16 || id == 19 || (id >= 33 && id <= 40))livre = true;
 	ii=0;
 	mm=0;
 	if(!livre){
	 	if(id!=8){
		 	t.value="";
		 	j=0;
		 	for(i=0;i<lm;i++){
		 		if(m.substr(i,1)=="#"){
		 			t.value+=texto.substr(j,1);
		 			j++;
		 		}else if(m.substr(i,1)!="#"){
		 			t.value+=m.substr(i,1);
		 		}
		 		if(id!=8 && !cursorfixo)cursor++;
		 		if((j)==l+1)break;

		 	}
	 	}
	 	if(c)coresMask(t);
 	}
 	if(cursorfixo && !livre)cursor--;
 	t.setSelectionRange(cursor, cursor);
}
