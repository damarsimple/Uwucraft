    <style>
        html,

        body {
        text-align: center;
        height: 100%;
        }

        body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }

    </style>
    <form action="register" method="POST" class="form-signin">
        <img class="mb-4" src="../favicon.ico" alt="logo" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?= lang('App.Register')?></h1>
        <div class="alert-danger">
        </div>
        <label for="inputEmail" class="sr-only"><?= lang('App.Username')?></label>
        <input type="text" name="username" class="form-control" placeholder="<?= lang('App.Username')?>" required autofocus>
        <label for="inputEmail" class="sr-only"><?= lang('App.Email')?></label>
        <input type="email" name="email" class="form-control" placeholder="<?= lang('App.Email')?>" required autofocus>
        <label for="inputPassword" class="sr-only"><?= lang('App.Password')?></label>
        <input type="password" name="password_1" class="form-control" placeholder="<?= lang('App.Password')?>" required>
        <label for="inputPassword" class="sr-only"><?= lang('App.Confirm_Password')?></label>
        <input type="password" name="password_2" class="form-control" placeholder="<?= lang('App.Confirm_Password')?>" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" name="register" type="submit"><?= lang('App.Register')?></button>
        <a class="btn btn-lg btn-primary btn-block" href="../users/login"><?= lang('App.Login')?></a>
    </form>


