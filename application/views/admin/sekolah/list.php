<p><a href="<?php echo base_url('admin/sekolah/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"> Tambah</i></a></p>

<?php
// Notifikasi
if ($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
	echo $this->session->flashdata('sukses');
	echo "</div>";
}
?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>kontak Person</th>
            <th>Jumlah Siswa</th>
            <th width="15%">Action</th>
        </tr>
    </thead>
    <tbody>
    	<?php $i =1; foreach($sekolah as $sekolah) { ?>
        <tr >
            <td><?php echo $i ?></td>
            <td><?php echo $sekolah->nama ?></td>
            <td><?php echo $sekolah->alamat ?><br>kec. <?php echo $sekolah->kecamatan ?> <?php echo $sekolah->kabupaten ?></td>
            <td><?php echo $sekolah->kontak_person ?> (<?php echo $sekolah->jabatan ?>)<br><i class="fa fa-phone"></i> <?php echo $sekolah->telp ?></td>
            <td><?php echo $sekolah->jumlah_siswa ?> Siswa</td>
            <td>
                <a href="<?php echo base_url('admin/sekolah/edit/').$sekolah->id_sekolah; ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
            	<a href="<?php echo base_url('admin/sekolah/delete/').$sekolah->id_sekolah; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apa anda yakin ingin menghapus data ini?');"><i class="fa fa-edit"></i> Delete</a>
            	
            </td>

        </tr>
        <?php $i++; } ?>
    </tbody>
</table>