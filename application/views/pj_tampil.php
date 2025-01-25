<div style="margin-bottom: 20px;">
	<a href="<?=site_url('pointjawaban/add');?>"><button>Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>question</th>
		<th>jawaban</th>
		<th>bobot poin</th>
		
		<th>Edit/Delete</th>
	</tr>
	<?php
	$no = 1;
	foreach ($kalkmodel as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->question;?></td>
			<td><?=$row->descjawaban;?></td>
			<td><?=$row->bobotpoin;?></td>
		
			<td>
				<a href="<?=site_url('pointjawaban/edit/'.$row->id_poinjwb );?>"><button>Edit</button></a>
				<a href="<?=site_url('pointjawaban/del/'.$row->id_poinjwb );?>" onclick="return confirm('Yakin akan menghapus data?')"><button>Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>