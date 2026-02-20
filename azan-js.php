<!DOCTYPE html>
<html>
<body style="background:black;color:white;font-size:50px;text-align:center">
<h1>🌙 Iftar Timer</h1>
<p id="time"></p>

<audio id="azan" src="https://cdn.aladhan.com/audio/adhans/azan2.mp3"></audio>

<script>
let iftar = "18:10";

setInterval(()=>{
 let now = new Date();
 let t = now.getHours().toString().padStart(2,'0') + ":" +
         now.getMinutes().toString().padStart(2,'0');
 document.getElementById("time").innerHTML = "Current Time: " + t;

 if(t === iftar){
   document.getElementById("azan").play();
 }
},1000);
</script>
</body>
</html>
