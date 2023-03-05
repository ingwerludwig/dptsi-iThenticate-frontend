<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DPTSI Adobe License</title>
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
    <style>
      table {
          border: 1px solid;
          border-collapse: collapse;
          border-radius: 5px;
      }
    </style>
</head>

<body>
    <div class="bootstrap_datatables">
        <div class="container py-5">
        <header class="text-center text-black">
            <h1 class="display-4">Dashboard Admin</h1>
        </header>
        <div class="row py-5">
            <div class="col-lg-10 mx-auto">
                <button onclick="history.back()" class="btn btn-primary" style="border: none;width: fit-content;height: fit-content;background-color: #013880;margin-bottom:40px" type="button">
                    Back
                </button>
                <button onclick="window.location='{{ url('/upload') }}'" class="btn btn-primary" style="border: none;width: fit-content;height: fit-content;background-color: #013880;margin-bottom:40px" type="button">
                    New Upload
                </button>
                <button onclick="window.location='{{ url('/waiting') }}'" class="btn btn-primary" style="border: none;width: fit-content;height: fit-content;background-color: #013880;margin-bottom:40px" type="button">
                    Waiting Submission
                </button>
                <button onclick="window.location='{{ url('/admin/edit_quota') }}'" class="btn btn-primary" style="border: none;width: fit-content;height: fit-content;background-color: #013880;margin-bottom:40px" type="button">
                    Edit Limit
                </button>
            <div class="card rounded shadow border-0">
                <div class="card-body p-5 bg-white rounded">
                <h3 style="font-weight: bold">3/19000 Submission Limit</h3><br>
                <h5 style="padding-top: 26px;text-align: center;">Last Submission</h5>
                <div class="table-responsive">
                    
                    <table id="example" style="width:100%" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th>Document Details</th>
                        <th>Action</th>
                        <th>Date Uploaded</th>
                        <th>User Name</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="border:none;width: fit-content;height: fit-content;background-color:#013880;text-align:center;" type="button">Details</button></td>
                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#delete-confirm" style="border:none;width: fit-content;height: fit-content;background-color:#FF0000;text-align:center;" type="button">Revoke</button></td>
                            <td style="color: grey">Wednesday, 17 Dec 2022 10:42 PM</td>
                            <th>Ingwer Ludwig</th>
                            <td style="color: red">Waiting</td>
                        </tr>
                        
                        <tr>
                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal1" style="border:none;width: fit-content;height: fit-content;background-color:#013880;text-align:center;" type="button">Details</button></td>
                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#delete-confirm" style="border:none;width: fit-content;height: fit-content;background-color:#FF0000;text-align:center;" type="button">Revoke</button></td>
                            <td style="color: grey">Wednesday, 17 Dec 2022 10:42 PM</td>
                            <th>Ingwer Ludwig</th>
                            <td style="color: red">Waiting</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>

        </div>

 

        {{-- Example Modal for UnFinished Submission --}}
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color:#013880;"><span class="glyphicon glyphicon-lock"></span> Document Details</h4>
                </div>
                <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                    <label style="font-size:24px;font-weight:bold" for="username"><span class="glyphicon glyphicon-user"></span>Document Name</label>
                    <h6 style="font-size:16px" aria-placeholder="SSO_ID">KM3SRBEJcompressed.pdf</h6>
                    </div>
                    <br>
        
                    <div class="form-group">
                    <label style="font-size:24px;font-weight:bold" for="username"><span class="glyphicon glyphicon-user"></span>Size</label>
                    <h6 style="font-size:16px" aria-placeholder="SSO_ID">60 kb</h6>
                    </div>
                    <br>
                    <div class="form-group">
                    <label style="font-size:24px;font-weight:bold" for="username"><span class="glyphicon glyphicon-user"></span>Document Link</label>
                    <a href="https://www.its.ac.id/">
                        <h6 style="font-size:16px" aria-placeholder="SSO_ID">https://www.its.ac.id/</h6>
                    </a>
                    </div>
                    <br>
                    <div class="form-group">
                    <label style="font-size:24px;font-weight:bold" for="username"><span class="glyphicon glyphicon-user"></span>Originality Report</label>
                    <h6 style="font-size:16px;" aria-placeholder="SSO_ID">-</h6>
                    </div>
        
                </form>
                </div>
                <div class="modal-footer">
                <button type="submit" style="background-color: red;" class="btn btn-primary pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                </div>
            </div>
            </div>
        </div>
        {{-- Example Modal for UnFinished Submission --}}

        {{-- Example Modal for Cancel Submission --}}
        <div class="modal fade" id="delete-confirm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <b>Confirm</b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                Are you sure you want to cancel your submission?
                </div>
                <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" style="background-color: #013880">Continue</button>
                <button type="button" class="btn btn-danger" style="background-color: red"data-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
        {{-- Example Modal for Cancel Submission --}}
        </div>
    </div>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/Bootstrap-DataTables.js"></script>
</body>

</html>