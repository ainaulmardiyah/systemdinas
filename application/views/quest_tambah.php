<div style="margin-bottom: 20px;">
	<h3>Quest Buku</h3>
</div>

<?php echo form_open('kuisoner/proses'); ?>
	<table>
	<table>
		<tr>
			<td>question</td>
			<td>:</td>
			<td>
				<input type="text" name="question" value="" required>
			</td>
		</tr>
		<tr>
			<td>date</td>
			<td>:</td>
			<td>
				<input type="date" name="date" value="" required>
			</td>
		</tr>
			<tr>
			<td>point jumlah jawaban poin</td>
			<td>:</td>
			<td>
				<input type="text" name="point_jumlah_jawaban_poin" value="" required>
			</td>
		</tr>
		</tr>
			<tr>
			<td>nilai max</td>
			<td>:</td>
			<td>
				<input type="text" name="nilai_max" value="" required>
			</td>
		</tr>
		</tr>
			<tr>
			<td>nilai min</td>
			<td>:</td>
			<td>
				<input type="text" name="nilai_min" value="" required>
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
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="add">Simpan</button>
				<a href="<?=site_url('quest_tampil');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>