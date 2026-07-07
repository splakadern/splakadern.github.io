const heart = document.getElementById("heart");


const rows = [
"                 i love zaika",
"            i love zaika   i love emee",
"        i love zaika i love emee i love kakang",
"     i love zaika i love emee i love kakang",
"   i love zaika i love emee i love kakang",
" i love zaika i love emee i love kakang",
"i love zaika i love emee i love kakang",
" i love zaika i love emee i love kakang",
"  i love zaika i love emee i love kakang",
"    i love zaika i love emee i love kakang",
"       i love zaika i love emee",
"          i love kakang",
"             i love zaika",
"                i love emee",
"                   i love kakang"
];


let row = 0;


function printLine(text){

    let div=document.createElement("div");
    div.className="line";
    heart.appendChild(div);


    let char=0;


    let timer=setInterval(()=>{

        div.textContent += text[char];

        char++;


        if(char >= text.length){

            clearInterval(timer);

            row++;

            setTimeout(()=>{
                if(row < rows.length){
                    printLine(rows[row]);
                }
                else{
                    setTimeout(()=>{
                        heart.innerHTML="";
                        row=0;
                        printLine(rows[row]);
                    },3000);
                }

            },120);

        }

    },45);

}


printLine(rows[row]);
