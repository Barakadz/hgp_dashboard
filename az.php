<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 5</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="plugn/jquery.min.js"></script>

    <!-- include summernote css/js-->
    <link href="plugn/summernote/summernote-lite.min.css" rel="stylesheet">
    <script src="plugn/summernote/summernote-lite.min.js"></script>

  </head>
  <body>
  <form method="post">
  <textarea id="summernote" name="contenu" cols="30" rows="10" class="from-control" required></textarea>
</form>

    <script>
      $('#summernote').summernote({
        placeholder:'Votre Contenu',
        tabsize: 2,
        height: 200,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
  </body>
</html>

