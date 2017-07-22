<?php
/**
 * Template part for displaying home latest clients section
 *
 *
 * @package ELITE
 */

?>

<section class="twitter">
	<div class="twitter-angled-piece support-red-bg">
		<h3 class="white-text"><i class="fa fa-twitter" aria-hidden="true"></i> Follow us @ELITEathleteM</h3>
	</div>
	<div class="row twitter-feed  primary-gray-bg">
		<div class="flex inside-container">
		<?php echo do_shortcode('[statictweets skin="default" resource="usertimeline" user="eliteATHLETEm" list="" query="from:eliteAthletem AND #eliteFAMILY" id="" count="4" retweets="on" replies="on" ajax="on" show="username,screenname,avatar,time,actions,media"/]'); ?>
		</div><!-- /.twitter-feed -->
	</div><!-- /.page-content -->
</section><!-- /.home.hero -->
