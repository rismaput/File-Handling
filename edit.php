<?php
$file = "data.txt";
$data = file_get_contents($file);

$rowdit = $_GET['row'];
$rowdel = $_GET['row'];
$baris = explode("[R]", $data);
for($i =0; $i<count($baris)-1; $i++) {
    //echo $b . "<br>";

    $col = explode("|F|", $baris[$i]);
    $nama = "$col[0]";
    $email = "$col[1]";
    $tel = "$col[2]";


  }
 ?>
<?php
 ?>

 <!DOCTYPE html>
 <html>
 <link rel="stylesheet" type="text/css" href="css.css">
     <body>
         <form action="insertedit.php" method="POST">
         <div class="border">
         <p>
             Nama: <input type="text"
                     name="nama" value = "<?php echo htmlspecialchars($nama);?>" ><br><br>
             Email: <input type="email"
                     name="email" value ="<?php echo htmlspecialchars($email);?>"><br><br>
             Phone: <input type="tel"
                     name="phone" value= "<?php echo htmlspecialchars($tel);?>"><br><br>
             <input type="submit" value="UPDATE !">
             </p>
             </div>
         </form>
     </body>
 </html>

 <?php

 $databaru = "";
 for($i = 0; $i<count($baris)-1; $i++) {
     if($i == $rowdel) continue;
     $databaru .= $baris[$i] . "[R]";
 }
 $databaru2 = "";
 for($i = 0; $i<count($baris)-1; $i++) {
     if($i == $rowdit) {
       $databaru2 .= $baris[$i] . "[R]";
       }
 }

 file_put_contents($file, $databaru);
  ?>
