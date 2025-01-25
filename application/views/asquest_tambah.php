<div style="margin-bottom: 20px;">
	<h3>Add Aspek Quest </h3>
</div>

<?php echo form_open('aspekkuisoner/proses'); ?>
	<table>
	<table>
		<tr>
			<td>aspek subject</td>
			<td>:</td>
			<td>
				<input type="text" name="aspek_subject" value="" required>
			</td>
		</tr>
		<tr>
			<td>aspek description</td>
			<td>:</td>
			<td>
				<input type="text" name="aspek_desc" value="" required>
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
		
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="add">Simpan</button>
				<a href="<?=site_url('aspekkuisoner');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>