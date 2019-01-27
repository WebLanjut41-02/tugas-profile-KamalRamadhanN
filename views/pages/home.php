<?php $this->load->view('main/header');  ?>


	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								Hello :) <br>
							</h2>
							
							<p>
								Saya Kamal Ramadhan Nurcahyo Orang Orang Manggil Saya Amaw.Saya Mahasiswa Telkom University Fakultas Ilmu Terapan Dan Saya Mempelajari Ilmu Sistem University
							</p>
							<p>
								Saya Senang Bermain Game Action Seperti PUBG Yang Sekarang Sedang Tranding No 1 Game Sedunia 
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->


	<!--================ Start Feature Area =================-->
	<section class="feature_area">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-lg-4">
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="lnr lnr-book"></span>
						</div>
						<div class="desc">
							<h4>Book</h4>
							<p>
								Saya Suka Membaca Buku Terutama Komik Anima Seperti One Piece,Tsubatsa,Naruto Dll.
							</p>
						</div>
					</div>
					<div class="single_feature d-flex flex-row pb-30">
						<div class="icon">
							<span class="fa fa-trophy"></span>
						</div>
						<div class="desc">
							<h4>Piagam</h4>
							<p>
								Saya Pernah Menjuarai Lomba Bidang Teater Kabaret No.1 Se-jabar
							</p>
						</div>
					</div>
					<div class="single_feature d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-screen"></span>
						</div>
						<div class="desc">
							<h4>Film</h4>
							<p>
								Saya menyukai Film Horror Seperti Annable,The conjuring dan Film Anime Seperti Yang Ada Di Book
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->

	<!--================ Start Department Area =================-->
    <div class="department_area section_gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img class="img-fluid" src="<?php echo base_url()?>aset/img/amaw4.jpg" alt="">
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="dpmt_right">
                        <h1>Pengalaman Travelling</h1>
                       		 <p>
								Pengalaman Bersama Teman Kamar Asrama Pergi Ke Jogja Ke Parang Kritis,Dan Menikmati Indahnya Pantai Yang Sayang Bersih Dan Putihnya Pasir Pantai yang Tidak Ada Sampah Berserakan Sama Sekali
							</p>
							
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Department Area =================-->


	<!--================ Start Popular Courses Area =================-->
	<div class="popular_courses lite_bg">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>Comments</h2>

					</div>
				</div>
			</div>
		</div>
		<form class="form-area" id="myForm" action="<?php echo base_url()?>index.php/ci_tugas/coment" method="post" class="contact-form text-right">
						<div class="row">	
					
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
							<div class="alert-msg">								
						</div>
						</div>
					</form>
					<?php
					if (isset($coment)) 
						echo $coment;
						echo"<br>";
					?>
				</div>
			
	<!--================ End Popular Courses Area =================-->

	<!--================ Start Fact Area =================-->
	<div class="fact_area overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<h2>My Foto </h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="<?php echo base_url()?>aset/img/amaw1.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="<?php echo base_url()?>aset/img/amaw.png" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="<?php echo base_url()?>aset/img/amaw2.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
						<div class="course_head overlay">
							<img class="img-fluid w-100" src="<?php echo base_url()?>aset/img/amaw4.jpg" alt="">
							<div class="authr_meta">
								<img src="img/author1.png" alt="">
							</div>
						</div>
		</div>
	</div>
	<!--================ End Fact Area =================-->

