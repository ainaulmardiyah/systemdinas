<div style="margin-bottom: 20px;">
	<a href="<?=site_url('kuisoner/add');?>"><button>Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>question</th>
		<th>date</th>
		<th>point_jumlah_jawaban_poin</th>
		<th>nilai_max</th>
		<th>nilai_min</th>
		<th>aspek_kategori</th>
		<th>aspek_utama</th>
		<th>kategori_user</th>
		<th>Edit/Delete</th>
	</tr>
	<?php
	$no = 1;
	foreach ($quest as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->question;?></td>
			<td><?=$row->date;?></td>
			<td><?=$row->point_jumlah_jawaban_poin;?></td>
			<td><?=$row->nilai_max;?></td>
			<td><?=$row->nilai_min;?></td>
			<td><?=$row->aspek_subject;?></td>
			<td><?=$row->aspek_utama;?></td>
			<td><?=$row->kategori_user;?></td>
			<td>
				<a href="<?=site_url('kuisoner/edit/'.$row->id_kuisoner);?>"><button>Edit</button></a>
				<a href="<?=site_url('kuisoner/del/'.$row->id_kuisoner);?>" onclick="return confirm('Yakin akan menghapus data?')"><button>Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>