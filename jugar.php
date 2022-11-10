<?php
$j=$_POST["jug"];
$m0=explode(",",$_POST["m0"]);
$m1=explode(",",$_POST["m1"]);
$m2=explode(",",$_POST["m2"]);
$m3=explode(",",$_POST["m3"]);
$m4=explode(",",$_POST["m4"]);
$m5=explode(",",$_POST["m5"]);
$m6=explode(",",$_POST["m6"]);
$m7=explode(",",$_POST["m7"]);
$m8=explode(",",$_POST["m8"]);
$m9=explode(",",$_POST["m9"]);



$mb0=explode(",",$_POST["mb0"]);
$mb1=explode(",",$_POST["mb1"]);
$mb2=explode(",",$_POST["mb2"]);
$mb3=explode(",",$_POST["mb3"]);
$mb4=explode(",",$_POST["mb4"]);
$mb5=explode(",",$_POST["mb5"]);
$mb6=explode(",",$_POST["mb6"]);
$mb7=explode(",",$_POST["mb7"]);
$mb8=explode(",",$_POST["mb8"]);
$mb9=explode(",",$_POST["mb9"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugar</title>
</head>
<body style="background-image: url(img/fbn2.jpg); background-size: cover;">
    <center>
        <h1>Batalla Naval</h1>
        <h1>Tablero del jugador</h1>
        <div>
            <table id="t" style="background-color:#132130">
                <?php
                    for($i=0;$i<10;$i++){
                ?>
                    <tr>
                        <?php
                            for($j=0;$j<10;$j++){
                        ?>
                            <td style="height:30px; width:30px; background-color:#1d334a; border: solid 2px aqua;" id="<?php echo $i.', '.$j.",j";?>"></td>
                        <?php
                            }
                        ?>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
            <h2>Tablero del bot</h2>
        <div id="tb">
        </div>
    </center>
            <script>
                var m0=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m0[$i]."',"; }else{ echo "'".$m0[$i]."'"; }} ?>];
                var m1=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m1[$i]."',"; }else{ echo "'".$m1[$i]."'"; }} ?>];
                var m2=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m2[$i]."',"; }else{ echo "'".$m2[$i]."'"; }} ?>];
                var m3=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m3[$i]."',"; }else{ echo "'".$m3[$i]."'"; }} ?>];
                var m4=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m4[$i]."',"; }else{ echo "'".$m4[$i]."'"; }} ?>];
                var m5=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m5[$i]."',"; }else{ echo "'".$m5[$i]."'"; }} ?>];
                var m6=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m6[$i]."',"; }else{ echo "'".$m6[$i]."'"; }} ?>];
                var m7=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m7[$i]."',"; }else{ echo "'".$m7[$i]."'"; }} ?>];
                var m8=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m8[$i]."',"; }else{ echo "'".$m8[$i]."'"; }} ?>];
                var m9=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$m9[$i]."',"; }else{ echo "'".$m9[$i]."'"; }} ?>];
                var m=[m0,m1,m2,m3,m4,m5,m6,m7,m8,m9];
                console.log(m);
                var mb0=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb0[$i]."',"; }else{ echo "'".$mb0[$i]."'"; }} ?>];
                var mb1=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb1[$i]."',"; }else{ echo "'".$mb1[$i]."'"; }} ?>];
                var mb2=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb2[$i]."',"; }else{ echo "'".$mb2[$i]."'"; }} ?>];
                var mb3=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb3[$i]."',"; }else{ echo "'".$mb3[$i]."'"; }} ?>];
                var mb4=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb4[$i]."',"; }else{ echo "'".$mb4[$i]."'"; }} ?>];
                var mb5=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb5[$i]."',"; }else{ echo "'".$mb5[$i]."'"; }} ?>];
                var mb6=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb6[$i]."',"; }else{ echo "'".$mb6[$i]."'"; }} ?>];
                var mb7=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb7[$i]."',"; }else{ echo "'".$mb7[$i]."'"; }} ?>];
                var mb8=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb8[$i]."',"; }else{ echo "'".$mb8[$i]."'"; }} ?>];
                var mb9=[<?php for($i=0;$i<10;$i++){ if($i<9){ echo "'".$mb9[$i]."',"; }else{ echo "'".$mb9[$i]."'"; }} ?>];
                var mb=[mb0,mb1,mb2,mb3,mb4,mb5,mb6,mb7,mb8,mb9];
                console.log(mb);
                tirar=true;
                alert("Turno del jugador");
                for(let i =0;i<10;i++){
                    for(let j=0;j<10;j++){
                        if(m[i][j]==1){
                            document.getElementById(i+", "+j+",j").style.backgroundColor="blueviolet";
                        }
                    }
                }
                var barcost=0;
                var barcostb=0;
                var continuar=true;
                var dt=document.getElementById("tb");
                var tabla   = document.createElement("table");
                tabla.style.backgroundColor="#132130";
                var tblBody = document.createElement("tbody");
                for (var i = 0; i < 10; i++) {
                    var hilera = document.createElement("tr");
                    for (var j = 0; j < 10; j++) {
                    var celda = document.createElement("td");
                    celda.style.height="30px";
                    celda.style.width="30px";
                    celda.setAttribute("id", i+", "+j+",b");
                    celda.style.backgroundColor="#1d334a";
                    celda.addEventListener('click', (e)=>{
                        if(continuar==true){
                            if(tirar==true){
                                let grid = e.target;
                                console.log(grid);
                                let gridID = grid.id.split(",");
                                console.log(gridID);
                                disparo(parseInt(gridID[1]),parseInt(gridID[0]));
                            }
                        }
                        })
                    hilera.appendChild(celda);
                    }
                    tblBody.appendChild(hilera);
                }
                tabla.appendChild(tblBody);
                dt.appendChild(tabla);
                tabla.setAttribute("border", "2");
                tabla.setAttribute("id", "j");
                
                var t=document.getElementById("t");
                function agregar(e){
                }

                function disparo(x,y){
                        if(mb[y][x]=="1"){
                        alert("le has dado a un barco tira de nuevo")
                        console.log("le has dado a un barco")
                        mb[y][x]=="2";
                        document.getElementById(y+", "+x+",b").style.backgroundColor="red";
                        tirar=true
                        barcost++;
                    }else if(mb[y][x]=="2"){
                        console.log("le diste a un mismo sitio")
                        document.getElementById(y+", "+x+",b").style.backgroundColor="gray";
                        tirar=false;
                        mb[y][x]=="2";
                    }else{
                        console.log("le has dado al mar")
                        document.getElementById(y+", "+x+",b").style.backgroundColor="gray";
                        tirar=false;
                        mb[y][x]=="2";
                    }
                    ganar("<?php echo $j; ?>");
                    if(tirar!=true){
                        disparobot()
                    }

                }

                function disparobot(tb){
                    if(continuar==true){
                        do{
                        x=Math.floor(Math.random() * (9 - 0) + 0);
                        y=Math.floor(Math.random() * (9 - 0) + 0);
                        if(m[y][x]=="1"){
                            alert("Bot ha dado a un barco tira de nuevo")
                            console.log("Bot ha dado a un barco tira de nuevo")
                            m[y][x]=="2";
                            document.getElementById(y+", "+x+",j").style.backgroundColor="red";
                            tb=true;
                            barcostb++;
                        }else if(m[y][x]=="2"){
                            console.log("Bot ha dado un mismo sitio")
                            document.getElementById(y+", "+x+",j").style.backgroundColor="gray";
                            m[y][x]=="2";
                            tb=false;
                        }else{
                            console.log("Bot ha dado al mar")
                            document.getElementById(y+", "+x+",j").style.backgroundColor="gray";
                            m[y][x]=="2";
                            tb=false;
                        }
                    }while(tb==true);
                    ganarb("Bot");
                    tirar=true;
                    }
                }

                function ganar(j){
                    console.log(mb);
                    if(barcost==10){
                        alert("El "+j+" ha ganado");
                        continuar= false;
                    }else{
                        console.log("Aun hay barcos")
                        continuar=true;
                        i=10;
                        j=10;
                    }
                }
                function ganarb(t){
                    console.log(m);
                    if(barcostb==10){
                        alert("El "+j+" ha ganado");
                        continuar= false;
                    }else{
                        console.log("Aun hay barcos")
                        continuar=true;
                        i=10;
                        j=10;
                    }
                }

            </script>
</body>
</html>