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
				Scroll down <br>
				<i class="chevron bottom"></i>
			</span>
			<a href="http://github.com/michalsnik/aos" target="_blank" class="octocat aos-init aos-animate" data-aos="zoom-out" data-aos-delay="1500">
			
			</a>
		</header>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Fade</h2>
				<div class="code code--small code--left aos-init" data-aos="fade-up">
					<pre><code class="html hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="fade-down">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-down"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="fade-right">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-right"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="fade-left">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="fade-up-right">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up-right"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="fade-up-left">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="fade-down-right">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-down-right"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="fade-down-left">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-down-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Flip</h2>
				<div class="code code--small code--left aos-init" data-aos="flip-left">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"flip-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="flip-right">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"flip-right"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="flip-up">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"flip-up"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="flip-down">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"flip-down"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Zoom</h2>
				<div class="code code--small code--left aos-init" data-aos="zoom-in">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-in"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-in-up">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-in-up"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-in-down">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-in-down"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-in-left">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-in-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-in-right">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-in-right"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>

				<div class="code code--small code--right aos-init" data-aos="zoom-out">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-out"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-out-up">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-out-up"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-out-down">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-out-down"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--left aos-init" data-aos="zoom-out-right">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-out-right"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--small code--right aos-init" data-aos="zoom-out-left">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"zoom-out-left"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Different settings examples</h2>
				<div class="code code--left aos-init" data-aos="fade-up" data-aos-duration="3000">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-duration</span>=<span class="hljs-value">"3000"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--right aos-init" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-down"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-easing</span>=<span class="hljs-value">"linear"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-duration</span>=<span class="hljs-value">"1500"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div id="example-anchor" class="code code--left aos-init" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-right"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-offset</span>=<span class="hljs-value">"300"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-easing</span>=<span class="hljs-value">"ease-in-sine"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--right aos-init" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-left"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-anchor</span>=<span class="hljs-value">"#example-anchor"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-offset</span>=<span class="hljs-value">"500"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-duration</span>=<span class="hljs-value">"500"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--left aos-init" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-zoom-in"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-easing</span>=<span class="hljs-value">"ease-in-back"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-delay</span>=<span class="hljs-value">"300"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-offset</span>=<span class="hljs-value">"0"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--right aos-init" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"flip-left"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-easing</span>=<span class="hljs-value">"ease-out-cubic"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-duration</span>=<span class="hljs-value">"2000"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
			</div>
		</section>

		<section class="section section--code">
			<div class="container">
				<h2 class="section-title">Anchor placement</h2>

				<div class="code code--wider code--left aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-anchor-placement</span>=<span class="hljs-value">"top-bottom"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--wider code--right aos-init" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-anchor-placement</span>=<span class="hljs-value">"center-bottom"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--wider code--left aos-init" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-anchor-placement</span>=<span class="hljs-value">"bottom-bottom"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>

				<div class="code code--wider code--right aos-init" data-aos="fade-up" data-aos-anchor-placement="top-center">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-anchor-placement</span>=<span class="hljs-value">"top-center"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--wider code--left aos-init" data-aos="fade-up" data-aos-anchor-placement="center-center">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-anchor-placement</span>=<span class="hljs-value">"center-center"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
				</div>
				<div class="code code--wider code--right aos-init" data-aos="fade-up" data-aos-anchor-placement="bottom-center">
					<pre><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">data-aos</span>=<span class="hljs-value">"fade-up"</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hljs-attribute">data-aos-anchor-placement</span>=<span class="hljs-value">"bottom-center"</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span></code></pre>
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
