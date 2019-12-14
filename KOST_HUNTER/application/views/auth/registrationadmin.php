<body class="bg-gradient-primary" background="Assets/Logo/house.jpg">
    <div class=" container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
            <div class="card-body p-0">

                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Admin Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('AuthAdmin/registrationadmin'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name_admin" name="name_admin" placeholder="Full name" value="<?= set_value('name_admin'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email_admin" name="email_admin" placeholder="Email Address" value="<?= set_value('email_admin'); ?>">
                                    <?= form_error('email_admin', '<small class="text-danger pl-1">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password3" name="password3" placeholder="Password">
                                        <?= form_error('password3', '<small class="text-danger pl-1">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password4" name="password4" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('AuthAdmin'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>