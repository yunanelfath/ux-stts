@extends('layouts.application')
@section('content')
		<div class="backgrounds overlay">
			<div class="background aos-init aos-animate" data-aos="fade-in" data-aos-duration="1500" data-aos-anchor=".section--hero"></div>
		</div>

		<header class="hero">
			<div class="hero-center">
				<h1 class="hero__logo aos-init aos-animate" data-aos="zoom-in">STTS</h1>
				<h2 class="hero__text aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">Survey Kepuasan Kinerja</h2>
			</div>
			<span class="hero__scroll aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
				Click To Start <br>
				<i class="chevron bottom"></i>
			</span>
			<a href="http://github.com/michalsnik/aos" target="_blank" class="octocat aos-init aos-animate" data-aos="zoom-out" data-aos-delay="1500">

			</a>
		</header>
		<script>
			$(document).ready(function(){
				$('.jawaban-items ul li').on('click',function(){
					$(this).css({background: '#337ab7'});
				})
				$('.hero__scroll').on('click',function(e){
					setTimeout(function(){
						$('.jawab-container').fadeIn('slow');
					},400)
				})
				$('#next-btn').on('click',function(e){
					$('.jawaban-items ul li').each(function(){
						$(this).removeAttr('style');
					})
					var id = Number($(this).attr('data-id'));
					var section = Number($(this).attr('data-section'));
					var sectionCode = $('.section--code')[section];
					var animateSection = function(section, id){
						var sectionCode = $('.section--code')[section];
						$('html, body').animate({
								scrollTop: $($(sectionCode).find('.code')[id]).offset().top
						}, 1000);
					}
					animateSection(section, id);

					if(section == $('.section--code').length-1 && id == $(sectionCode).find('.code').length-1){
						alert('Terima kasih atas partisipasinya!');
						$('.jawab-container').fadeOut('slow');
						$('html, body').animate({
								scrollTop: 0
						}, 3000);
						$(this).attr('data-id',0);
						$(this).attr('data-section',0);
						return false;
					}

					if(id == $(sectionCode).find('.code').length-1){
						var idx = 0;
						var sectionx = section+1;
						// debugger
						var sectionCode = $('.section--code')[sectionx];
						// debugger
						$('html, body').animate({
								scrollTop: $(sectionCode).find('.section-title').offset().top
						}, 1000);
					}else{
						var idx = id+1;
					}
					$(this).attr('data-id',idx)
					$(this).attr('data-section',sectionx)
				})
			});
		</script>
		<style>
			.jawab-container{
				position: fixed;
		    bottom: 0;
		    width: 100%;
		    height: 60px;
		    background: #fff;
		    color: #000;
		    z-index: 1;
		    display: table;
			}
			.jawaban-items, .btn-container{
				display: table-cell;
    		vertical-align: middle;
			}
			.btn-container button{
				background: #337ab7;
				color: #fff;
				border: none;
				padding: 3px 10px;
				border-radius: 5px;
				font-size: 20px;
				text-transform: capitalize;
			}
			.jawaban-items ul{
				text-align: center;
			}
			.jawaban-items ul li{
				margin: 0px 5px;
				width: 35px;
				padding: 5px 0;
				display: inline-block;
				background: tomato;
				cursor: pointer;
				border-radius: 5px;
			}
			.code{
				margin-bottom: 3px;
			}
			.hljs{
				border-radius: 5px;
			}
			.hljs ul{
				padding: 0 8px;
			}
			.code--wider{
				width: 100%;
			}
			.code--wider .hljs{
				padding: 0;
			}
		</style>
			<div class="jawab-container" style="display: none;">
				<div class="jawaban-items">
					<ul>
						<li>A</li>
						<li>B</li>
						<li>C</li>
						<li>D</li>
						<li>E</li>
					</ul>
				</div>
				<div class="btn-container">
					<button id="next-btn" data-id="0" data-section="0">next</button>
				</div>
			</div>
		<section class="section section--code">
			<div class="container tenaga-pengajar">
				<h2 class="section-title">Tenaga Pengajar</h2>
				<div class="code code--small code--left aos-init" data-aos="fade-up">
					<code class="html hljs xml">
						<ul>
							<li>Kesiapan memberikan kuliah (menjelaskan kontrak belajar, tujuan, materikuliah)</li>
						</ul>
					</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="fade-down">
					<code class="html hljs xml">
						<ul>
							<li>Dapat menjawab pertanyaan yang diajukan oleh mahasiswa dengan jelas dan sesua imateri kuliah</li>
						</ul>
					</code>
				</div>
				<div class="code code--small code--left aos-init" data-aos="fade-right">
					<code class="html hljs xml">
						<ul>
							<li>Pemanfaatan media dan teknologi pembelajaran</li>
						</ul>
					</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="fade-left">
					<code class="html hljs xml">
						<ul>
							<li>Kesiapan memberikan kuliah (menjelaskan kontrak belajar, tujuan, materikuliah)</li>
						</ul>
					</code>
				</div>
				<div class="code code--small code--left aos-init" data-aos="fade-up-right">
					<code class="html hljs xml">
						<ul>
							<li>Obyektifitas dan transparansi dosen dalamm emberikan nilai</li>
						</ul>
					</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="fade-up-left">
					<code class="html hljs xml">
						<ul>
							<li>Adanya umpan balik terhadap tugas (Dosen mereview hasil tugas)</li>
						</ul>
					</code>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Sarana Dan Prasarana</h2>
				<div class="code code--small code--left aos-init" data-aos="flip-left">

						<code class="html hljs xml">
							<ul>
								<li>Sarana pembelajaran yang tersedia di ruangan kuliah</li>
							</ul>
						</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="flip-right">

						<code class="html hljs xml">
							<ul>
								<li>Ruang kuliah tertata dengan bersih dan rapih</li>
							</ul>
						</code>
				</div>
				<div class="code code--small code--left aos-init" data-aos="flip-up">

						<code class="html hljs xml">
							<ul>
								<li>Ketersedian buku referensi yang di perpustakaan</li>
							</ul>
						</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="flip-down">

						<code class="html hljs xml">
							<ul>
								<li>Ketersediaan fasilitas kamar kecil yang cukup dan bersih</li>
							</ul>
						</code>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Staff</h2>
				<div class="code code--small code--left aos-init" data-aos="zoom-in">
										<code class="html hljs xml">
											<ul>
												<li>Kemampuan staf akademik untuk melayani administrasi kemahasiswaan</li>
											</ul>
										</code>

				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-in-up">

											<code class="html hljs xml">
												<ul>
													<li>Kualitas staf akademik untuk memenuhi kepentingan mahasiswa</li>
												</ul>
											</code>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-in-down">

											<code class="html hljs xml">
												<ul>
													<li>Kualitas staf akademik untuk memenuhi kepentingan mahasiswa</li>
												</ul>
											</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-in-left">

											<code class="html hljs xml">
												<ul>
													<li>Kualitas staf akademik untuk memenuhi kepentingan mahasiswa</li>
												</ul>
											</code>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-in-right">

											<code class="html hljs xml">
												<ul>
													<li>Kualitas staf akademik untuk memenuhi kepentingan mahasiswa</li>
												</ul>
											</code>
				</div>

				<div class="code code--small code--right aos-init" data-aos="zoom-out">

											<code class="html hljs xml">
												<ul>
													<li>Kualitas staf akademik untuk memenuhi kepentingan mahasiswa</li>
												</ul>
											</code>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-out-up">

											<code class="html hljs xml">
												<ul>
													<li>Membantu mahasiswa apabila menghadapi masalah akademik</li>
												</ul>
											</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-out-down">

											<code class="html hljs xml">
												<ul>
													<li>Rektor beserta jajarannya menyediakan waktu bagi orang tua mahasiswa untuk berkonsultasi</li>
												</ul>
											</code>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-out-right">

											<code class="html hljs xml">
												<ul>
													<li>Memberikan bantuan asuransi bagi mahasiswa yang mendapatkan musibah kecelakaan</li>
												</ul>
											</code>
				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-out-left">

											<code class="html hljs xml">
												<ul>
													<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
												</ul>
											</code>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Survey Akademik</h2>
				<div class="code code--left aos-init" data-aos="fade-up" data-aos-duration="3000">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--right aos-init" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div id="example-anchor" class="code code--left aos-init" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--right aos-init" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--left aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--right aos-init" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Alumni</h2>

				<div class="code code--wider code--left aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--wider code--right aos-init" data-aos="fade-up" data-aos-anchor-placement="center-bottom">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--wider code--left aos-init" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>

				<div class="code code--wider code--right aos-init" data-aos="fade-up" data-aos-anchor-placement="top-center">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--wider code--left aos-init" data-aos="fade-up" data-aos-anchor-placement="center-center">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>
				<div class="code code--wider code--right aos-init" data-aos="fade-up" data-aos-anchor-placement="bottom-center">

																<code class="html hljs xml">
																	<ul>
																		<li>Staf administrasi akademik santun dalam memberikan pelayan</li>
																	</ul>
																</code>
				</div>

			</div>
		</section>
		<footer class="footer">
			<div class="container">

			</div>
		</footer>

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>

		<script>
			hljs.initHighlightingOnLoad();

			$('.hero__scroll').on('click', function(e) {
				$('html, body').animate({
					scrollTop: $(window).height()
				}, 1200);
			});
		</script>

@endsection
