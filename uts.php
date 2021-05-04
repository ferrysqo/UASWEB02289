 <html>   
 <body>   
 <?php  
 $file = fopen("Data.txt","r");  
 while(! feof($file))  
  {  
  echo fgets($file). "<br />";  
  }  
 fclose($file);  
 ?>  
 
 </body>   
 </html> 
 
 
  <p align="center">
 	   <?php
	   
print ("Data Pemantauan Covid19 Wilayah DKI Jakarta <br>");
print ("Per"); 

$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);

echo '' . $date->format(' d M Y H:i:s') . '<br/>';

print ("Achmad Ferrysqo Irawan/1811401138 <br>");

?>

    <table border="1" width="600px" align="center">

       <thead>

       <tr>
	   
           <th>positif</th>

           <th>dirawat</th>
		   
		   <th>sembuh</th>
		   
		   <th>Meninggal</th>

       </tr>

       </thead>


       <tbody>

       <tr>

            <th>411.157</th>

           <th>3.537</th>
		   
		   <th>397.349</th>
		   
		   <th>6.788</th>
		   		   
       </tr>

       </tr>
	   

</tbody>


</table>


</body>

</html>