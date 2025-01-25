<div style="margin-bottom: 20px;">
	<a href="<?=site_url('savingjawaban/add');?>"><button>Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>Question</th>
		<th>Aspek User</th>
		<th>Jawaban User</th>
		<th>Poin</th>
		<th>Prediksi</th>
		<th>Date Answer</th>
		<th>User</th>
		<th>Edit/Delete</th>
	</tr>
	<?php
	$no = 1;
	foreach ($kalkmodel as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->question?>-<?=$row->aspek_utama?>-<?=$row->kategori_user?></td>
			<td><?=$row->nama_aspek_primary?></td>
			<td><?=$row->descjawaban?>-<?=$row->bobotpoin?></td>
			<td><?=$row->poin;?></td>
			<td><?=$row->prediksi;?></td>
			<td><?=$row->date_answer;?></td>
			<td><?=$row->nama_user?>-<?=$row->user_kategori?></td>
			<td>
				<a href="<?=site_url('savingjawaban/edit/'.$row->id_saving   );?>"><button>Edit</button></a>
				<a href="<?=site_url('savingjawaban/del/'.$row->id_saving   );?>" onclick="return confirm('Yakin akan menghapus data?')"><button>Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>