/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
// Focus at the beginning of the editable.
    config.startupFocus = 'start';

// Focus at the end of the editable.
    config.startupFocus = 'end';
    config.inline = true;
    config.fullPage = true;
    config.allowedContent = true;
};

