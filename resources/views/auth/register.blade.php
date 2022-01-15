<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Register Page</title>
  
    <style>
        body {
        
        background: url('{{url("/images/bg.png")}}') no-repeat;
        height: 100vh;
        font-family: sans-serif;
        background-size: cover;
        background-repeat: no-repeat;    
        }
        .loginBox {
            margin-top: 10px
        }
        #particles-js {
            height: 100%
        }
        .loginBox {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            min-height: 200px;
            background: #000000;
            border-radius: 10px;
            padding: 40px;
            box-sizing: border-box
        }
        .user {
            margin: 0 auto;
            display: block;
            margin-bottom: 20px
        }
        h3 {
            margin: 0;
            padding: 0 0 20px;
            color: #7FFFD4;
            text-align: center
        }
        .loginBox input {
            width: 100%;
            margin-bottom: 20px
        }
        .loginBox input[type="text"],
        .loginBox input[type="password"],
        .loginBox input[type="email"] {
            border: none;
            border-bottom: 2px solid #262626;
            outline: none;
            height: 40px;
            color: #fff;
            background: transparent;
            font-size: 16px;
            padding-left: 20px;
            box-sizing: border-box
        }
        .loginBox input[type="text"]:hover,
        .loginBox input[type="password"]:hover,
        .loginBox input[type="email"]:hover {
            color: #42F3FA;
            border: 1px solid #42F3FA;
            box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black
        }
        .loginBox input[type="text"]:focus,
        .loginBox input[type="password"]:focus,
        .loginBox input[type="email"]:focus {
            border-bottom: 2px solid #42F3FA
        }
        .inputBox {
            position: relative
        }
        .inputBox span {
            position: absolute;
            top: 10px;
            color: #262626
        }
        .loginBox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            font-size: 16px;
            background: #59238F;
            color: #fff;
            border-radius: 20px;
            cursor: pointer
        }
        .loginBox a {
            color: #696969;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            display: block
        }
        a{
            margin-top: 10px;
        }
        a:hover {
            color: #00ffff
        }
        p {
            color: #0000ff
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="loginBox"> <img class="user" src="{{url('/images/logo.png')}}" height="100px" width="100px">
        <h3>Sign Up Here</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="inputBox"> <input type="text" name="name" placeholder="Name" id="name" required> </div>
            <div class="inputBox"> <input type="email" name="email" placeholder="email" id="email"> </div>
            <div class="inputBox"> <input type="password" name="password" placeholder="password" id="password" minlength="8" required> </div>
            <div class="inputBox"> <input type="password" name="password_confirmation" placeholder="Re-password" id="password_confirmation" minlength="8" required> </div> 
            <button type="submit" class="btn btn-outline-warning w-100">{{ __('Register') }}</button>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
        </form> <a href="{{ route('login') }}">Sign-in</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>