<?php

if ( ! empty( $_POST['www'] ) ) : ?>

Your PageRank is: <?php
	$pagerank = GooglePageRankChecker::getRank( stripslashes( $_POST['www'] ) );
	if ( is_numeric( $pagerank ) ) {
		echo GooglePageRankChecker::getRank( stripslashes( $_POST['www'] ) );
	} else {
		echo 'N/A';
	}

?>

<div class="progress-bar blue stripes">
    <span style="width: <?php
	echo GooglePageRankChecker::getRank( stripslashes( $_POST['www'] ) ); ?>0%;"></span>
</div>

<?php
else :
?>

<div class="progress-bar blue stripes">
    <span style="width: 0%;"></span>
</div>

<?php
endif;
