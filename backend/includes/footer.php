</div>
<!--footer-->
<div class="footer">
	<p>&copy; 2016 Novus Admin Panel.| Design by <a href="https://w3layouts.com/" target="_blank">syarif putrawan hidayatullah</a></p>
</div>
<!--//footer-->
</div>
<!-- Classie -->
<script src="../../js/classie.js"></script>

<script>
	var menuLeft = document.getElementById('cbp-spmenu-s1'),
		showLeftPush = document.getElementById('showLeftPush'),
		body = document.body;

	showLeftPush.onclick = function() {
		classie.toggle(this, 'active');
		classie.toggle(body, 'cbp-spmenu-push-toright');
		classie.toggle(menuLeft, 'cbp-spmenu-open');
		disableOther('showLeftPush');
	};


	function disableOther(button) {
		if (button !== 'showLeftPush') {
			classie.toggle(showLeftPush, 'disabled');
		}
	}
</script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap-Iconpicker -->
<script type="text/javascript" src="../../vendor/icon-picker/dist/js/bootstrap-iconpicker.bundle.min.js"></script>
<!--scrolling js-->
<script src="../../js/jquery.nicescroll.js"></script>
<script src="../../js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="../../js/bootstrap.js"> </script>
</body>

</html>