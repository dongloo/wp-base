jQuery(function($){

	// add image
	$('body').on( 'click', '.rudr-upload-img', function( event ) {
		event.preventDefault();

		const button = $(this);
		const customUploader = wp.media({
			title: 'Set featured image',
			library : { type : 'image' },
			button: { text: 'Set featured image' },
		}).on( 'select', () => {
			const attachment = customUploader.state().get('selection').first().toJSON();
			button.removeClass('button').html( '<img src="' + attachment.url + '" />').next().val(attachment.id).parent().next().show();
		}).open();

	});

	// remove image

	$('body').on('click', '.rudr-remove-img', function( event ) {
		event.preventDefault();
		$(this).hide().prev().find( '[name="_thumbnail_id"]').val('-1').prev().html('Set featured Image').addClass('button' );
	});

	if(jQuery('.owl-admin-custom-post-thumb').length !=0 ){
		const $wp_inline_edit = inlineEditPost.edit;
	
		inlineEditPost.edit = function( id ) {
			$wp_inline_edit.apply( this, arguments );
			let postId = 0;
			if( typeof( id ) == 'object' ) {
				postId = parseInt( this.getId( id ) );
			}
	
			if ( postId > 0 ) {
				const editRow = $( '#edit-' + postId )
				const postRow = $( '#post-' + postId )
				const featuredImage = $( '.column-featured_image', postRow ).html()
				const featuredImageId = $( '.column-featured_image', postRow ).find('img').data('id')
	
				if( featuredImageId != -1 ) {
	
					$( ':input[name="_thumbnail_id"]', editRow ).val( featuredImageId ); // ID
					$( '.rudr-upload-img', editRow ).html( featuredImage ).removeClass( 'button' ); // image HTML
					$( '.rudr-remove-img', editRow ).show(); // the remove link
	
				}
			}
		}
	}
});
