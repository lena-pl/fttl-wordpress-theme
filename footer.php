<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lena_fttl
 */

?>
	<div class="push"></div>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-content">
			<div class="footer-content cf">
				<div class="col-row">

					<form id="enquiries" action="form-success.html" class="col-6" method="post" novalidate>
						<h4>Get in touch!</h4>

						<div class="field">
							<label for="contact-name">
								<span class="enquiries-name">Your Name</span>
							</label>
							<input id="contact-name" class="fv-minlength-2" type="text" name="contact-name" placeholder="John Doe" required>
							<div id="contact-name-error" class="danger"></div>
						</div>

						<div class="field">
							<label for="contact-email">
								<span class="enquiries-email">Your Email</span>
							</label>
							<input id="contact-email" type="email" name="contact-email" placeholder="john.doe@mail.com" required>
							<div id="contact-email-error" class="danger"></div>
						</div>

						<div class="field">
							<label for="contact-comments">
								<span class="enquiries-message">Your Question or Comment</span>
							</label>
							<textarea id="contact-comments" class="fv-minlength-15" name="contact-comments" placeholder="What's on your mind?" required></textarea>
							<div id="contact-comments-error" class="danger"></div>
						</div>

						<input type="submit" name="submit" value="Submit" class="button">
					</form>

					<div class="col-1"><span>&nbsp;</span></div>

					<div class="in-footer col-3">
						<div class="find-us">
							<h4>Find Us</h4>
							<p class="phone-number">0800 limitless</p>
							<p>15 Wanaka Drive,</p>
							<p>Wanaka, NZ</p>
						</div>

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2834.816326019966!2d169.24425!3d-44.72336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa9d54b83e2df476b%3A0x1d00ef876a1e9ae0!2sWanaka+Airport!5e0!3m2!1sen!2snz!4v1429654931739" width="220" height="170" frameborder="0" style="border:0"></iframe>

						<div class="social">
							<a href="https://www.facebook.com/QueenstownNZ" target="_blank"><img src="images/facebook-icon.png" alt="Facebook" height="45" width="45"></a>

							<a href="https://instagram.com/queenstownnz/" target="_blank"><img src="images/instagram-icon.png" alt="Instagram" height="45" width="45"></a>
						</div>
					</div>

					<div class="in-footer col-2">
						<div class="site-map">
							<h4><a href="sitemap.html">Site Map</a></h4>
							<ul>
								<li><a href="./">home</a></li><!--
				             --><li><a href="tours.html">tours</a></li><!--
				             --><li><a href="tours-heli.html">heli tours</a></li><!--
				             --><li><a href="tours-stunt.html">stunt tours</a></li><!--
				             --><li><a href="tours-glider.html">glider tours</a></li><!--
				             --><li><a href="tours-cessna.html">cessna tours</a></li><!--
				             --><li><a href="about.html">about us</a></li><!--
				             --><li><a href="region.html">region</a></li><!--
				             --><li><a href="bookings.html">bookings</a></li><!--
				             --><li><a href="sitemap.html#photo-credits">photo credits</a></li>
							</ul>
							<h4 class="back-to-top"><a href="#">Back to top</a></h4>
						</div>
					</div>

				</div>
			</div>
		</div>

		
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lena_fttl' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lena_fttl' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lena_fttl' ), 'lena_fttl', '<a href="http://underscores.me/" rel="designer">Lena Plaksina</a>' ); ?>
		</div> .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
