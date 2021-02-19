<?php
	session_start();
	if (!isset($_SESSION['userId']) && !isset($_SESSION['session_id'])) {
		?>
			<script>
				location.href = 'index.php';
			</script>
		<?php
	}