<?php DvInclude($payload, 'header.blade.php'); ?>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <h1><i class="fa fa-paw"></i> Devless E-commerce</h1>
                    <form class="dv-signin" action="pages/home">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" name="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-block btn-primary">Log in</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <p>©2016 All Rights Reserved. Devless Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
<?php DvInclude($payload, 'footer.blade.php'); ?>
