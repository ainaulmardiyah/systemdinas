<div style="margin-bottom: 20px;">
	<h3>Edit kalkulasi </h3>
</div>

<?php echo form_open('kalkulasi/proses'); ?>
	<table>
	<input type="hidden" name="id" value="<?=$kalkmodel->id_kalkulasi?>">
	<tr>
			<td>Aspek Kuisoner</td>
			<td>:</td>
			<td>
			
				<select name="id_kuisoner_hitung">
				<?php
			
				foreach ($aspek as $b => $row) { ?>
				<option value="<?=$row->id_kuisoner?> "<?php if($row->id_kuisoner == $kalkmodel->id_kuisoner_hitung) { echo "selected"; }?> > <?=$row->question;?>-<?=$row->aspek_subject;?>-<?=$row->kategori_user;?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>nama aspek primary</td>
			<td>:</td>
			<td>
				<select name="aspek_primary">
				<?php
			
				foreach ($aspquest as $b => $row) { ?>
				<option value="<?=$row->id_aspek_primary?>"><?=$row->nama_aspek_primary?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Hasil Kalkulasi</td>
			<td>:</td>
			<td>
				<input type="text" name="hasilkalkulasi" value="<?=$kalkmodel->hasilkalkulasi?>" required>
			</td>
		</tr>
		<tr>
			<td>status</td>
			<td>:</td>
			<td>
				<select name="status">
				<option value="Sangat Kuat">Sangat Kuat(0,80 - 1, 000)</option>
				<option value="Kuat">Kuat (0,60 - 0,799)</option>
				<option value="Sedang">Sedang (0,40 - 0,599)</option>
				<option value="Rendah">Rendah (0,20 - 0,399)</option>
				<option value="Sangat Rendah">Sangat Rendah (0,00 - 0,199)</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Date Periode</td>
			<td>:</td>
			<td>
				<input type="text" name="date_periode" value="<?=$kalkmodel->date_periode?>" required>
			</td>
		</tr>
		
		
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="edit">Simpan</button>
				<a href="<?=site_url('kalkulasi');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>