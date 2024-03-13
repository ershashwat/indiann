<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- <link href="css/main.dd7b571f.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="frm">
                        <div class="card frm_data">
                            <div class="card-body">
                                <form method="post" action="login-action.php">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="marrsd">
                                            <img src="images/logo.png" width="50%" alt="">

                                            </div>
                                        </div>
                                    </div>
                                    <fieldset>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="eml" class="form-control" placeholder="Enter email">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Password:</label>
                                            <input type="password" name="passwd" class="form-control" placeholder="Enter password">
                                        </div> -->
                                        <button type="submit" name="submt" value="Submit" class="btn sub">Submit</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <style>
        
.frm_data{
  box-shadow: 1px 2px 7px gray !important;
    border-left: 2px solid #ff9400 !important;
}
.frm{
  padding: 50px 0px;
}
.sub{
  background: orange !important;
  width: 100% !important;
  border-radius: 10px;
  color: white;
}
.sub:hover{
  background: orange;
  width: 100%;
  border-radius: 10px;
}
.marrsd{
    display: flex;
    justify-content: center;
}
    </style>
</body>

</html>