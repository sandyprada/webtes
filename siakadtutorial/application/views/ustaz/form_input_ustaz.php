<script type="text/javascript">
	function cekform()
	{
		if(!$('#namaustaz').val())
		{
			alert('Nama tidak boleh kosong');
			$('#namaustaz').focus();
			return false;
		}

		if(!$('#nohp').val())
		{
			alert('No hp tidak boleh kosong');
			$('#nohp').focus();
			return false;
		}

		// if(!$('#status').val())
		// {
		// 	alert('status no hp tidak boleh kosong');
		// 	$('#status').focus();
		// 	return false;
		// }

		if(!$('#domisili').val())
		{
			alert('domisili tidak boleh kosong');
			$('#domisili').focus();
			return false;
		}

		

		if(!$('#materi').val())
		{
			alert('materi tidak boleh kosong');
			$('#materi').focus();
			return false;
		}

		
	}
</script>


<?php
$info= $this->session->flashdata('info');
if(!empty($info)){
	echo $info;
}
?>

<div class="row">

	<div class="col-lg-12">
		
		<div class="panel panel-default">
			<div class="panel-heading">Form Input Data Ustaz</div>
			<div class="panel-body">
				<div class="col-lg-6"></div>
				<div class="col-lg-6">
					
					<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/ustaz/simpan" onsubmit="return cekform();">

					
						<div class="col-sm-9"></div>
						<div class="control-group col-sm-3" >
							
							<div class="controls">
							<label for="disabledSelect">Kode</label>
								<input class="form-control" type="text" name="kd_ustaz" id="kd_ustaz" placeholder="kode" value="<?php echo $kd_ustaz; ?>" >

							</div>
						</div>
					
						

						<div class="control-group">
							<label class="control-label">Nama Lengkap</label>
							<div class="controls">
								<input type="text" name="namaustaz" id="namaustaz" placeholder="Nama lengkap Ustaz" class="form-control"  value="<?php echo $namaustaz; ?>">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Lembaga</label>
							<div class="controls">
								<input type="text" name="lembaga" id="lembaga" placeholder="Lembaga" class="form-control" value="<?php echo $lembaga; ?>">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">No HP</label>
							<div class="controls">
								<input type="text" name="nohp" id="nohp" placeholder="Nomor HP" class="form-control" value="<?php echo $nohp; ?>">
							</div>
						</div>

						<div class="control-group" style="margin-top: 10px">
						<label class="control-group">Status No HP <small class="small" style="font-style: italic;">(pilih konfirmasi bila belum diketahui)</small></label>
						<select class="form-control" name="status" id="status">
							
							<option value="konfirmasi" <?php 
                                    if($status=="konfirmasi")
                                    	{
                                    		echo 'selected';
                                    	} else
                                    	{
                                    		echo '';
                                    	} ?>>--konfirmasi--</option>
							<option value="aktif" <?php 
                                    if($status=="aktif")
                                    	{
                                    		echo 'selected';
                                    	} else
                                    	{
                                    		echo '';
                                    	} ?>>Aktif</option>
                            <option value="tidak aktif" <?php 
                                    if($status=="tidak aktif")
                                    	{
                                    		echo 'selected';
                                    	} else
                                    	{
                                    		echo '';
                                    	} ?>>Tidak Aktif</option>
                            
                            
						</select>
						<!-- </div>
						<div class="control-group-group">
                            <label class="control-label">Status No HP</label>
                            <div class="radio" required>
                                <label>
                                    <input type="radio" name="status" id="status1" value="aktif" <?php 
                                    if($status =="aktif")
                                    	{
                                    		echo 'checked';
                                    	} else
                                    	{
                                    		echo '';
                                    	} ?> >Aktif
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="status2" value="tidak aktif" 
                                    <?php 
                                    if($status=="tidak aktif")
                                    	{
                                    		echo 'checked';
                                    	} else
                                    	{
                                    		echo '';
                                    	} ?>
                                    	>Tidak Aktif
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="status" id="status3" value="konfirmasi" 
                                    <?php 
                                    if($status=="konfirmasi" or $status=='')
                                    	{
                                    		echo 'checked';
                                    	} else
                                    	{
                                    		echo '';
                                    	} ?>
                                    >Konfirmasi
                                </label>
                            </div>
                        </div> -->


						<!-- <div class="control-group">
							<label class="control-label">Status no HP</label>
							<div class="controls">
								<input type="text" name="status" id="status" placeholder="status" class="form-control" value="<?php echo $status; ?>">
							</div>
						</div> -->

						<div class="control-group">
							<label class="control-label">Domisili</label>
							<div class="controls">
								<input type="text" name="domisili" id="domisili" placeholder="domisili" class="form-control" value="<?php echo $domisili; ?>">
							</div>
						</div>
						<label class="control-label">Kajian yang pernah diisi: <small>(boleh lebih dari satu)</small></label>
						<?php foreach ($kajian->result() as $rowka) { ?>
						<div class="control-group">
	                        
	                        <div class="checkbox" >
	                            <label>
	                                <input name="<?php echo $rowka->kolom; ?>" id="<?php echo $rowka->kolom;?>" type="checkbox"  value="1" 
	                                <?php
								if(!($reset=="true")){
	                                $kol=$rowka->kolom;
	                                $ngisi=$this->model_ustaz->getdatakajian($kd_ustaz,$kol);
	                                foreach ($ngisi -> result() as $value) {
	                                	# code...
	                                	$tet=$value->$kol;
			                            if($tet=="1")
			                            {
			                            	echo 'checked';
			                            }
			                            else
			                            {
			                            	echo '';
			                            }
		                        	}
		                         
		                         }
		                            	?>


	                                ><?php echo $rowka->nama_kajian; ?> <?php echo ' ('; echo $rowka->kolom; echo')' ?>
	                            </label>
	                        </div>
	                        
	                    </div>




	                    <?php }?>


						<label class="control-label">Kafa'ah: <small>(bidang yang dikuasai)</small></label>
						<?php foreach ($kafaah->result() as $rowka) { ?>
						<div class="control-group">
	                        
	                        <div class="checkbox" >
	                            <label>
	                                <input name="<?php echo $rowka->kol_kaf; ?>" id="<?php echo $rowka->kol_kaf;?>" type="checkbox"  value="1" 
	                                <?php
								if(!($reset=="true")){
	                                $kol=$rowka->kol_kaf;
	                                $ngisi=$this->model_ustaz->getdatakol($kd_ustaz,$kol);
	                                foreach ($ngisi -> result() as $value) {
	                                	# code...
	                                	$tet=$value->$kol;
			                            if($tet=="1")
			                            {
			                            	echo 'checked';
			                            }
			                            else
			                            {
			                            	echo '';
			                            }
		                        	}
		                         
		                         }
		                            	?>


	                                ><?php echo $rowka->nama_kafaah; ?> <?php echo ' ('; echo $rowka->kol_kaf; echo')' ?>
	                            </label>
	                        </div>
	                        
	                    </div>
	                    	<?php }?>

