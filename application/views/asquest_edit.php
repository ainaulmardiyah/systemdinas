<div style="margin-bottom: 20px;">
	<h3>Edit Aspek quest</h3>
</div>

<?php
// echo form_open('buku/proses', '', array('id' => $buku->id_buku));
?>
<form action="<?=site_url('aspekkuisoner/proses')?>" method="post">
	<input type="hidden" name="id" value="<?=$questmodel->id_aspek?>">
	<table>
		<tr>
			<td>aspek subject</td>
			<td>:</td>
			<td>
				<input type="text" name="aspek_subject" value="<?=$questmodel->aspek_subject?>" required>
			</td>
		</tr>
			<tr>
			<td>aspek desc</td>
			<td>:</td>
			<td>
				<input type="text" name="aspek_desc" value="<?=$questmodel->aspek_desc?>" required>
			</td>
		</tr>
		<tr>
			<td>nama aspek primary</td>
			<td>:</td>
			<td>
				<select name="id_primary">
				<?php
			
				foreach ($aspmodel as $b => $row) { ?>
				<option value="<?=$row->id_aspek_primary?>"><?=$row->nama_aspek_primary?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="edit">Simpan</button>
				<a href="<?=site_url('aspekkuisoner');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<form>