function reussite(response, target) {
    console.log(response);
    if (response == 0) {
        alert("Vous ne pouvez pas faire ça");
    } else {
        if (joueur === "joueur1") {
            $('#' + target).addClass("stone-black");
            joueur = "joueur2";
        } else {
            $('#' + target).addClass("stone-white");
            joueur = "joueur1";
        }
        let capture = JSON.parse(response);
        for (let i in capture) {
            $('#' + capture[i]['abs'] + "-" + capture[i]['ord']).removeClass("stone-black stone-white");
        }
    }
}

function echec() {
    alert("La connexion avec le serveur n'a pas abouti");
}

var joueur = "joueur1";

$(document).ready(function () {
    $("#line-0").find("td").addClass("bottom-middle");
    $("#line-8").find("td").addClass("top-middle");
    $("#1-0, #2-0, #3-0, #4-0, #5-0, #6-0, #7-0, #8-0, #9-0, #10-0, #11-0").addClass("left-middle");
    $("#1-8, #2-8, #3-8, #4-8, #5-8, #6-8, #7-8, #8-8, #9-8, #10-8, #11-8").addClass("right-middle");
    $("#0-0").addClass("bottom-left");
    $("#8-8").addClass("top-right");
    $("#0-8").addClass("bottom-right");
    $("#8-0").addClass("top-left");



    $("td").click(function () {
        var target = this.id;
        var ord = $(this).data("ord");
        var abs = $(this).data("abs");
        console.log(ord);
        console.log(abs);
        $.ajax({
            type: 'post',
            url: 'http://localhost/NetbeansProjects/Jeu-de-Go/controller/ajax-function.php',
            data: 'ord=' + ord + '&abs=' + abs + '&joueur=' + joueur,
            success: function (data) {
                reussite(data, target);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " + textStatus);
                alert("Error: " + errorThrown);
            }
        })
    });
});