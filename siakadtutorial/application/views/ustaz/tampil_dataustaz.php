


<p>
	<a href="<?php echo base_url(); ?>index.php/ustaz/input" class="btn btn-primary btn-sm">Tambah Data</a>	
</p>


<div class="row">

	<div class="col-lg-12">
		
		<div class="panel panel-default">
			<div class="panel-heading">Tabel Data Ustaz</div>
			<div class="panel-heading-right"></div>
			<div class="panel-body">
				
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataustaz">
					<thead>
						<tr>
							<th width="7%">No</th>
							<th width="17%">Nama Lengkap</th>
							<th>Lembaga</th>
							<th>No HP</th>
							<th>Status No HP</th>
							<th width="10%">Domisili</th>
							<th width="10%">Kajian</th>
							<th width="20%">Materi</th>
							<!-- <th>Kelebihan</th>
							<th>Kekurangan</th> -->
							<th>Tanggal Update</th>
							<th>Aksi</th>
							
					</thead>

					<tbody>
						<tr>
							<?php
							$no=1;
							foreach ($data->result() as $row) {
							?>
							<td class="span2"><?php echo $no++; ?></td>
							<td><?php echo $row->nama ?></td>
							<td><?php echo $row->lembaga ?></td>
							<td><?php echo $row->phone ?></td>
							<td><?php echo $row->status_kontak ?></td>
							<td><?php echo $row->domisili ?></td>
							<td><?php echo $row->kajian ?></td>
							<td><?php echo $row->materi ?></td>
							<!-- <td><?php echo $row->kelebihan ?></td>
							<td><?php echo $row->kekurangan ?></td> -->
							<td><?php echo $row->tanggal_update ?></td>		
							<td>
							<a href="<?php echo base_url();?>index.php/ustaz/edit/<?php echo $row->id_ustaz; ?>">edit</a>
							<a href="<?php echo base_url();?>index.php/ustaz/delete/<?php echo $row->id_ustaz; ?>">delete</a>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>


			</div>
		</div>

	</div>	

</div>
	






