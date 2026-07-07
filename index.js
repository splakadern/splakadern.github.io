const heart = document.getElementById("heart");


const words = [
    "i love zaika",
    "i love emee",
    "i love kakang"
];


// Heart mathematical coordinates
function heartShape(t){

    let x = 16 * Math.pow(Math.sin(t),3);

    let y =
    13 * Math.cos(t)
    -5 * Math.cos(2*t)
    -2 * Math.cos(3*t)
    -Math.cos(4*t);

    return {
        x:x,
        y:-y
    };
}



let points=[];


// create heart path
for(let i=0;i<140;i++){

    let t=(Math.PI*2*i)/140;

    let p=heartShape(t);

    points.push(p);

}



let index=0;



function writeHeart(){

    if(index >= points.length){
        index=0;
        heart.innerHTML="";
    }


    let p=points[index];


    let span=document.createElement("span");

    span.className="word";


    span.innerHTML =
    words[index % words.length];


    let size = heart.clientWidth;


    let x =
    size/2 +
    p.x*(size/35);


    let y =
    size/2 +
    p.y*(size/35);



    span.style.left=x+"px";
    span.style.top=y+"px";

    span.style.transform =
    "translate(-50%,-50%)";


    span.style.animationDelay =
    "0s";


    heart.appendChild(span);


    index++;


    setTimeout(writeHeart,80);

}



writeHeart();
