<div style="margin-bottom: 20px;">
	<h3>Edit pointjawaban </h3>
</div>

<?php echo form_open('aspekprimary/proses'); ?>
	<table>
	<input type="hidden" name="id" value="<?=$kalkmodel->id_aspek_primary  ?>">
	<tr>
			<td>nama aspek primary</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_aspek_primary" value="<?=$kalkmodel->nama_aspek_primary?>" required>
			</td>
		</tr>
		
		
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="edit">Simpan</button>
				<a href="<?=site_url('aspekprimary');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>