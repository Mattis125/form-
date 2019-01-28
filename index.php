
<html>
<head>
<title>Formular</title>
<style>
.left {
  float: left;
  height: 400x;
  width: 200px;
  border: 3px solid  #FF0000 ;
  padding: 10px;
  margin-botton: 1px
  background-color:  #f6f6f6;
}

.center {
  padding: 5px 0;
  border: 0px solid ;
  text-align: left;

}

.below{
  float: left;
  height: 250px;
  width: 200px;
  border: 3px solid  #FF0000 ;
  padding: 10px;
  margin-top: 1px;
  background-color:  #f6f6f6;
}


</style>

</head>

<body bgcolor=#f6f6f6>

		 

		<iframe src="Vitola 100 5581334.PDF" width="1250" height="900" align="right">
		</iframe>

		
		
	<div class="left">
		<div id="webseite">
		<div id="header">
			<h1><font color=\"ff0000\" size=\"2\">User Manual</font></h1>
		</div>
		
		
		
		<div id="main">

		 
		
		<form action="index.php" method="get">
		
	 
		
			<div class="center">
	
	
			
			<p><div class="center">Seite: </div> <input type="text" name="seite" /></p>

		

			<p><div class="center">Titel: </div> <input type="text" name="titel" /></p>



			<p><div class="center">Zusammenfassung: </div> <input type="text" name="zusammenfassung" /></p>

			

			<p><div class="center">Kategorie: </div>
	
				
				<input type="checkbox" name="Kategorie[]" value="Sicherheitshinweise"> Sicherheitshinweise<br>
				
				<input type="checkbox" name="Kategorie[]" value="Wissenswert"> Wissenswert<br>
				
				<input type="checkbox" name="Kategorie[]" value="Kurzanleitung"> Kurzanleitung<br>
				
				<input type="checkbox" name="Kategorie[]" value="Nchschlageanleitung"> Nachschlageanleitung<br>
				 
				<input type="checkbox" name="Kategorie[]" value="Für den Schornsteinfeger"> Für den Schornsteinfeger<br>
				
				<input type="checkbox" name="Kategorie[]" value="Informationen"> Informationen<br>
				   
				
		
			</div>


		</p>


		<p>

		

		<p><div class="center">Schlagwort: </div> 
		
		<input type="checkbox" name="Schlagwort[]" value="Für ihr Sicherheit"> Für ihre Sicherheit<br>
		
		<input type="checkbox" name="Schlagwort[]" value="Zuerst informieren"> Zuerst informieren<br>
		
		<input type="checkbox" name="Schlagwort[]" value="Sofort bedinen"> Sofort bedinen<br>
		
		<input type="checkbox" name="Schlagwort[]" value="Komfortfunkionen nutzen"> Komfortfunkionen nutzen<br>
		
		<input type="checkbox" name="Schlagwort[]" value="Ein- und Ausschalten"> Ein- und Ausschalten<br>
		
		<input type="checkbox" name="Schlagwort[]" value="Einstellungen Raumbeheizung"> Einstellungen Raumbeheizung<br>
		
		<input type="checkbox" name="Schlagwort[]" value="Einstellungen Warmwasserbereitung"> Einstellungen Warmwasserbereitung <br>
		
		<input type="checkbox" name="Schlagwort[]" value="Weitere Einstellungen"> Weitere Einstellungen <br>
		
		<input type="checkbox" name="Schlagwort[]" value="Schornsteinfeger_Prüfschalter"> Schornsteinfeger_Prüfschalter<br>
		
		<input type="checkbox" name="Schlagwort[]" value="Was tun, wenn"> Was tun, wenn <br>
		
		<input type="checkbox" name="Schlagwort[]" value="Wartungshinweise"> Wartungshinweise <br>
		
		<input type="checkbox" name="Schlagwort[]" value="Tips zum Energiesparen"> Tips zum Energiesparen <br>
		
		<input type="checkbox" name="Schlagwort[]" value="Stichwortverzeichnis"> Stichwortverzeichnis <br>
			
			
		</div>	
	</div>
	

  <input type="submit" name="absenden" value="Absenden">
</div>
	<div class="below">
	
	
<?php


	



if(isset($_GET['seite']))
{

	if($_GET['seite']!="")
	{
print 'Seite: ' .$_GET['seite'] .'<br>';
	}	
}


if(isset($_GET['titel']))


	if($_GET['titel']!="")
	{
print 'Titel: ' .$_GET['titel'] .'<br>';
	}	



if(isset($_GET['zusammenfassung']))
{

	if($_GET['zusammenfassung']!="")
	{
print 'Zusammenfassung: ' .$_GET['zusammenfassung'] .'<br>';
	}	
}



print "Kategorie: <br>";
        if (isset($_GET['Kategorie'])){
             foreach ($_GET['Kategorie'] as $kategorie) {
                 echo $kategorie."<br>";
				}           
			}


print "Schlagwort: <br>";
         if (isset($_GET['Schlagwort'])){
             foreach ($_GET['Schlagwort'] as $schlagwort) {
                 echo $schlagwort."<br>";
             }            
         }
 
?>


</div>
</body>

</html>