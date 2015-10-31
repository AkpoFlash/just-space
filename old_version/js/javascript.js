function on_portfolio_link(id_link,id_div){
	var elem_link = document.getElementById(id_link);
	var elem_div = document.getElementById(id_div);
	elem_div.style.display = elem_link.style.display = "block";
}

function off_portfolio_link(id_link,id_div){
	var elem_link = document.getElementById(id_link);
	var elem_div = document.getElementById(id_div);
	elem_div.style.display = elem_link.style.display = "none";
}

function over_social_icon(id, src){
	document.getElementById(id).src = "img/" + src + ".svg";
}

function out_social_icon(id, src){
	document.getElementById(id).src = "img/" + src + ".svg";
}