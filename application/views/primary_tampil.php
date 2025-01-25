<div style="margin-bottom: 20px;">
	<a href="<?=site_url('aspekprimary/add');?>"><button>Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>nama aspek primary</th>
	
		
		<th>Edit/Delete</th>
	</tr>
	<?php
	$no = 1;
	foreach ($kalkmodel as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->nama_aspek_primary;?></td>
		
		
			<td>
				<a href="<?=site_url('aspekprimary/edit/'.$row->id_aspek_primary );?>"><button>Edit</button></a>
				<a href="<?=site_url('aspekprimary/del/'.$row->id_aspek_primary );?>" onclick="return confirm('Yakin akan menghapus data?')"><button>Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>