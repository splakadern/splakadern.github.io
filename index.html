<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>I Love You Heart</title>

<style>
body {
    margin: 0;
    height: 100vh;
    background: #120014;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    font-family: Arial, sans-serif;
}

canvas {
    width: 700px;
    height: 700px;
}
</style>

</head>

<body>

<canvas id="heart" width="700" height="700"></canvas>

<script>

const canvas = document.getElementById("heart");
const ctx = canvas.getContext("2d");

const phrases = [
    "i love zaika",
    "i love emee",
    "i love kakang",
    "i love zaika",
    "i love emee",
    "i love kakang",
    "i love you"
];

const words = phrases.join(" • ");

let points = [];

function heartShape(x, y) {
    let a = x*x + y*y - 1;
    return (a*a*a - x*x*y*y*y) <= 0;
}


// Create heart fill points
for (let y = -1.2; y <= 1.2; y += 0.035) {
    for (let x = -1.2; x <= 1.2; x += 0.035) {

        if (heartShape(x,y)) {
            points.push({
                x: x * 260 + 350,
                y: -y * 260 + 350
            });
        }

    }
}


let offset = 0;

function draw() {

    ctx.clearRect(0,0,700,700);


    // floating glow
    ctx.shadowColor = "#ff1493";
    ctx.shadowBlur = 18;

    ctx.fillStyle = "#ff4d88";

    ctx.font = "bold 15px Arial";
    ctx.textAlign = "center";
    ctx.textBaseline = "middle";


    points.forEach((p,i)=>{

        let start = (i * 7 + offset) % words.length;

        let text = "";

        for(let j=0;j<18;j++){
            text += words[(start+j)%words.length];
        }

        ctx.fillText(
            text,
            p.x,
            p.y
        );

    });


    // heart outline
    ctx.shadowBlur = 35;
    ctx.strokeStyle = "#ff77aa";
    ctx.lineWidth = 2;

    ctx.beginPath();

    for(let t=0;t<=Math.PI*2;t+=0.01){

        let x =
        16*Math.pow(Math.sin(t),3);

        let y =
        13*Math.cos(t)
        -5*Math.cos(2*t)
        -2*Math.cos(3*t)
        -Math.cos(4*t);


        x = x*15 + 350;
        y = -y*15 + 350;


        if(t===0)
            ctx.moveTo(x,y);
        else
            ctx.lineTo(x,y);

    }

    ctx.closePath();
    ctx.stroke();


    offset += 0.3;

    requestAnimationFrame(draw);

}


draw();

</script>

</body>
</html>
