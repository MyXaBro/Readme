<section class="authorization">
    <h2 class="visually-hidden">Авторизация</h2>

    {!! Form::open(['route' => 'login' ,'class' => "authorization__form form"]);!!}
    <div class="authorization__input-wrapper form__input-wrapper">
        <div class="form__input-section">
            <label>
                @csrf
                {!! Form::email('email', null, ['class' => 'authorization__input authorization__input--login form__input', 'placeholder' => "email"]); !!}
            </label>
            <svg class="form__input-icon" width="19" height="18">
                <use xlink:href="#icon-input-user"></use>
            </svg>

            <label class="visually-hidden">Email</label>
        </div>
        @error('email')
        <span class="form__error-label form__error-label--login">{{$message}}</span>
        @enderror
    </div>
    <div class="authorization__input-wrapper form__input-wrapper">
        <div class="form__input-section">
            <label>
                {!! Form::password('password', ['class' => "authorization__input authorization__input--password form__input", 'placeholder' => "Пароль"]); !!}
            </label>
            <svg class="form__input-icon" width="16" height="20">
                <use xlink:href="#icon-input-password"></use>
            </svg>
            <label class="visually-hidden">Пароль</label>
        </div>
        <span class="form__error-label">Пароли не совпадают</span>
    </div>
{!! Form::submit('Войти', ['class' => "authorization__submit button button--main"]); !!}
{!! Form::close()!!}
</section>
