@extends('layouts.base')
@section('page.title')
    Страница входа
@endsection
@section('content')
    <section>    
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <x-card>
                        <div class="card">
                            <x-card-header> 
                                <x-card-title>
                                    {{__('Вход')}}
                                </x-card-title>                                        
                            </x-card-header>
                            <x-card-body>                               
                                    <form action="{{route('login.store')}}" method="POST">

                                        <div class="mb-3">
                                            <label class="required">{{__('Email')}}</label>
                                            <input type="email" name="email" class="form-control" autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label class="required">{{__('Пароль')}}</label>
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
                            </x-card-body>
                            
                            </div>
    
                        </div>
                    </x-card>
                </div>
            </div>    
        </x-container>    
    </section>
@endsection
    
