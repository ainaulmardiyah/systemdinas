<div style="margin-bottom: 20px;">
	<a href="<?=site_url('aspekkuisoner/add');?>"><button>Tambah</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>aspek subject</th>
		<th>aspek desc</th>
		<th>nama aspek primary</th>
		
		<th>Edit/Delete</th>
	</tr>
	<?php
	$no = 1;
	foreach ($questmodel as $b => $row) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$row->aspek_subject;?></td>
			<td><?=$row->aspek_desc;?></td>
			<td><?=$row->nama_aspek_primary;?></td>
			<td>
				<a href="<?=site_url('aspekkuisoner/edit/'.$row->id_aspek);?>"><button>Edit</button></a>
				<a href="<?=site_url('aspekkuisoner/del/'.$row->id_aspek);?>" onclick="return confirm('Yakin akan menghapus data?')"><button>Hapus</button></a>
			</td>
		</tr>
	<?php	
	} ?>
</table>