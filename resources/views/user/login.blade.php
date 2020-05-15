@extends("user/layout")
@section("content")
<div class="col-md-12">
    <div class="container">
        <div class="row align-items-end justify-content-md-center  ">

            <div class="col-md-4 ">
                <form action="post_login.php" >
                    <div class="form-group">
                        <label for="">Email: </label>
                        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">

                    </div>
{{--                    <x-input.email name="email"  holder="email"/>--}}
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">

                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection


