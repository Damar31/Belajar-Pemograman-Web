<?php
include '../../conf.php';
include '../../conn.php';
use Dompdf\Dompdf as Dompdf;

ob_start();
	$lib = new conn();
	$data = $lib->PDF();
	?>
	<h1><img style="max-width:100px;" src="../../assets/foto/<?php echo $data->logo;?>"> <?php echo $data->nama;?></h1>
	<h3><?php echo $data->alamat;?></h3>
	<?php

	$html = ob_get_clean();

	$dompdf = new Dompdf();
	$dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'landscape');
	$dompdf->render();
	$pdf = $dompdf->output();
	$dompdf->stream('laporan.pdf',array('Attachment' => 0));
?>