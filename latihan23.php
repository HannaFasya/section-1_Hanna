<script>
function hitung(){
    x=document.getElementById('angka').value;
    y="";
    for(i=0;i<=x;i++){
        y=y+i+"<br>";
    }
    document.getElementById('tampil').innerHTML=y;
}
</script>
<style>
body{
    background-color: blue;
}
input{
    background-color: red;
}
.test{
    background-color: aqua;
    border-radius: 10px;
}
.abd{
    background-color:purple;
    border-radius: 15px;
    color: aliceblue;
}
</style>

<html>
    <body>
    <input type="text" class="abd" id=angka>
    <input type="button" value="Button" onclick="hitung()">
    <div id="tampil"></div>
    </body>
</html>