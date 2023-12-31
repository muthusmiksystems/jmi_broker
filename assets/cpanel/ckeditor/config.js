/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

//CKEDITOR.editorConfig = function(config) {
//    config.extraPlugins = 'youtube';
//    config.extraAllowedContent = true;
//    config.allowedContent = true;
//    config.removeFormatAttributes = '';
//    for (var tag in CKEDITOR.dtd.$removeEmpty) {
//        CKEDITOR.dtd.$removeEmpty[tag] = false;
//    }
//    // Define changes to default configuration here. For example:
//    // config.language = 'fr';
//    // config.uiColor = '#AADC6E';
//};
//


CKEDITOR.editorConfig = function (config) {
  config.baseHref = 'http://localhost:8888/itsc/';


    // config.skin = 'bootstrapck';
    config.extraPlugins = 'lineutils,clipboard,widgetselection,notification,toolbar,button,widget,btgrid,youtube';



    config.filebrowserBrowseUrl = window.location.origin+'/itsc/assets/admin/kcfinder/browse.php?opener=ckeditor&type=files'
    config.filebrowserImageBrowseUrl = window.location.origin+'/itsc/assets/admin/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = window.location.origin+'/itsc/assets/admin/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = window.location.origin+'/itsc/assets/admin/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = window.location.origin+'/itsc/assets/admin/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = window.location.origin+'/itsc/assets/admin/kcfinder/upload.php?opener=ckeditor&type=flash';


    config.extraAllowedContent = true;
    config.allowedContent = true;
    config.removeFormatAttributes = '';
    for (var tag in CKEDITOR.dtd.$removeEmpty) {
        CKEDITOR.dtd.$removeEmpty[tag] = false;
    }
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.toolbar_Full =
            [
                {name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'DocProps', 'Preview', 'Print', '-', 'Templates']},
                {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
                {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt']},
                {name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
                        'HiddenField']},
                '/',
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
                {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv',
                        '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']},
                {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
                {name: 'insert', items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ,'Youtube']},
                '/',
                {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
                {name: 'colors', items: ['TextColor', 'BGColor']},
                {name: 'tools', items: ['Maximize', 'ShowBlocks', '-', 'About']}
            ];

    config.toolbar_Basic =
            [
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
                {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv',
                        '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']},
                {name: 'insert', items: ['Image', 'Table']},
            ];
};
