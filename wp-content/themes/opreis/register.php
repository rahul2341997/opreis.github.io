<?php
/* Template Name: Homepage */ 

get_header();
?>

<div class="inner_wrapper_auth">
            <div class="container">
                <div class="login_page register_page">
                    
                    <div class="login_right bg_img_c" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/register-bg.png)">
                        <div class="blur_box">
                            <p>Today, we create innovative solutions to the challenges that consumers face in both their everyday lives and events.</p>
                        </div>
                    </div>
                    <div class="login_left form_sec">
                        <div class="w-100">
                            <h1 class="login_title">Get started</h1>
                            <p class="login_pera">Getting started is easy</p>
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                                    <form id="myform">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group pass_group">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group pass_group">
                                            <input type="password" name="re-enter" class="form-control" placeholder="Confirm Password">
                                        </div>

                                         <div class="auth_btn">
                                            <p>By continuing you indicate that you read and agreed to the Terms of Use</p>
                                            <input type="submit" class="theme_btn" value="Create Account"></input>
                                        </div>
                                        <div class="dis-success">form submitted
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
get_footer();
