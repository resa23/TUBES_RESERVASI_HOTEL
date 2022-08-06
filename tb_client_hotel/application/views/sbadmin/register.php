<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Account</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('auth/registerTry'); ?>" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" id="name" aria-describedby="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="phone" id="phone" aria-describedby="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email" aria-describedby="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address" id="address" aria-describedby="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                </div>
                               
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                <hr>
                                <div class="text-center">
                                    <p class="small">Already Have An Account?</p>
                                    <a class="small" href="<?php echo base_url('auth/login'); ?>">Login</a>
                                </div>
                        
                           
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    </div>