<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DPTSI iThenticate</title>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href={{url("assets/css/file-upload.css")}}>
        <link rel="stylesheet" href={{url("assets/css/untitled.css")}}>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
        <script src="assets/js/bootstrap-file-input.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>

    <body id="page-top">
        <div class="bootstrap_datatables">
            <div class="container py-5">
            <header class="text-center text-black">
                <h1 class="display-4">Upload Document</h1>
            </header>
            <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                    <button onclick="history.back()" class="btn btn-primary" style="border: none;width: fit-content;height: fit-content;background-color: #013880;margin-bottom:40px" type="button">
                        Back
                    </button>
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">

                    <div class="container kv-main">
                        <form enctype="multipart/form-data">
                            <input id="file-upload-demo" type="file" multiple><br />
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="border:none;width: fit-content;height: fit-content;background-color:#013880;text-align:center;" type="button">Upload</button>
                        </form>
                    </div>
                    
                    </div>
                </div>
                </div>
            </div>

            </div>
            </div>
        </div>

        {{-- Success Modal After Submit Doc --}}
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="icon-box">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </div>
                    
                    </div>
                    <div class="modal-body text-center">
                        <h4>Success!</h4>	
                        <p>Your files are being checked<br>Please check your result on your dashboard after 10 minutes!</p>
                        <button onclick="window.location='{{ url('/') }}'" class="btn btn-success"><span>Back to Dashboard</span> </button>
                    </div>
                </div>
            </div>
        </div>   
        {{-- Success Modal After Submit Doc --}} 

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/js/Bootstrap-DataTables.js"></script>
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