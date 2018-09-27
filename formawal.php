<form action="" method="POST">
<center><h1>Genre Film dan Tempat Tujuan Wisata</h1>

<table>
	<tr>
	</tr>
	    <td>Genre Film</td>
	    <td><input type='checkbox' name='GenreFilm[]' value='Horror'>Horror<br>
            <input type='checkbox' name='GenreFilm[]' value='Action'>Action<br>
            <input type='checkbox' name='GenreFilm[]' value='Anime'>Anime<br>
            <input type='checkbox' name='GenreFilm[]' value='Thiller'>Thiller<br>
            <input type='checkbox' name='GenreFilm[]' value='Animasi'>Animasi<br>
        </td>
    <tr>
	</tr>
	    <td>Tempat Tujuan Wisata</td>
	    <td><input type='checkbox' name='TempatTujuanWisata[]' value='Bali'>Bali<br>
            <input type='checkbox' name='TempatTujuanWisata[]' value='Raja Ampat'>Raja Ampat<br>
            <input type='checkbox' name='TempatTujuanWisata[]' value='Pulau Dermawan'>Pulau Dermawan<br>
            <input type='checkbox' name='TempatTujuanWisata[]' value='Bangka Belitung'>Bangka Belitung<br>
            <input type='checkbox' name='TempatTujuanWisata[]' value='Labuan Bajo'>Labuan Bajo<br>
        </td>
    <tr>
    </tr>
       <td>Upload Foto</td>
       <td><input type="file" name="Upload Foto" placeholder="Upload Foto"></td>
    </tr>
    <tr>
    	<td>Submit</td>
    	<td><input type="submit" name="Button" value="send">
    </td>
</table>
</h1>
</center>
</form>

<?php

 if(isset($_POST['Button'])) {
  $film = $_POST['GenreFilm'];
  $travel = $_POST['TempatTujuanWisata'];

		echo "<br><br><br>";
		echo "<hr>";
    	echo "<p>";
?>


<table>
<center><h1>RESULT<h1>
 <tr>
 </tr>
 	<td><b>Film : </b></td>
<?php
    foreach ($film as $b) {
    echo $b."<br>";
    }
?>
	 </tr>
	 </td>
	 <tr>
	 </tr>
  	<td><b>Tujuan Traveling :</b></td>
 	 <td align="center">
<?php
    foreach ($travel as $c) {
    echo $c."<br>";
    }
?> 
<?php
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
          echo "<img src='gambar/$foto' style='width:200px;height:200px'>"; 
       } else {
           echo "Upload failed";
       }
   ?>
  </td>
 </tr>
</table>
 <?php  
 }
?>
