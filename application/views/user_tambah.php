<div style="margin-bottom: 20px;">
	<h3>Add User </h3>
</div>

<?php echo form_open('user/proses'); ?>
	<table>
	<table>

		<tr>
			<td>nama user</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_user" value="" required>
			</td>
		</tr>
		<tr>
			<td>username</td>
			<td>:</td>
			<td>
				<input type="text" name="username" value="" required>
			</td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td>
				<input type="password" name="password" value="" required>
			</td>
		</tr>
		<tr>
			<td>email</td>
			<td>:</td>
			<td>
				<input type="email" name="email" value="" required>
			</td>
		</tr>
		<tr>
			<td>hp</td>
			<td>:</td>
			<td>
				<input type="text" name="hp" value="" required>
			</td>
		</tr>
		<tr>
			<td>kota</td>
			<td>:</td>
			<td>
				<input type="text" name="kota" value="" required>
			</td>
		</tr>
		<tr>
			<td>User Kategori</td>
			<td>:</td>
			<td>
				<select name="user_kategori">
				<option value="buyer" >buyer</option>
				<option value="seller">seller</option>
				
				</select>
			</td>
		</tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="add">Simpan</button>
				<a href="<?=site_url('user');?>"><button type="button">Kembali</button></a>
			</td>
		</tr>
		
		
		
	</table>
<?php echo form_close(); ?>