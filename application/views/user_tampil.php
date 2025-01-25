<div style="margin-bottom: 20px;">
	<a href="<?=site_url('user/add');?>"><button>Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>nama user</th>
		<th>username</th>
		<th>password</th>
		<th>email</th>
		<th>hp</th>
		<th>kota</th>
		<th>user_kategori</th>
		<th>Edit/Delete</th>
	</tr>
	<?php
	$no = 1;
	foreach ($kalkmodel as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->nama_user;?></td>
			<td><?=$row->username;?></td>
			<td><?=$row->password;?></td>
			<td><?=$row->email;?></td>
			<td><?=$row->hp;?></td>
			<td><?=$row->kota;?></td>
			<td><?=$row->user_kategori;?></td>
			<td>
				<a href="<?=site_url('user/edit/'.$row->id_user  );?>"><button>Edit</button></a>
				<a href="<?=site_url('user/del/'.$row->id_user  );?>" onclick="return confirm('Yakin akan menghapus data?')"><button>Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>