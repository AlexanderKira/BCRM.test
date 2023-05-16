@extends('layouts.base')
@section('page.title')
    Регистрация пользователя
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
                                    {{__('Регистрация')}}
                                </x-card-title>                                        
                            </x-card-header>
                            <x-card-body>                               
                                    <x-form action="{{route('login.store')}}" method="POST">

                                        <x-form-item>
                                            <x-label required>{{__('Email')}}</x-label>
                                            <x-input type="email" name="email" autofocus />
                                        </x-form-item>

                                        <x-form-item>
                                            <x-label required>{{__('Пароль')}}</x-label>
                                            <x-input type="password" name="password" />
                                        </x-form-item>

                                        <x-form-item>
                                            <x-label required>{{__('Повторить пароль')}}</x-label>
                                            <x-input type="password" name="password" />
                                        </x-form-item>
        
                                        <x-form-item>
                                        <x-checkbox>
                                                {{__('Запомнить меня')}}
                                        </x-checkbox>
                                        </x-form-item>
        
                                        <x-button type="submit">
                                            {{__("Войти")}}
                                        </x-button>
                                    </x-form>
                            </x-card-body>
                            
                            </div>

                        </div>
                    </x-card>
                </div>
            </div>    
        </x-container>    
    </section>
    @endsection