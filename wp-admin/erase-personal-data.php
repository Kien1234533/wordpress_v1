                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                forums/">Support forums</a>' ) . '</p>'
);

// Handle list table actions.
_wp_personal_data_handle_actions();

// Cleans up failed and expired requests before displaying the list table.
_wp_personal_data_cleanup_requests();

wp_enqueue_script( 'privacy-tools' );

add_screen_option(
	'per_page',
	array(
		'default' => 20,
		'option'  => 'remove_personal_data_requests_per_page',
	)
);

$_list_table_args = array(
	'plural'   => 'privacy_requests',
	'singular' => 'privacy_request',
);

$requests_table = _get_list_table( 'WP_Privacy_Data_Removal_Requests_List_Table', $_list_table_args );

$requests_table->screen->set_screen_reader_content(
	array(
		'heading_views'      => __( 'Filter erase personal data list' ),
		'heading_pagination' => __( 'Erase personal data list navigation' ),
		'heading_list'       => __( 'Erase personal data list' ),
	)
);

$requests_table->process_bulk_action();
$requests_table->prepare_items();

require_once ABSPATH . 'wp-admin/admin-header.php';
?>

<div class="wrap nosubsub">
	<h1><?php esc_html_e( 'Erase Personal Data' ); ?></h1>
	<p><?php _e( 'This tool helps site owners comply with local laws and regulations by deleting or anonymizing known data for a given user.' ); ?></p>
	<hr class="wp-header-end" />

	<?php settings_errors(); ?>

	<form action="<?php echo esc_url( admin_url( 'erase-personal-data.php' ) ); ?>" method="post" class="wp-privacy-request-form">
		<h2><?php esc_html_e( 'Add Data Erasure Request' ); ?></h2>
		<div class="wp-privacy-request-form-field">
			<table class="form-table">
				<tr>
					<th scope="row">
						<label for="username_or_email_for_privacy_request"><?php esc_html_e( 'Username or email address' ); ?></label>
					</th>
					<td>
						<input type="text" required class="regular-text ltr" id="username_or_email_for_privacy_request" name="username_or_email_for_privacy_request" />
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php _e( 'Confirmation email' ); ?>
					</th>
					<td>
						<label for="send_confirmation_email">
							<input type="checkbox" name="send_confirmation_email" id="send_confirmation_email" value="1" checked="checked" />
							<?php _e( 'Send personal data erasure confirmation email.' ); ?>
						</label>
					</td>
				</tr>
			</table>
			<p class="submit">
				<?php submit_button( __( 'Send Request' ), 'secondary', 'submit', false ); ?>
			</p>
		</div>
		<?php wp_nonce_field( 'personal-data-request' ); ?>
		<input type="hidden" name="action" value="add_remove_personal_data_request" />
		<input type="hidden" name="type_of_action" value="remove_personal_data" />
	</form>
	<hr />

	<?php $requests_table->views(); ?>

	<form class="search-form wp-clearfix">
		<?php $requests_table->search_box( __( 'Search Requests' ), 'requests' ); ?>
		<input type="hidden" name="filter-status" value="<?php echo isset( $_REQUEST['filter-status'] ) ? esc_attr( sanitize_text_field( $_REQUEST['filter-status'] ) ) : ''; ?>" />
		<input type="hidden" name="orderby" value="<?php echo isset( $_REQUEST['orderby'] ) ? esc_attr( sanitize_text_field( $_REQUEST['orderby'] ) ) : ''; ?>" />
		<input type="hidden" name="order" value="<?php echo isset( $_REQUEST['order'] ) ? esc_attr( sanitize_text_field( $_REQUEST['order'] ) ) : ''; ?>" />
	</form>

	<form method="post">
		<?php
		$requests_table->display();
		$requests_table->embed_scripts();
		?>
	</form>
</div>

<?php
require_once ABSPATH . 'wp-admin/admin-footer.php';
