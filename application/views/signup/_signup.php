
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGN UP</title>

    <link href="<?php echo base_url(); ?>asserts/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asserts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asserts/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asserts/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asserts/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/asserts/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Basic Form</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a>Forms</a>
                    </li>
                    <li class="active">
                        <strong>Basic Form</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="ibox-content">
                    <form method="get" class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">First Name</label>

                            <div class="col-sm-6"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Last Name</label>

                            <div class="col-sm-6"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-6"><input type="password" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Email Address</label>

                            <div class="col-sm-6"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-6"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Phone number</label>

                            <div class="col-sm-6"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Zip Code</label>

                            <div class="col-sm-6"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">City</label>
                            <div class="col-sm-6"><select class="form-control m-b" name="account">
                                <option>butwal</option>
                                <option>ktm</option>
                                <option>pokhara</option>
                                <option>nepalgunj</option>
                                    <option>dharan</option>
                                    <option>kapilbastu</option>
                                    <option>chitwan</option>
                                    <option>palpa</option>
                                    <option>tamghas</option>
                                    <option>biratanagar</option>
                                    <option>tulshipur</option>
                                    <option>mahendranagar</option>

                            </select>
                            </div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Gender</label>

                            <div class="col-sm-2">

                                <div class="i-checks"><label> <div class="iradio_square-green" style="position: relative;"><input type="radio" value="option1" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> <i></i> male </label></div>

                            </div>

                            <div class="col-sm-2">

                                <div class="i-checks"><label> <div class="iradio_square-green" style="position: relative;"><input type="radio" value="option1" name="a" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> <i></i> female</label></div>

                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group"><label class="col-sm-2 control-label"></label>

                            <div class="col-sm-2"><button type="button" class="btn btn-primary">save</button></div>
                            <div class="col-sm-2"><button type="button" class="btn btn-primary">cancel</button></div>
                        </div>




                  </form>
            </div>
            </div>

       </div>

        <!-- Mainly scripts -->
        <script src="<?php echo base_url(); ?>/asserts/js/jquery-2.1.1.js"></script>
        <script src="<?php echo base_url(); ?>/asserts/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/asserts/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url(); ?>/asserts/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="<?php echo base_url(); ?>/asserts/js/inspinia.js"></script>
        <script src="<?php echo base_url(); ?>/asserts/js/plugins/pace/pace.min.js"></script>

        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>/asserts/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>
</html>