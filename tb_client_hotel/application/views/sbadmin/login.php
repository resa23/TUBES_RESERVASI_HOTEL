<body class="bg-gradient-primary">

    <div class="container">
        <?php
        if ($this->session->flashdata('error') != '') {
            echo '<div class="alert alert-danger" role="alert">';
            echo $this->session->flashdata('error');
            echo '</div>';
        }
        ?>

        <?php
        if ($this->session->flashdata('success_register') != '') {
            echo '<div class="alert alert-info" role="alert">';
            echo $this->session->flashdata('success_register');
            echo '</div>';
        }
        ?>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Account</h1>
                                    </div>
                                    <form method="post" action="<?php echo base_url(); ?>auth/login" class="user">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user" id="username" aria-describedby="username" placeholder="Input Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                                        </div>
                                        <a href="<?php echo base_url(); ?>reservation" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        <div class="text-center">
                                            <p class="small">Doesn't Have An Account?</p>
                                            <a class="small" href="<?php echo base_url(); ?>auth/register">Register an Account!</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>