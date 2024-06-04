<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
    // set this before initializing the fileinput plugin
 // for example if using bootstrap css 3.4.1 version
</script><!-- bootstrap 5.x or 4.x is supported. You can also use the bootstrap css 3.3.x versions -->

<!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
<link rel="stylesheet" href="plugn/bootstrap-icons/font/bootstrap-icons.css" crossorigin="anonymous">

<link href="plugn/bootstrap-fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />


<script src="plugn/jquery.min.js" crossorigin="anonymous"></script>

<script src="plugn/bootstrap-fileinput/js/plugins/buffer.min.js" type="text/javascript"></script>
<script src="plugn/bootstrap-fileinput/js/plugins/filetype.min.js" type="text/javascript"></script>

<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="plugn/bootstrap-fileinput/js/plugins/piexif.min.js" type="text/javascript"></script>

<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script src="plugn/bootstrap-fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>


<script src="plugn/bootstrap-fileinput/js/fileinput.min.js"></script>


<script src="plugn/bootstrap-fileinput/js/locales/LANG.js"></script>

<div class="file-loading">
    <input id="input-23" name="file" type="file"accept=".doc,.docx,.pdf" required>
</div>
<script>
$(document).ready(function() {
    // For Bootstrap 5.x
    $("#input-23").fileinput({
        showUpload: false,
        layoutTemplates: {
            main1: "{preview}\n" +
            "<div class=\'input-group {class}\'>\n" +
            "   {browse}\n" +
            "   {upload}\n" +
            "   {remove}\n" +
            "   {caption}\n" +
            "</div>"
        } 
    });
    
    // For Bootstrap 4.x uncomment and use below code
    /*
    $("#input-23").fileinput({
        showUpload: false,
        layoutTemplates: {
            main1: "{preview}\n" +
            "<div class=\'input-group {class}\'>\n" +
            "   <div class=\'input-group-btn\ input-group-prepend'>\n" +
            "       {browse}\n" +
            "       {upload}\n" +
            "       {remove}\n" +
            "   </div>\n" +
            "   {caption}\n" +
            "</div>"
        }
    });
    */
});
</script>