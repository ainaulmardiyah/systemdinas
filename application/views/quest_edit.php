<div style="margin-bottom: 20px;">
	<h3>Edit quest</h3>
</div>

<?php
// echo form_open('buku/proses', '', array('id' => $buku->id_buku));
?>
<form action="<?=site_url('kuisoner/proses')?>" method="post">
	<input type="hidden" name="id" value="<?=$quest->id_kuisoner?>">
	<table>
		<tr>
			<td>question</td>
			<td>:</td>
			<td>
				<input type="text" name="question" value="<?=$quest->question?>" required>
			</td>
		</tr>
		<tr>
			<td>date</td>
			<td>:</td>
			<td>
				<input type="date" name="date" value="<?=$quest->date?>" required>
			</td>
		</tr>
			<tr>
			<td>point jumlah jawaban poin</td>
			<td>:</td>
			<td>
				<input type="text" name="point_jumlah_jawaban_poin" value="<?=$quest->point_jumlah_jawaban_poin?>" required>
			</td>
		</tr>
		</tr>
			<tr>
			<td>nilai max</td>
			<td>:</td>
			<td>
				<input type="text" name="nilai_max" value="<?=$quest->nilai_max?>" required>
			</td>
		</tr>
		</tr>
			<tr>
			<td>nilai min</td>
			<td>:</td>
			<td>
				<input type="text" name="nilai_min" value="<?=$quest->nilai_min?>" required>
			</td>
		</tr>
		</tr>
			<tr>
			<td>aspek kategori</td>
			<td>:</td>
			<td>
				<select name="aspek_kategori">
				<?php
			
				foreach ($aspek as $b => $row) { ?>
				<option value="<?=$row->id_aspek ?>"><?=$row->aspek_subject?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		</tr>
			<tr>
			<td>nama aspek primary</td>
			<td>:</td>
			<td>
				<select name="aspek_utama">
				<?php
			
				foreach ($aspquest as $b => $row) { ?>
				<option value="<?=$row->id_aspek_primary?>"><?=$row->nama_aspek_primary?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>kategori user</td>
			<td>:</td>
			<td>
				<select name="kategori_user">
				
				<option value="buyer">buyer</option>
			<option value="seller">seller</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="edit">Simpan</button>
				<a href="<?=site_url('kuisoner');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<form>