function reussite(response, target) {
	if (response == 0) {
		alert("Vous ne pouvez pas faire ça");
	} else if (response == 1) {
		$('#' + target).addClass("stone-black");
	} else if (response == 2) {
		$('#' + target).addClass("stone-white");
	}
}

function echec() {
	alert("La connexion avec le serveur n'a pas abouti");
}

$(document).ready(function(){
	$("#line-0").find("td").addClass("top-middle");
	$("#line-12").find("td").addClass("bottom-middle");
	$("#1-0, #2-0, #3-0, #4-0, #5-0, #6-0, #7-0, #8-0, #9-0, #10-0, #11-0").addClass("left-middle");
	$("#1-12, #2-12, #3-12, #4-12, #5-12, #6-12, #7-12, #8-12, #9-12, #10-12, #11-12").addClass("right-middle");
	$("#0-0").addClass("top-left");
	$("#12-12").addClass("bottom-right");
	$("#0-12").addClass("top-right");
	$("#12-0").addClass("bottom-left");


	$("td").click(function (){
	    var target = this.id;
		$.ajax({
			type: 'post',
			url: 'http://bla-bla-bla-send-data.php',
			data: {
				id: target
			},
			success: reussite(response, target),
			error: echec()
		})
	});
});