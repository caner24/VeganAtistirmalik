@extends('Shared._loginLayout')


@section('errors')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $hatalar)
                <li>{{ $hatalar }}</li>

        </ul>
    @endforeach
    @endif
@endsection
@section('forms')
    <form method="POST" action="{{ route('postRegister') }}">
        @csrf
        <input type="text" name="name" id="name" placeholder="name" />
        <input type="password" name="password" id="password" placeholder="password" />
        <input type="email" name="email" id="email" placeholder="email address" />
        <button type="submit">create</button>
        <p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
    </form>
@endsection
