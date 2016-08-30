<html>

<head>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<title>
Yabanci Dizi Bul
</title>
</head>
<body style=background-color:#232323>
<div class=header style="height: 20%">

</div>





<div class="container" style="text-align: center; font-family: sans-serif; color: gray;  ">
    <div class="row">
        <div class="col-sm-12" >
       

Dizi Adi:
<input type="text" list="browsers" id="wtf" style="border-radius:10px; color: black;" />
<datalist id="browsers">
<option value="Band Of Brothers">
<option value="Breaking Bad">
<option value="Game Of Thrones">
<option value="The Wire">
<option value="Sherlock">
<option value="True Detective">
<option value="Stranger Things">
<option value="The Sopranos">
<option value="Narcos">
<option value="The Night Of">
<option value="Fargo">
<option value="House Of Cards">
<option value="Ash vs Evil Dead">
<option value="Arrested Development">
<option value="Making A Murderer">
<option value="Better Call Saul">
<option value="Dexter">
<option value="The O.Z">
<option value="Rome">
<option value="Daredevil">
<option value="Battlestar Galactica">
<option value="House M.D">
<option value="Preache">
<option value="Peaky Blinders">
<option value="Mr. Robot">
<option value="Deadwood">
<option value="The Night Manager">
<option value="Justified">
<option value="Lucifer">
<option value="Friday Night Lights">
<option value="Mad Man">
<option value="Suits">
<option value="Shameless">
<option value="Sons Of Anarchy">
<option value="Luther">
<option value="Supernatural">
<option value="Bron/Broen">
<option value="Hannibal">
<option value="Boardwalk Empire">
<option value="Vikings">
<option value="Entourage">
<option value="The Newsroom">
<option value="Louie">
<option value="The Walking Dead">
<option value="Spartacus">
<option value="Master Of None">
<option value="Utopia">
<option value="Prison Break">
<option value="Silicon Valley">
<option value="Lost">
<option value="Person Of Interest">
<option value="The 24">
<option value="Outlander">
<option value="Fringe">
<option value="The Big Bang Theory"> 
<option value="Homeland">
<option value="Sense8">
<option value="HIMYM">
<option value="Misfits">
<option value="Banshee">
<option value="The Americans">
</datalist> 



<br></br>

Sezon:



<input type="number" name="season" min="1" max="10" id="sezon" style="width:7%; border-radius:10%;"/>

</br>
<br>
Bolum:

<input type="number" name="season" min="1" max="25" id="bolum" style="width:7%; border-radius:10%;" />
<br></br>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
 <input type="button" name="submit" value="getir" style="background-color: green; color:pink; border-radius: 10%;" onclick="kk();">
 </form>
          </div>
        </div>
        
       
        
        
        
        
        
        </div>
  



 
 <script type="text/javascript">
    var lolz;
    function onload() { 
        wtf = document.getElementById('wtf');
        sezon=document.getElementById('sezon');
        sezon=document.getElementById('bolum');
    }
    function kk(){
   var show="dizist.net/izle/";
   var nam=wtf.value;
var res= nam.split(" ");   

for (i=0;i<res.length;i++) {
	show=show+res[i]+"-";
}
   show=show+sezon.value+"-"+"sezon"+"-"+bolum.value+"-"+"bolum";
       // alert(wtf.value+bolum.value+sezon.value);
       // alert(show);
      // document.write(show);
  //   window.location = "http://"+show;

show= "http://"+show;
    window.location = "generate.php?ra="+show;





}
</script>
</div>
</div>
</body>


</html>
