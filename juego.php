<?php
$j1=$_POST["j1"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llenar Tablero</title>
    <style>
    </style>
</head>
<body style="background-image: url(img/fbn1.jpg); background-size: cover;">
    <center>
        <h1>Ingresar Barcos</h1>
        <h4>Por favor seleccione el barco y pongalo en el tablero</h4>
        <div id="uvb" style="display:none;">
        <button id="b1v" style="margin:20px; background-color: aqua;">bote 4 espacios vertical</button>
        <button id="b2v" style="margin:20px; background-color: aqua;">bote 3 espacios vertical</button>
        <button id="b3v" style="margin:20px; background-color: aqua;">bote 2 espacios vertical</button>
        <button id="b4" style="margin:20px; background-color: aqua;">bote 1 espacios</button><br>
        <button id="b1h" style="margin:20px; background-color: aqua;">bote 4 espacios horizontal</button>
        <button id="b2h" style="margin:20px; background-color: aqua;">bote 3 espacios horizontal</button>
        <button id="b3h" style="margin:20px; background-color: aqua;">bote 2 espacios horizontal</button>

        </div>

        <div id="jug" style="display:none;">
            <form action="jugar.php?" method="POST">
                <input type="text" name="m0" id="m0" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m1" id="m1" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m2" id="m2" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m3" id="m3" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m4" id="m4" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m5" id="m5" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m6" id="m6" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m7" id="m7" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m8" id="m8" style="display:none;" value="" readonly="readonly">
                <input type="text" name="m9" id="m9" style="display:none;" value="" readonly="readonly">
                <br>
                <input type="text" name="mb0" id="mb0" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb1" id="mb1" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb2" id="mb2" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb3" id="mb3" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb4" id="mb4" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb5" id="mb5" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb6" id="mb6" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb7" id="mb7" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb8" id="mb8" style="display:none;" value="" readonly="readonly">
                <input type="text" name="mb9" id="mb9" style="display:none;" value="" readonly="readonly">
                <input type="text" name="jug" id="nj" style="display:none;" value="" readonly="readonly">
                <input type="submit" value="Enviar" style="margin:20px; background-color: aqua;">
            </form>
        </div >
        <div id="uv" style="display:none;">
        j1
            <div id="vu">
            j2
            </div>
        </div>
    </center>
    <script>
        var j=<?php echo $_GET["j"]?>;
        var d1= document.getElementById("uvb");
        var d2= document.getElementById("uv");
        var d3= document.getElementById("vu");
        var b1h= document.getElementById("b1h");
        var b2h= document.getElementById("b2h");
        var b3h= document.getElementById("b3h");
        var b4= document.getElementById("b4");
        var b1v= document.getElementById("b1v");
        var b2v= document.getElementById("b2v");
        var b3v= document.getElementById("b3v");
        var jug= document.getElementById("jug");
        document.getElementById("nj").value="<?php echo $j1;?>";
        
        var v1h=false;
        var v1v=false;
        var v2h=false;
        var v2v=false;
        var v3h=false;
        var v3v=false;
        var v4=false;

        b1h.addEventListener('click', function(){
            if(v1h==false){
                b1h.style.backgroundColor="red";
                b1v.style.backgroundColor="aqua";
                b2h.style.backgroundColor="aqua";
                b2v.style.backgroundColor="aqua";
                b3h.style.backgroundColor="aqua";
                b3v.style.backgroundColor="aqua";
                b4.style.backgroundColor="aqua";
                ba=4;
                dire="h";
                v1h=true;
                v1v=false;
                v2h=false;
                v2v=false;
                v3h=false;
                v3v=false;
                v4=false;
            }else{
                b1h.style.backgroundColor="aqua";
                ba=0;
                dire="";
                v1h=false;
            }
            console.log(ba);
            console.log(dire);
        });
        b1v.addEventListener('click', function(){
            if(v1v==false){
                b1h.style.backgroundColor="aqua";
                b1v.style.backgroundColor="red";
                b2h.style.backgroundColor="aqua";
                b2v.style.backgroundColor="aqua";
                b3h.style.backgroundColor="aqua";
                b3v.style.backgroundColor="aqua";
                b4.style.backgroundColor="aqua";
                ba=4;
                dire="v";
                v1h=false;
                v1v=true;
                v2h=false;
                v2v=false;
                v3h=false;
                v3v=false;
                v4=false;
            }else{
                b1v.style.backgroundColor="aqua";
                ba=0;
                dire="";
                v1v=false;
            }
            console.log(ba);
            console.log(dire);
        });
        b2h.addEventListener('click', function(){
            if(v2h==false){
                b1h.style.backgroundColor="aqua";
                b1v.style.backgroundColor="aqua";
                b2h.style.backgroundColor="red";
                b2v.style.backgroundColor="aqua";
                b3h.style.backgroundColor="aqua";
                b3v.style.backgroundColor="aqua";
                b4.style.backgroundColor="aqua";
                ba=3;
                dire="h";
                v1h=false;
                v1v=false;
                v2h=true;
                v2v=false;
                v3h=false;
                v3v=false;
                v4=false;
            }else{
                b1h.style.backgroundColor="aqua";
                ba=4;
                dire="";
                v2h=false;
            }
            console.log(ba);
            console.log(dire);
        });
        b2v.addEventListener('click', function(){
            if(v2v==false){
                b1h.style.backgroundColor="aqua";
                b1v.style.backgroundColor="aqua";
                b2h.style.backgroundColor="aqua";
                b2v.style.backgroundColor="red";
                b3h.style.backgroundColor="aqua";
                b3v.style.backgroundColor="aqua";
                b4.style.backgroundColor="aqua";
                ba=3;
                dire="v";
                v1h=false;
                v1v=false;
                v2h=false;
                v2v=true;
                v3h=false;
                v3v=false;
                v4=false;
            }else{
                b2v.style.backgroundColor="aqua";
                ba=4;
                dire="";
                v2v=false;
            }
            console.log(ba);
            console.log(dire);
        });
        b3h.addEventListener('click', function(){
            if(v3h==false){
                b1h.style.backgroundColor="aqua";
                b1v.style.backgroundColor="aqua";
                b2h.style.backgroundColor="aqua";
                b2v.style.backgroundColor="aqua";
                b3h.style.backgroundColor="red";
                b3v.style.backgroundColor="aqua";
                b4.style.backgroundColor="aqua";
                ba=2;
                dire="h";
                v1h=false;
                v1v=false;
                v2h=false;
                v2v=false;
                v3h=true;
                v3v=false;
                v4=false;
            }else{
                b1h.style.backgroundColor="aqua";
                ba=4;
                dire="";
                v3h=false;
            }
            console.log(ba);
            console.log(dire);
        });
        b3v.addEventListener('click', function(){
            if(v3v==false){
                b1h.style.backgroundColor="aqua";
                b1v.style.backgroundColor="aqua";
                b2h.style.backgroundColor="aqua";
                b2v.style.backgroundColor="aqua";
                b3h.style.backgroundColor="aqua";
                b3v.style.backgroundColor="red";
                b4.style.backgroundColor="aqua";
                ba=2;
                dire="v";
                v1h=false;
                v1v=false;
                v2h=false;
                v2v=false;
                v3h=false;
                v3v=true;
                v4=false;
            }else{
                b3v.style.backgroundColor="aqua";
                ba=4;
                dire="";
                v3v=false;
            }
            console.log(ba);
            console.log(dire);
        });
        b4.addEventListener('click', function(){
            if(v4==false){
                b1h.style.backgroundColor="aqua";
                b1v.style.backgroundColor="aqua";
                b2h.style.backgroundColor="aqua";
                b2v.style.backgroundColor="aqua";
                b3h.style.backgroundColor="aqua";
                b3v.style.backgroundColor="aqua";
                b4.style.backgroundColor="red";
                ba=1;
                dire="h";
                v1h=false;
                v1v=false;
                v2h=false;
                v2v=false;
                v3h=false;
                v3v=false;
                v4=true;
            }else{
                b4.style.backgroundColor="aqua";
                ba=4;
                dire="";
                v4=false;
            }
            console.log(ba);
            console.log(dire);
        });

        var botes=[];
        var lug=[];
        var x1=[];
        var y1=[];
        var ba=0;
        var dire;
        var matriz =[[],[],[],[],[],[],[],[],[],[]];
        for(let i=0;i<10;i++){
            for(let j=0;j<10;j++){
                matriz[i][j]=0;
            }
        }
        var k1=0;
        let m=0;

        var botesb=[];
        var lugb=[];
        var xb=[];
        var yb=[];
        var bab=0;
        var direb;
        var matrizb =[[],[],[],[],[],[],[],[],[],[]];
        for(let i=0;i<10;i++){
            for(let j=0;j<10;j++){
                matrizb[i][j]=0;
            }
        }
        console.log(matrizb);
        var kb=0;
        cb=4;
        db=["v","h","v","h","v"];
        bb=[1,2,3,4];

        if(j==1){
            d1.style.display="block";
            var tabla   = document.createElement("table");
            tabla.style.backgroundColor="#132130";
            var tblBody = document.createElement("tbody");
            for (var i = 0; i < 10; i++) {
                var hilera = document.createElement("tr");
                for (var j = 0; j < 10; j++) {
                    var celda = document.createElement("td");
                    celda.style.height="30px";
                    celda.style.width="30px";
                    celda.setAttribute("id", i+", "+j);
                    celda.style.backgroundColor="#1d334a";
                    celda.addEventListener('click', (e)=>{
                        let grid = e.target;
                        console.log(grid);
                        let gridID = grid.id.split(",");
                        console.log(k1);
                        console.log("Barco tamaño: "+ba)
                        colocar(parseInt(gridID[1]),parseInt(gridID[0]),ba,dire);
                        }
                    )
                    hilera.appendChild(celda);
                }
                tblBody.appendChild(hilera);
            }
            tabla.appendChild(tblBody);
            d1.appendChild(tabla);
            tabla.setAttribute("border", "2");
            tabla.setAttribute("id", "j");
            
            let nxr;
            let nyr;
            let ndr;
            let l=0;
            let ing;
            while(cb>0){
                ing=false;
                ndr=Math.floor(Math.random() * (3 - 1) + 1);
                nxr=Math.floor(Math.random() * (9 - 0) + 0);
                nyr=Math.floor(Math.random() * (9 - 0) + 0);
                console.log(ndr);
                if(db[ndr]=="h"){
                    for(let i=nxr;i<(nxr+bb[l]);i++){
                        if(matrizb[nyr][i]==0){
                            ing=true
                        }else{
                            ing=false;
                            i=11;
                        }
                    }
                    if(ing==true){
                        console.log("Barco tamaño: "+bb[l])
                        if(nxr+(bb[l]-1)<10){
                            for(let i=nxr;i<(nxr+bb[l]);i++){
                                matrizb[nyr][i]=1;
                                xb[kb]=nxr; 
                                yb[kb]=nyr;
                                botesb[kb]=bb[l];
                                lugb[kb]=db[ndr];
                            }   
                            kb++;
                            l++;
                            console.log(botesb);
                            console.log(lugb);
                            console.log(xb);
                            console.log(yb);
                            console.log(matrizb);
                            cb--;
                        }else{
                        }
                    }else{
                    }
                }else{
                    for(let i=nyr;i<(nyr+bb[l]);i++){
                        if(matrizb[i][nxr]==0){
                            ing=true
                        }else{
                            ing=false;
                            i=11;
                        }
                    }
                    if(ing==true){
                        console.log("Barco tamaño: "+bb[l])
                        if(nyr+(bb[l]-1)<10){
                            for(let i=nyr;i<(nyr+bb[l]);i++){
                                matrizb[i][nxr]=1;
                                xb[kb]=nxr; 
                                yb[kb]=nyr;
                                botesb[kb]=bb[l];
                                lugb[kb]=db[l];
                            }
                            kb++;
                            l++;
                            console.log(botesb);
                            console.log(lugb);
                            console.log(xb);
                            console.log(yb);
                            console.log(matrizb);
                            cb--;
                        }else{
                        }
                    }else{
                    }
                }
            }
            for(let a=0;a<10;a++){
                document.getElementById("mb"+a).value=matrizb[a];
            }
        }

        function colocar(x,y,b,d){
            let ing=false;
            if(b!=0){
                if(d=="h"){
                    for(let i=x;i<(x+b);i++){
                        if(matriz[y][i]==0){
                            ing=true
                        }else{
                            ing=false;
                            i=11;
                        }
                    }
                    if(ing==true){
                        console.log("Barco tamaño: "+b)
                        if(x+(b-1)<10){
                            for(let i=x;i<(x+b);i++){
                                matriz[y][i]=1;
                                x1[k1]=x; 
                                y1[k1]=y;
                                botes[k1]=b;
                                lug[k1]=d;
                                document.getElementById(y+", "+i).style.backgroundColor="blue";
                                ba=0;
                            }   
                            k1++;
                            console.log(botes);
                            console.log(lug);
                            console.log(x1);
                            console.log(y1);
                            console.log(matriz);
                            most(b);
                            for(let a=0;a<10;a++){
                                document.getElementById("m"+a).value=matriz[a];
                            }
                        }else{
                            alert("No hay suficiente espacio");
                        }
                    }else{
                        alert("Hay un barco en medio");
                    }
                }else{
                    for(let i=y;i<(y+b);i++){
                        if(matriz[i][x]==0){
                            ing=true
                        }else{
                            ing=false;
                            i=11;
                        }
                    }
                    if(ing==true){
                        console.log("Barco tamaño: "+b)
                        if(y+(b-1)<10){
                            for(let i=y;i<(y+b);i++){
                                matriz[i][x]=1;
                                x1[k1]=x; 
                                y1[k1]=y;
                                botes[k1]=b;
                                lug[k1]=d;
                                document.getElementById(i+", "+x).style.backgroundColor="blue";
                                ba=0;
                            }
                            k1++;
                            console.log(botes);
                            console.log(lug);
                            console.log(x1);
                            console.log(y1);
                            console.log(matriz);
                            most(b);
                            for(let a=0;a<10;a++){
                                document.getElementById("m"+a).value=matriz[a];
                            }
                        }else{
                            alert("No hay suficiente espacio");
                        }
                    }else{
                        alert("Hay un barco en medio");
                    }
                }
            }
        }

        function most(b){
            switch(b){
                case 4:
                    b1h.style.display="none";
                    b1v.style.display="none";
                    m++;
                    break;
                case 3:
                    b2h.style.display="none";
                    b2v.style.display="none";
                    m++;
                    break;
                case 2:
                    b3h.style.display="none";
                    b3v.style.display="none";
                    m++;
                    break;
                case 1:
                    b4.style.display="none";
                    m++;
                    break;
            }
            console.log(m);
            if(m==4){
                jug.style.display="block";
            }
        }
    </script>
</body>
</html>