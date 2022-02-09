@extends('principal')
@section('conteudo')

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header border-primary text-center text-black">
                    <div class="card-title">
                        <h4><strong>Login</strong></h4>
                    </div>
                </div>

                <div class="card-body">

                    <form action="/logon" method="post">

                        @csrf

                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email"><strong>E-mail:</strong></label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="password"><strong>Senha:</strong></label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-2 mt-3 ">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
