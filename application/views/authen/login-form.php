<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <form action="<?php echo base_url()."index.php/c_user/login/" ?>" method="POST" role="form" id="login-form">
                <legend><h1 class="text-center text-success">Đăng nhập</h1></legend>
                <div class="form-group">
                    <label for="login_name">Tên hoặc email: </label>
                    <input type="text" class="form-control" id="login_name" name="login_name" placeholder="Ví dụ: yourname@info.com" required>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu: </label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu của bạn" required>
                </div>
                <div class="form-group">
                    <?php
                    if( $mes && $mes != '' ):
                        echo '<div class="label label-danger">'.$mes.'</div>';
                    endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>