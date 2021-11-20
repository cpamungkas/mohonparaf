<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form>
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Create an Account</p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="name" id="name" class="form-control form-control-lg" placeholder="Name" />
                        <!-- <label class="form-label" for="Name">Name</label> -->
                    </div>
                    <div class="form-outline mb-4">
                        <input type="username" id="username" class="form-control form-control-lg" placeholder="Username" />
                        <!-- <label class="form-label" for="username">Username</label> -->
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                        <!-- <label class="form-label" for="emailaddress">Email address</label> -->
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password1" id="password1" class="form-control form-control-lg" placeholder="Enter password" />
                        <!-- <label class="form-label" for="password1">Password</label> -->
                    </div>
                    <div class="form-outline mb-3">
                        <input type="password2" id="password2" class="form-control form-control-lg" placeholder="Repeat password" />
                        <!-- <label class="form-label" for="password2">Repeat Password</label> -->
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" name="agreeterms" id="agreeterms" />
                            <label class="form-check-label" for="form2Example3">
                                I have ready and agree to the terms
                            </label>
                        </div>
                        <!-- <a href="#!" class="text-body">Forgot password?</a> -->
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="<?= base_url(); ?>/home" class="link-danger">Login!</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</section>

<?= $this->endSection(); ?>