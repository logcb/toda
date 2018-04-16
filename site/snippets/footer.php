<?php snippet('footer/footer') ?>

<?php echo js('assets/js/jquery-3.2.1.min.js') ?>
<?php echo js('assets/js/bootstrap.min.js') ?>
<?php echo js('assets/js/scrollreveal.min.js') ?>

<script type="text/javascript">
	window.sr = ScrollReveal({
		viewFactor: 0.1,
		duration:1000,
		distance: '20px'
	});
	sr.reveal('h1, h2, h5, span, p');
	$(function() {
	    $('body').removeClass('fade-out');
	});
</script>

</body>

</html>
