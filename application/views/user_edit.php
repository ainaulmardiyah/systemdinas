<div style="margin-bottom: 20px;">
	<h3>Edit user </h3>
</div>

<?php echo form_open('user/proses'); ?>
	<table>
	<input type="hidden" name="id" value="<?=$kalkmodel->id_user   ?>">
	<tr>
			<td>nama user</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_user" value="<?=$kalkmodel->nama_user?>" required>
			</td>
		</tr>
		<tr>
			<td>username</td>
			<td>:</td>
			<td>
				<input type="text" name="username" value="<?=$kalkmodel->username?>" required>
			</td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td>
				<input type="text" name="password" value="<?=$kalkmodel->password?>" required>
			</td>
		</tr>
		<tr>
			<td>email</td>
			<td>:</td>
			<td>
				<input type="text" name="email" value="<?=$kalkmodel->email?>" required>
			</td>
		</tr>
		<tr>
			<td>hp</td>
			<td>:</td>
			<td>
				<input type="text" name="hp" value="<?=$kalkmodel->hp?>" required>
			</td>
		</tr>
		<tr>
			<td>kota</td>
			<td>:</td>
			<td>
				<input type="text" name="kota" value="<?=$kalkmodel->kota?>" required>
			</td>
		</tr>
		<tr>
			<td>User Kategori</td>
			<td>:</td>
			<td>
				<select name="user_kategori">
				<option value="buyer"  <?php if($kalkmodel->user_kategori=='buyer') { echo "selected"; }?>>buyer</option>
				<option value="seller" <?php if($kalkmodel->user_kategori=='seller') { echo "selected"; }?>>seller</option>
				
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