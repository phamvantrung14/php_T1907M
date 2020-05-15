
@extends("user/layout")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Đăng ký</h1>
                    <p class="lead">Jumbo helper text</p>
                    <hr class="my-2">
                    <p>More info</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 ab">
            <form action="post_register.php" method="POST">
                <div class="form-group">
                    <label for="">Họ và Tên:</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">

                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">

                </div>
                <div class="form-group">

                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">

                </div>

                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
        </div>
    </div>
    <!--        end row-->
</div>
@endsection


