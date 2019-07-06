<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<a href="<?php echo esc_url( __( 'index.php/aviso-legal', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( 'Aviso Legal', 'twentyseventeen' ), '' ); ?>&nbsp;
	</a>
	<span role="separator" aria-hidden="true"></span>
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<a href="<?php echo esc_url( __( 'index.php/condiciones-de-uso', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( 'Condiciones de Uso', 'twentyseventeen' ), '' ); ?>&nbsp;
	</a>
	<br/><br/>
	<center><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php printf( __( 'Powered by %s', 'twentyseventeen' ), '' ); ?>&nbsp;
		<img style="width:70px;height:auto;" src="/el.andariego.png" />
	</a></center>

</div><!-- .site-info -->
