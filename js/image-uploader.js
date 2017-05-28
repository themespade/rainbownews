jQuery(document).ready(function ($) {

    imageWidget = {
        uploader: function (widget_id_string) {

            function media_upload(button_class) {
                var _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                $('body').on('click', button_class, function (e) {
                    var button_id = '#' + $(this).attr('id');
                    var self = $(button_id);
                    var send_attachment_bkp = wp.media.editor.send.attachment;
                    var button = $(button_id);
                    var id = button.attr('id').replace('_button', '');
                    _custom_media = true;
                    wp.media.editor.send.attachment = function (props, attachment) {
                        if (_custom_media) {
                            $('#' + widget_id_string + 'attachment_id').val(attachment.id);
                            $('#' + widget_id_string).val(attachment.url);
                            $('#' + widget_id_string + 'preview').attr('src', attachment.url).css('display', 'block');
                        } else {
                            return _orig_send_attachment.apply(button_id, [props, attachment]);
                        }
                    };
                    wp.media.editor.open(button);
                    return false;
                });
            }
            media_upload('.rainbownews_media_button.button');
        }
    };


    var file_frame;
    $( document.body ).on( 'click', '.custom_media_upload', function( event ) {
        var $el = $( this );

        var file_target_input   = $el.parent().find( '.custom_media_input' );
        var file_target_preview = $el.parent().find( '.custom_media_preview' );

        event.preventDefault();

        // Create the media frame.
        file_frame = wp.media.frames.media_file = wp.media({
            // Set the title of the modal.
            title: $el.data( 'choose' ),
            button: {
                text: $el.data( 'update' )
            },
            states: [
                new wp.media.controller.Library({
                    title: $el.data( 'choose' ),
                    library: wp.media.query({ type: 'image' })
                })
            ]
        });

        // When an image is selected, run a callback.
        file_frame.on( 'select', function() {
            // Get the attachment from the modal frame.
            var attachment = file_frame.state().get( 'selection' ).first().toJSON();

            // Initialize input and preview change.
            file_target_input.val( attachment.url );
            file_target_preview.css({ display: 'none' }).find( 'img' ).remove();
            file_target_preview.css({ display: 'block' }).append( '<img src="' + attachment.url + '" style="max-width:100%">' );
        });

        // Finally, open the modal.
        file_frame.open();
    });

    // Media Uploader Preview
    $( 'input.custom_media_input' ).each( function() {
        var preview_image  = $( this ).val(),
            preview_target = $( this ).siblings( '.custom_media_preview' );

        // Initialize image previews.
        if ( preview_image !== '' ) {
            preview_target.find( 'img.custom_media_preview_default' ).remove();
            preview_target.css({ display: 'block' }).append( '<img src="' + preview_image + '" style="max-width:100%">' );
        }
    });


});