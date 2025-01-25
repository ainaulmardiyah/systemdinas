<div style="margin-bottom: 20px;">
	<h3>Add Aspek Primary </h3>
</div>

<?php echo form_open('aspekprimary/proses'); ?>
	<table>
	<table>

		
		<tr>
			<td>nama aspek primary</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_aspek_primary" value="" required>
			</td>
		</tr>
		
		
		
		
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="add">Simpan</button>
				<a href="<?=site_url('aspekprimary');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>