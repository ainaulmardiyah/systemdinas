<div style="margin-bottom: 20px;">
	<h3>Edit user </h3>
</div>

<??php echo form_open('savingjawaban/proses'); ?>
	<table>
	
<tr>
			<td>Aspek Kuisoner</td>
			<td>:</td>
			<td>
			
				<select name="id_kuisoner_user">
				<?php
			
				foreach ($pj as $b => $row) { ?>
				<option value="<?=$row->id_kuisoner?>"><?=$row->question?>-<?=$row->aspek_utama?>-<?=$row->kategori_user?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Aspek Primary</td>
			<td>:</td>
			<td>
			
				<select name="id_aspek_user">
				<?php
			
				foreach ($pj2 as $b => $row) { ?>
				<option value="<?=$row->id_aspek_primary ?>"><?=$row->nama_aspek_primary?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Point Jawaban</td>
			<td>:</td>
			<td>
			
				<select name="id_jawaban_user">
				<?php
			
				foreach ($pj3 as $b => $row) { ?>
				<option value="<?=$row->id_poinjwb?>"><?=$row->descjawaban?>-<?=$row->bobotpoin?> Poin</option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Point</td>
			<td>:</td>
			<td>
				<input type="text" name="poin" value="<?=$kalkmodel->poin?>" required>
			</td>
		</tr>
		<tr>
			<td>Prediksi</td>
			<td>:</td>
			<td>
				<input type="text" name="prediksi" value="<?=$kalkmodel->prediksi?>" required>
			</td>
		</tr>
		<tr>
			<td>date answer</td>
			<td>:</td>
			<td>
				<input type="date" name="date_answer" value="<?=$kalkmodel->date_answer?>" required>
			</td>
		</tr>
		
			<tr>
			<td>User</td>
			<td>:</td>
			<td>
			
				<select name="id_user_s">
				<?php
			
				foreach ($pj4 as $b => $row) { ?>
				<option value="<?=$row->id_user?>"><?=$row->nama_user?>-<?=$row->user_kategori?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="edit">Simpan</button>
				<a href="<?=site_url('user');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
		
		
		
	</table>
<?php echo form_close(); ?>