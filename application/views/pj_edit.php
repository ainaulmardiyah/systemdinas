<div style="margin-bottom: 20px;">
	<h3>Edit pointjawaban </h3>
</div>

<?php echo form_open('pointjawaban/proses'); ?>
	<table>
	<input type="hidden" name="id" value="<?=$kalkmodel->id_poinjwb ?>">
	<tr>
			<td>Aspek Kuisoner</td>
			<td>:</td>
			<td>
			
				<select name="id_question">
				<?php
			
				foreach ($pj as $b => $row) { ?>
				<option value="<?=$row->id_kuisoner?> "<?php if($row->id_kuisoner == $kalkmodel->id_question) { echo "selected"; }?> > <?=$row->question?></option>
			
				<?php } ?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>Jawaban</td>
			<td>:</td>
			<td>
				<input type="text" name="descjawaban" value="<?=$kalkmodel->descjawaban?>" required>
			</td>
		</tr>
			<tr>
			<td>Bobot Poin</td>
			<td>:</td>
			<td>
				<input type="text" name="bobotpoin" value="<?=$kalkmodel->bobotpoin?>" required>
			</td>
		</tr>
		
		
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="edit">Simpan</button>
				<a href="<?=site_url('pointjawaban');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
	</table>
<?php echo form_close(); ?>