<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Konsumen</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pegawai" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID KONSUMEN</th>
						<th>KODE KONSUMEN</th>
						<th>NAMA KONSUMEN</th>
						<th>NOMER TELFON</th>
						<th>TYPE KENDARAAN</th>
						<th>NO PLAT</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from konsumen");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['ID_KONSUMEN']; ?>
						</td>
						<td>
							<?php echo $data['KODE_KONSUMEN']; ?>
						</td>
						<td>
							<?php echo $data['NAMA_KONSUMEN']; ?>
						</td>
						<td>
							<?php echo $data['NOMER_TELFON']; ?>
						</td>
						<td>
							<?php echo $data['TYPE_KENDARAAN']; ?>
						</td>
						<td>
							<?php echo $data['NO_PLAT']; ?>
						</td>
						<td>
							<a href="?page=view-pegawai&kode=<?php echo $data['nip']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-pegawai&kode=<?php echo $data['nip']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pegawai&kode=<?php echo $data['nip']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->