<!-- 						<div class="control-group" style="margin-top: 10px">
	                        <label>Kafa'ah</label>
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox" value="1" name="alquran" id="alquran">Al-Qur'an
	                            </label>
	                        </div>
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox" value="1" name="fiqih" id="fiqih">Fiqih
	                            </label>
	                        </div>
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox" value="1" name="sirah" id="sirah">Sirah
	                            </label>
	                        </div>
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox" value="1" name="tarbiyah" id="tarbiyah">Tarbiyah
	                            </label>
	                        </div>
	                        <div class="checkbox">
	                            <label>
	                                <input type="checkbox" value="1" name="umum" id="umum">Umum
	                            </label>
	                        </div>
	                    </div> -->

						<div class="control-group">
							<label class="control-label">Materi : <span class="small" style="font-style: italic">(isikan judul materi yang pernah diisi)</span></label>
							<div class="controls">
								<input type="text-area" name="materi" id="materi" placeholder="materi" class="form-control" value="<?php echo $materi; ?>">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Kelebihan <small>(opsional)</small></label>
							<div class="controls">
								<input type="text-area" rows="5" name="kelebihan" id="kelebihan" placeholder="kelebihan" class="form-control" value="<?php echo $kelebihan; ?>">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Kekurangan <small>(opsional)</small></label>
							<div class="controls">
								<input type="text" name="kekurangan" id="kekurangan" placeholder="kekurangan" class="form-control" value="<?php echo $kekurangan; ?>">
							</div>
						</div>


						<div class="control-group">
							<label class="control-label">Tanggal Insert</label>
							<div class="controls">
								<input type="date"  name="tgl_insert" id="tgl_insert" placeholder="tanggal insert" class="form-control" value="<?php echo $tgl_insert; ?>">
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">Tanggal Update</label>
							<div class="controls">
								<input type="date"  name="tgl_update" id="tgl_update" placeholder="tanggal update" class="form-control" value="<?php echo $tgl_update; ?>">
							</div>
						</div>

						<div>
						<p></p>
						
							<button type="submit" class="btn btn-primary btn-sm">simpan</button>
							<a href="<?php echo base_url()?>index.php/ustaz" class="btn btn-primary btn-sm">tutup</a>
						</div>
					</form>

				</div>


			</div>
		</div>

	</div>	

</div>

