<div class="container">
                <div class="row" style="padding-top:15px;"> 
                    <div class="col-md-9">
                        <div class="blog-post single-post">
                            <article class="post blog-single-post">
                                <div>
								
									<div class="post-image">
                                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                            <div>
                                                <h1 style="color: #1E90FF; font-weight: bold;"><?= $title?></h1>
                                                
    
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p><?= base_url() . "asset/foto_karir/bjs-karir.png" ?></p> -->
                                    <!-- <img src="<?= base_url() . "asset/foto_karir/bjs-karir.png" ?>" class="img-thumbnail" alt="..."> -->

                                    <div class="post-image">
                                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                            <div>
                                                <div class="img-thumbnail" style="display:inherit;">
                                                    <img style="max-width: 100%; height: auto;" src="<?php echo base_url() . "asset/foto-karir/bjs-karir.png" ?>" class="img-responsive" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <aside class="siderbar">
							<h4 class="heading-primary">Latest News</h4>
                            <ul class="nav nav-list mb-xlg">
							<?php
							$pilihan = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.aktif' => 'Y','status' => 'Y'),'id_berita','DESC',0,8);
							foreach ($pilihan->result_array() as $row) {   
                                    echo "<li><a href='../../berita/detail/$row[judul_seo]'>$row[judul]</a></li>";
                            }
							?>
                            </ul>
                            <hr />
							
                       
                        </aside>
                    </div>
                </div>
            </div>
       

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b878e417c0d681d"></script>









