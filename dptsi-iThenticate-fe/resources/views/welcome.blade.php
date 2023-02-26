<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DPTSI iThenticate</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
           <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href={{url("assets/bootstrap/css/bootstrap.min.css")}}>
        <link rel="stylesheet" href={{url("assets/css/Source%20Sans%20Pro.css")}}>
        <link rel="stylesheet" href={{url("assets/css/dropdown-search-bs4.css")}}>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href={{url("assets/css/Multi-Select-Dropdown-by-Jigar-Mistry.css")}}>
        <link rel="stylesheet" href={{url("assets/css/NZFieldLabel.css")}}>
        <link rel="stylesheet" href={{url("assets/css/Pretty-Registration-Form-.css")}}>
        <link rel="stylesheet" href={{url("assets/css/select.css")}}>
        <link rel="stylesheet" href={{url("assets/css/untitled.css")}}>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src={{url("assets/js/stylish-portfolio.js")}}></script>
        <script src={{url("assets/js/dropdown-search-bs4.js")}}></script>
        <script src={{url("assets/js/Multi-Select-Dropdown-by-Jigar-Mistry.js")}}></script>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
        <script src="assets/js/bootstrap-file-input.js"></script>
        <!-- Styles -->

    </head>
    <body id="page-top">
        <div class="container kv-main">
            <div class="page-header">
                <h1>Upload Document</h1>
            </div>
            <form enctype="multipart/form-data">
                <input id="file-upload-demo" type="file" multiple><br />
                <button type="submit" class="btn btn-success">Upload Files</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    <script>

        $(document).ready(function () {
    
            $("#file-upload-demo").fileinput({
                'theme': 'explorer',
                'uploadUrl': '#',
                overwriteInitial: false,
                initialPreviewAsData: true,

            });
    
        });
    </script>
</html>
