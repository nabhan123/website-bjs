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
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.820060993429!2d106.84217702363748!3d-6.154848810324186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f52bf229293b%3A0xaacf4fb999e84a4a!2sPT%20BINTANG%20JAMTAMA%20SEJAHTERA!5e0!3m2!1sid!2sid!4v1705589551917!5m2!1sid!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            	<!-- <iframe width="100%" height="350" src="<<iframe src="https://www.google.com/maps/dir/Pt.+Bintang+Jamtama+Sejahtera/PT+BINTANG+JAMTAMA+SEJAHTERA,+Gedung+Jamkrindo,+Jl.+Angkasa+No.10,+RW.10,+Gn.+Sahari+Sel.,+Kec.+Kemayoran,+Kota+Jakarta+Pusat,+Daerah+Khusus+Ibukota+Jakarta+10610/@-6.1548488,106.842177,17z/data=!4m13!4m12!1m5!1m1!1s0x2e69f59574b8ce47:0xaf7eee628c625b0f!2m2!1d106.843927!2d-6.1540388!1m5!1m1!1s0x2e69f52bf229293b:0xaacf4fb999e84a4a!2m2!1d106.8455102!2d-6.1556868?entry=ttu" width="100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe> -->
            </div>
			<!-- <div class="col-md-4">
                <h5 class="mb-sm" style="padding-left:15px;">LINK TERKAIT</h5>
				<ul class="list list-icons list-icons-sm" style="padding-left:15px;">
					<?php
						foreach($link->result_array() as $row){
							echo "<li><i class='fa fa-caret-right'></i> <a href='$row[url]'>$row[judul]</a></li>";
						}
					?>
					
				</ul>
				
                
            </div> -->
			<div class="col-md-4">
                <h5 class="mb-sm">Hubungi Kami</h5>
                <span class="phone"><p>021-6540335, Ext 5039/6000</p></span>
                <p><span style="font-size:13px"><b>Alamat Redaksi :</b><p>Gedung Jamkrindo, Jl. Angkasa No.10, RW. 10, Gn. Sahari Sel. Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610</p></span></p>

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
