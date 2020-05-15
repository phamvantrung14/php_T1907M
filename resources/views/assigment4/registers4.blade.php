@extends('assigment4.layout');
@section('content')

    <div class="col-md-12 " >
        <div class=" col-md-4 loginbox ">
            <div class="row ">

                <div class="col-md-12 logo">
                    <svg class="bi bi-people-circle" width="10em" height="10em"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="col-md-12 input" >
                    <form action="" method="POST" >
                        <div class="form-group">
                            <label for="">Name: </label>
                            <input type="text" name="name" id="" class="form-control" placeholder="enter name" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Email: </label>
                            <input type="text" name="email" id="" class="form-control" placeholder="enter email" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Password: </label>
                            <input type="text" name="password" id="" class="form-control" placeholder="enter password" aria-describedby="helpId">
                        </div>
                        <div class="btn-12">
                            <button type="submit" class="btn-login ">Register</button>
                        </div>
                        <div class="text">
                            <p>Forgot Password? <a href="">Click Here</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    {{--    end container--}}


@endsection

