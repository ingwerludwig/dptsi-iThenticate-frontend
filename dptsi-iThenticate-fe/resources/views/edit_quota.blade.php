<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DPTSI Adobe License</title>
    <link rel="stylesheet" href={{url("assets/bootstrap/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{url("assets/css/registration.css")}}>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style> 
        input[type=text] {
          width: 100%;
          padding: 12px 1px;
          margin: 8px 0;
          box-sizing: border-box;
          border-radius: px;
        };
        </style>
</head>

<body>
    <div class="container py-5">
        <header class="text-center text-black">
            <h1 style="font-family: 'Poppins'" class="display-4">Edit Monthly Limit</h1>
        </header>

        <div class="row register-form">
            <div class="col-md-8 offset-md-2">
                <button onclick="history.back()" class="btn btn-primary" style="border: none;width: fit-content;height: fit-content;background-color: #013880;margin-bottom:40px" type="button">
                    Back
                </button>
                <form class="custom-form rounded">
                    <div class="row form-group">
                        <div class="col-sm-4 label-column"><label style="font-family: 'Poppins'" class="col-form-label" for="name-input-field">Upload Limit (Monthly)</label></div>
                        <div class="col-sm-6 input-column">
                            <input type="number" class="form-control" id="week" name="week" value="" required="">
                        </div>
                    </div>
                    <div class="row form-group">               
                        <div class="btn-container">
                            <div class="child">
                                <button class="btn btn-primary" style="border:none;width: fit-content;height: fit-content;background-color:#013880;text-align:center;" type="button">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>