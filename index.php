<?php
$words = [
    "i love zaika",
    "i love emee",
    "i love kakang",
    "i love zaika",
    "i love emee",
    "i love kakang"
];

$wordString = implode(" • ", $words);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Love Heart</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #120014;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        canvas {
            background: transparent;
        }
    </style>
</head>

<body>

<canvas id="heart" width="700" height="700"></canvas>

<script>
const canvas = document.getElementById("heart");
const ctx = canvas.getContext("2d");

const words = <?php echo json_encode($wordString); ?>;

ctx.textAlign = "center";
ctx.textBaseline = "middle";

function heartEquation(x, y) {
    let a = x * x + y * y - 1;
    return (a*a*a - x*x*y*y*y) <= 0;
}

let points = [];

for (let y = -1.2; y <= 1.2; y += 0.035) {
    for (let x = -1.2; x <= 1.2; x += 0.035) {
        if (heartEquation(x, y)) {
            points.push({
                x: x * 260 + 350,
                y: -y * 260 + 350
            });
        }
    }
}

let index = 0;

function drawHeart() {
    ctx.clearRect(0,0,canvas.width,canvas.height);

    ctx.fillStyle = "#ff3366";
    ctx.shadowColor = "#ff0066";
    ctx.shadowBlur = 15;

    ctx.font = "bold 15px Arial";

    points.forEach((p, i) => {
        let text = words.substring(
            (i * 5) % words.length,
            ((i * 5) % words.length) + 18
        );

        ctx.fillText(text, p.x, p.y);
    });

    // smooth glowing outline
    ctx.shadowBlur = 30;
    ctx.strokeStyle = "rgba(255,80,150,.5)";
    ctx.lineWidth = 2;

    ctx.beginPath();
    for (let t = 0; t <= Math.PI * 2; t += 0.01) {
        let x = 16 * Math.pow(Math.sin(t),3);
        let y = 13*Math.cos(t)
              - 5*Math.cos(2*t)
              - 2*Math.cos(3*t)
              - Math.cos(4*t);

        x = x * 15 + 350;
        y = -y * 15 + 350;

        if (t === 0)
            ctx.moveTo(x,y);
        else
            ctx.lineTo(x,y);
    }
    ctx.closePath();
    ctx.stroke();

    requestAnimationFrame(drawHeart);
}

drawHeart();

</script>

</body>
</html>
