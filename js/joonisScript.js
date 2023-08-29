function clearCanvas(){
    var t=document.getElementById("board").getContext("2d");
    t.clearRect(0, 0, 342, 393);
}

function hair(){
    var t=document.getElementById("board").getContext("2d");

    t.beginPath();
    t.strokeStyle="#FFCC00";
    t.fillStyle="yellow";
    t.lineWidth = "10";
    t.moveTo(126, 34);
    t.lineTo(111, 122);
    t.lineTo(131,75);
    t.lineTo(156,75);
    t.lineTo(178,121);
    t.lineTo(167,40);
    t.lineTo(126,34);
    t.stroke();
    t.fill();

}

function top1() {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="#bead55";
    f.fillStyle="orange";
    f.moveTo(129, 75);
    f.lineTo(158, 75);
    f.lineTo(174,119);
    f.lineTo(156,132);
    f.lineTo(141,132);
    f.lineTo(114,119);
    f.lineTo(131,76);
    f.stroke();
    f.fill();

}

function face() {

    var t = document.getElementById("board").getContext("2d");

    t.beginPath();
    t.strokeStyle = "black";
    t.lineWidth = "3";
    t.moveTo(133, 87);
    t.lineTo(144, 88);
    t.stroke();

    t.beginPath();
    t.strokeStyle = "black";
    t.lineWidth = "3";
    t.moveTo(158, 84);
    t.lineTo(148, 90);
    t.stroke();

    t.beginPath();
    t.strokeStyle = "black";
    t.lineWidth = "2";
    t.moveTo(145, 96);
    t.lineTo(145, 106);
    t.stroke();


    t.beginPath();
    t.fillStyle = "#000000";
    t.arc(139, 95, 5, 0, Math.PI * 2, true);
    t.fill();

    t.beginPath();
    t.fillStyle = "#FFFFFF";
    t.arc(139, 96, 2, 0, Math.PI * 2, true);
    t.fill();


    t.beginPath();
    t.fillStyle = "#000000";
    t.arc(153, 97, 5, 0, Math.PI * 2, true);
    t.fill();

    t.beginPath();
    t.fillStyle = "#FFFFFF";
    t.arc(153, 97, 2, 0, Math.PI * 2, true);
    t.fill();


    t.beginPath();
    t.fillStyle="#FF0000";
    t.arc(158, 111, 5, 0, Math.PI*2, true);
    t.fill();

    t.beginPath();
    t.fillStyle="#FF0000";
    t.arc(137, 112, 5, 0, Math.PI*2, true);
    t.fill();

    t.beginPath();
    t.fillStyle = "#000000";
    t.moveTo(158, 111);
    t.bezierCurveTo(137, 112, 155, 111, 137, 111);
    t.stroke();
}


function colar() {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(229,158,59,0.97)";
    f.fillStyle="orange";
    f.moveTo(130, 129);
    f.lineTo(130, 144);
    f.lineTo(169,144);
    f.lineTo(166,128);
    f.lineTo(159,130);
    f.lineTo(139,133);
    f.lineTo(129,125);
    f.stroke();
    f.fill();

}

function body1() {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(120,117,111,0.97)";
    f.fillStyle="black";
    f.lineWidth = "10";
    f.moveTo(118, 144);
    f.lineTo(111, 263);
    f.lineTo(181,265);
    f.lineTo(176,137);
    f.lineTo(117,142);
    f.stroke();
    f.fill();

}


function leg1() {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(18,18,208,0.97)";
    f.fillStyle="blue";
    f.moveTo(111, 258);
    f.lineTo(110, 363);
    f.lineTo(142,364);
    f.lineTo(142,295);
    f.lineTo(153,295);
    f.lineTo(153,369);
    f.lineTo(185,369);
    f.lineTo(180,261);
    f.lineTo(111,258);
    f.stroke();
    f.fill();

}



