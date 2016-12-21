<?php
require_once("contact_form/config.php");
?>
<div class="theme-page padding-bottom-66">
	<div class="clearfix">
		<div class="row full-width">
			<div class="contact-map" id="map" data-scroll-wheel="0" data-draggable="0"></div>
		</div>
		<div class="row page-margin-top">
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-location">
						<p>60 Water Street<br>Brooklyn, NY 11201</p>
					</li>
				</ul>
			</div>
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-phone">
						<p>Phone:<br>718 369 7411</p>
					</li>
				</ul>
			</div>
			<div class="column column-1-3">
				<ul class="features-list">
					<li class="sl-small-clock">
						<p>Monday - Friday: 9am - 6pm<br>Saturday: 10am - 4pm<br>Sunday: 10am - 4pm</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row page-margin-top">
			<form class="contact-form" id="contact-form" method="post" action="contact_form/contact_form.php">
				<div class="row">
					<fieldset class="column column-1-2">
						<input class="text-input" name="name" type="text" value="<?php echo Name; ?>" placeholder="<?php echo Name; ?>">
						<input class="text-input" name="email" type="text" value="<?php echo Email; ?>" placeholder="<?php echo Email; ?>">
						<input class="text-input" name="phone" type="text" value="<?php echo Phone; ?>" placeholder="<?php echo Phone; ?>">
					</fieldset>
					<fieldset class="column column-1-2">
						<textarea name="message" placeholder="<?php echo Message; ?>"><?php echo Message; ?></textarea>
					</fieldset>
				</div>
				<div class="row margin-top-30">
					<div class="column column-1-2">
						<p class="description t1">We will contact you within one business day.</p>
					</div>
					<div class="column column-1-2 align-right">
						<input type="hidden" name="action" value="contact_form" />
						<input type="submit" name="submit" value="SEND MESSAGE" class="more active">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>