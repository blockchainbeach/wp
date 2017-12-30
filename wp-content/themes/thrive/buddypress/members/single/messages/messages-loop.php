<?php

/**
 * Fires before the members messages loop.
 *
 * @since BuddyPress (1.2.0)
 */
do_action( 'bp_before_member_messages_loop' ); ?>

<?php if ( bp_has_message_threads( bp_ajax_querystring( 'messages' ) ) ) : ?>

	<div class="pagination no-ajax" id="user-pag">

		<div class="pag-count" id="messages-dir-count">
			<?php bp_messages_pagination_count(); ?>
		</div>

		<div class="pagination-links" id="messages-dir-pag">
			<?php bp_messages_pagination(); ?>
		</div>

	</div><!-- .pagination -->

	<?php

	/**
	 * Fires after the members messages pagination display.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_after_member_messages_pagination' ); ?>

	<?php

	/**
	 * Fires before the members messages threads.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_before_member_messages_threads' ); ?>

	<form action="<?php echo bp_loggedin_user_domain() . bp_get_messages_slug() . '/' . bp_current_action() ?>/bulk-manage/" method="post" id="messages-bulk-management">

		<table id="message-threads" class="messages-notices">

			<thead>
				<tr>
					<th scope="col" class="thread-checkbox bulk-select-all">
						<input id="select-all-messages" type="checkbox">
					</th>
					<th scope="col" class="thread-from"><?php _e( 'From', 'thrive' ); ?></th>
					<th scope="col" class="thread-info"><?php _e( 'Subject', 'thrive' ); ?></th>

					<?php

					/**
					 * Fires inside the messages box table header to add a new column.
					 *
					 * This is to primarily add a <th> cell to the messages box table header. Use
					 * the related 'bp_messages_inbox_list_item' hook to add a <td> cell.
					 *
					 * @since BuddyPress (2.3.0)
					 */
					do_action( 'bp_messages_inbox_list_header' ); ?>

					<?php if ( bp_is_active( 'messages', 'star' ) ) : ?>
						<th scope="col" class="thread-star"><span class="message-action-star"><span class="icon"></span> <span class="screen-reader-text"><?php _e( 'Star', 'thrive' ); ?></span></span></th>
					<?php endif; ?>

					<th scope="col" class="thread-options"><?php _e( 'Actions', 'thrive' ); ?></th>
				</tr>
			</thead>

			<tbody>

				<?php while ( bp_message_threads() ) : bp_message_thread(); ?>

					<tr id="m-<?php bp_message_thread_id(); ?>" class="<?php bp_message_css_class(); ?><?php if ( bp_message_thread_has_unread() ) : ?> unread<?php else: ?> read<?php endif; ?>">
						<td class="bulk-select-check">
							<input type="checkbox" name="message_ids[]" class="message-check" value="<?php bp_message_thread_id(); ?>" />
						</td>

						<?php if ( 'sentbox' != bp_current_action() ) : ?>
							<td class="thread-from" style="text-align: center;">
								<?php bp_message_thread_avatar( array( 'width' => 25, 'height' => 25 ) ); ?>
								<span class="message-from"><?php bp_message_thread_from(); ?></span>
								<span class="total-and-unread-count block"><?php bp_message_thread_total_and_unread_count(); ?></span>
								
							</td>
						<?php else: ?>
							<td class="thread-from">
								<?php bp_message_thread_avatar( array( 'width' => 25, 'height' => 25 ) ); ?>
								<span class="to"><?php _e( 'To:', 'thrive' ); ?></span> <?php bp_message_thread_to(); ?>
								<?php bp_message_thread_total_and_unread_count(); ?>
								<span class="activity"><?php bp_message_thread_last_post_date(); ?></span>
							</td>
						<?php endif; ?>

						<td class="thread-info">
							<div class="small">
								<span class="activity"><?php bp_message_thread_last_post_date(); ?></span>
							</div>
							<p><a href="<?php bp_message_thread_view_link(); ?>" title="<?php esc_attr_e( "View Message", "thrive" ); ?>"><?php bp_message_thread_subject(); ?></a></p>
							<p class="thread-excerpt"><?php bp_message_thread_excerpt(); ?></p>
						</td>

						<?php

						/**
						 * Fires inside the messages box table row to add a new column.
						 *
						 * This is to primarily add a <td> cell to the message box table. Use the
						 * related 'bp_messages_inbox_list_header' hook to add a <th> header cell.
						 *
						 * @since BuddyPress (1.1.0)
						 */
						do_action( 'bp_messages_inbox_list_item' ); ?>

						<?php if ( bp_is_active( 'messages', 'star' ) ) : ?>
							<td class="thread-star">
								<?php bp_the_message_star_action_link( array( 'thread_id' => bp_get_message_thread_id() ) ); ?>
							</td>
						<?php endif; ?>

						<td class="thread-options">
							<?php if ( bp_message_thread_has_unread() ) : ?>
								<a class="read" href="<?php bp_the_message_thread_mark_read_url();?>"><?php _e( 'Read', 'thrive' ); ?></a>
							<?php else : ?>
								<a class="unread" href="<?php bp_the_message_thread_mark_unread_url();?>"><?php _e( 'Unread', 'thrive' ); ?></a>
							<?php endif; ?>
							 |
							<a class="delete" href="<?php bp_message_thread_delete_link(); ?>"><?php _e( 'Delete', 'thrive' ); ?></a>
						</td>
					</tr>

				<?php endwhile; ?>

			</tbody>

		</table><!-- #message-threads -->

		<div class="messages-options-nav">
			<?php bp_messages_bulk_management_dropdown(); ?>
		</div><!-- .messages-options-nav -->

		<?php wp_nonce_field( 'messages_bulk_nonce', 'messages_bulk_nonce' ); ?>
	</form>

	<?php

	/**
	 * Fires after the members messages threads.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_after_member_messages_threads' ); ?>

	<?php

	/**
	 * Fires and displays member messages options.
	 *
	 * @since BuddyPress (1.2.0)
	 */
	do_action( 'bp_after_member_messages_options' ); ?>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( 'Sorry, no messages were found.', 'thrive' ); ?></p>
	</div>

<?php endif;?>

<?php

/**
 * Fires after the members messages loop.
 *
 * @since BuddyPress (1.2.0)
 */
do_action( 'bp_after_member_messages_loop' ); ?>