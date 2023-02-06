<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/loginform.css')); ?>" > 
    </head>
    <body>
        <div class="formContainer">
            <form name="f1" action="../php/authentication/authentication.php" onsubmit="return validation()" method="POST">
                <img class="imagecontainer" src='../images/Brown_logo_faci.png' />
                <hr />
                <div className="uiForm">
                    <div className="formField">
                        <label id="label">Username</label>
                        <input type="text" id="user" placeholder="Username" name="user" />
                    </div>
                    <div className="formField">
                        <label id="label">Password</label>
                        <input type="password" id="pass" placeholder="Password" name="pass" />
                    </div>
                    <button className="submitBtn">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>



<?php /**PATH C:\Users\lolme\faci\resources\views/login.blade.php ENDPATH**/ ?>