 <?php 
	$iden = $this->model_utama->view_where('identitas',array('id_identitas' => 1))->row_array();
    // var_dump($iden['maps']);die;
    $mapsUrl = 'https://www.bing.com/maps?mepi=0%7EDirections%7EUnknown%7EDirection_Button&ty=0&rtp=pos.-6.155640125274658_106.84537506103516__Jamkrindo__e_%7E&mode=d&v=2&sV=1&cp=-6.155571%7E106.845263&lvl=21.5';
	$alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array();
	$link = $this->model_utama->view('pasangiklan');
?>
    <div class="container">
        <div class="row">
           
            <div class="col-md-4">
               <h5 class="mb-sm">LOKASI</h5>
            	<iframe width="100%" height="350" src="<<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4906262786462!2d124.83172187434832!3d1.4781622985079512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287753655555555%3A0x980210b5a7db291e!2sJaminan%20Kredit%20Indonesia%20(Jamkrindo)!5e0!3m2!1sid!2sid!4v1705393814801!5m2!1sid!2sid" width="100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
            </div>
			<div class="col-md-4">
                <h5 class="mb-sm" style="padding-left:15px;">LINK TERKAIT</h5>
				<ul class="list list-icons list-icons-sm" style="padding-left:15px;">
					<?php
						foreach($link->result_array() as $row){
							echo "<li><i class='fa fa-caret-right'></i> <a href='$row[url]'>$row[judul]</a></li>";
						}
					?>
					
				</ul>
				
                
            </div>
			<div class="col-md-4">
                <h5 class="mb-sm">Hubungi Kami</h5>
                <span class="phone"><?php echo $iden['no_telp']; ?></span>
                <?php
				echo $alamat["alamat"];
				?>
                <ul class="social-icons mt-xl">
                        <li>
                            <a class="sc-1" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="sc-2" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="sc-11" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="sc-3" href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <p>
<strong>Copyright &copy; 2023 <a target='_BLANK' href="">PT Bintang Jamtama Sejahtera</a>.</strong> All rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
