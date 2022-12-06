
<table border=1>




<?php
// Contoh mengambil data dengan HTML selector
include('simple_html_dom.php');
include "index.php";
include "koneksi.php";

// Mengambil Dom Dari URL HTML



$html = file_get_html('https://scrapeme.live/shop/');



?>

<input name="Masukan URL..." type="text" value="Masukan URL" size="200" maxlength="200" />
<input name="cari" type="submit" value="cari" />

<table width="200" border="1">
  <tr>
    <td>No</td>
	<td>link</td>
    <td>Judul</td>
	<td>isi</td>

  </tr>

  <?php
     $no = 1;
   foreach($html->find('.page-numbers a') as $link) 
   foreach($html->find('h2') as $judul) 
   foreach($html->find('span') as $isi) 


   {

?>

  <tr>
    <td><?php echo $no ; ?> </td>
    <td><?php echo $link ->href?> </td> 
	<td><?php echo $judul ->innertext?> </td> 
	<td><?php echo $isi ->innertext?> </td> 
	<?php
	$no++;
	}?>
  </tr>
</table>