function rightarm() {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(120,117,111,0.97)";
    f.fillStyle="black";
    f.lineWidth= "2";
    f.moveTo(105, 135);
    f.lineTo(82, 198);
    f.lineTo(72,250);
    f.lineTo(91,256);
    f.lineTo(99,202);
    f.lineTo(110,171);
    f.lineTo(115,135);
    f.stroke();
    f.fill();

    f.beginPath();
    f.arc(80,258, 10, Math.PI/4, Math.PI/1.2 ,true);
    f.strokeStyle="#bead55";
    f.lineCap="round";
    f.lineWidth= "10";
    f.stroke();

}

function leftarm() {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(120,117,111,0.97)";
    f.fillStyle="black";
    f.lineWidth= "2";
    f.moveTo(184, 143);
    f.lineTo(211, 192);
    f.lineTo(200,206);
    f.lineTo(183,182);
    f.lineTo(183,145);
    f.stroke();
    f.fill();

    f.beginPath();
    f.arc(204,211, 10, Math.PI/4, Math.PI/1.2 ,true);
    f.strokeStyle="#bead55";
    f.lineCap="round";
    f.lineWidth= "10";
    f.stroke();

}


function tunic () {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(18,18,208,0.97)";
    f.fillStyle="red";
    f.lineWidth= "10";
    f.moveTo(100, 139);
    f.lineTo(78, 168);
    f.lineTo(54,294);
    f.lineTo(56,338);
    f.lineTo(105,339);
    f.lineTo(186,339);
    f.lineTo(247,309);
    f.lineTo(232,222);
    f.lineTo(183,133);
    f.lineTo(129,137);
    f.lineTo(100,139);
    f.stroke();
    f.fill();

}

function hammer () {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(224,219,219,0.97)";
    f.fillStyle="grey";
    f.lineWidth= "5";
    f.moveTo(192, 144);
    f.lineTo(217, 109);
    f.lineTo(260,167);
    f.lineTo(229,210);
    f.lineTo(218,191);
    f.lineTo(191,255);
    f.lineTo(182,243);
    f.lineTo(207,178);
    f.lineTo(192,145);

    f.stroke();
    f.fill();

}



function lighting () {

    var f=document.getElementById("board").getContext("2d");

    f.beginPath();
    f.strokeStyle="rgba(13,13,234,0.97)";
    f.lineWidth= "5";
    f.moveTo(24, 69);
    f.lineTo(7, 95);
    f.lineTo(30,103);
    f.lineTo(15,126);
    f.moveTo(11, 117);
    f.lineTo(15,126);
    f.moveTo(29, 127);
    f.lineTo(15,126);
    f.stroke();

    f.beginPath();
    f.strokeStyle="rgba(2,2,243,0.97)";
    f.lineWidth= "5";
    f.moveTo(298, 87);
    f.lineTo(283, 126);
    f.lineTo(303,130);
    f.lineTo(294,165);
    f.moveTo(287, 154);
    f.lineTo(293,165);
    f.moveTo(307, 156);
    f.lineTo(293,165);
    f.stroke();

    f.beginPath();
    f.strokeStyle="rgba(2,2,243,0.97)";
    f.lineWidth= "5";
    f.moveTo(294, 243);
    f.lineTo(282, 283);
    f.lineTo(302,283);
    f.lineTo(299,326);
    f.moveTo(286, 313);
    f.lineTo(298,326);
    f.moveTo(310, 316);
    f.lineTo(298,326);
    f.stroke();

    f.beginPath();
    f.strokeStyle="rgba(82,82,219,0.97)";
    f.lineWidth= "5";
    f.moveTo(24, 69);
    f.lineTo(7, 95);
    f.lineTo(30,103);
    f.lineTo(15,126);
    f.moveTo(11, 117);
    f.lineTo(15,126);
    f.moveTo(29, 127);
    f.lineTo(15,126);
    f.stroke();

}




function koik(){
    tunic();
    top1();
    hair();
    face();
    colar();
    body1();
    leg1();
    rightarm();
    leftarm();
    hammer();
    lighting()
}