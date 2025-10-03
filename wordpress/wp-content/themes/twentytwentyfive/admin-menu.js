jQuery(document).ready(function($) {
    // Target the "Custom Links" metabox
    var customLinksBox = $('#add-custom-links');

    // Append a new field for "Custom ID"
    customLinksBox.find('#menu-item-url-wrap').after(
        '<p id="menu-item-id-wrap" class="wp-clearfix">' +
        '<label class="howto" for="custom-menu-item-id">ID</label>' +
        '<input type="text" id="custom-menu-item-id" class="regular-text menu-item-textbox" name="custom-menu-id" />' +
        '</p>'
    );
});