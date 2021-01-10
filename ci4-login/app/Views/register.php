    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <?php if (session()->get('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php
                                    echo session()->get('success');
                                    ?>
                                </div>
                            <?php endif; ?>
                            <h3 class="card-title text-left mb-3">Register</h3>
                            <form action="/user/register" method="post">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label>Full Name*</label>
                                    <input type="text" name="full_name" class="form-control p_input" required autocomplete="">
                                </div>
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" name="email" class="form-control p_input" required>
                                </div>
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input type="password" name="password" class="form-control p_input" minlength="8" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirmation Password*</label>
                                    <input type="password" name="password_confirm" class="form-control p_input" minlength="8" required>
                                </div>
                                <?php if (isset($validation)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors(); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                                </div>
                                <p class="sign-up text-center">Already have an Account?<a href="/login"> Log In</a></p>
                                <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>