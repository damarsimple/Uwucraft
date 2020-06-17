    <style>
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
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
    .custom{
        margin-top: 0rem;
        margin-bottom: 10rem;
    }
</style>
    <form action="login" method="post" class="form-signin" >
        <img class="mb-4" src="../favicon.ico" alt="logo" width="72" height="72">
        <h1 class="text-center h3 mb-3 font-weight-normal"><?= lang('App.Login')?></h1>
        <div class="alert-danger">
        </div>
        <label for="inputEmail" class="sr-only"><?= lang('App.Username')?></label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="<?= lang('App.Username')?>" required autofocus>
        <label for="inputPassword" class="sr-only"><?= lang('App.Password')?></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="<?= lang('App.Password')?>" required>
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> <?= lang('App.Remember_me')?>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit"><?= lang('App.Login')?></button>
        <a class="btn btn-lg btn-primary btn-block custom" href="../users/register"><?= lang('App.Register')?></a>
    </form>

