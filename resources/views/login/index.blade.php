@extends('layouts.base')
@section('page.title')
    Страница входа
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="m-0">
                                {{__('Вход')}}
                            </h4>

                        </div>

                        <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label class="required">{{__('Email')}}</label>
                                    <input type="email" name="email" class="form-control" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label class="required">{{__('Пороль')}}</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input name="remember" type="checkbox" value="" id="remember" class="form-check-input">

                                        <label class="form-check-label" for="remember">
                                            {{__('Запомнить меня')}}
                                        </label>
                                      </div>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{__("Войти")}}
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
    
