<div style="margin-bottom: 20px;">
	<a href="<?=site_url('kalkulasi/add');?>"><button>Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>aspek</th>
		<th>aspek primary</th>
		<th>hasil kalkulasi</th>
		<th>hasil status</th>
		<th>hasil date periode</th>
		<th>Edit/Delete</th>
	</tr>
	<?php
	$no = 1;
	foreach ($kalkmodel as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->question;?>-<?=$row->aspek_subject;?>-<?=$row->kategori_user;?></td>
			<td><?=$row->nama_aspek_primary;?></td>
			<td><?=$row->hasilkalkulasi;?></td>
			<td><?=$row->status;?></td>
			<td><?=$row->date_periode;?></td>
			<td>
				<a href="<?=site_url('kalkulasi/edit/'.$row->id_kalkulasi);?>"><button>Edit</button></a>
				<a href="<?=site_url('kalkulasi/del/'.$row->id_kalkulasi);?>" onclick="return confirm('Yakin akan menghapus data?')"><button>Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>