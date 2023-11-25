@extends('Layouts.app')

@section('content')
<section class="home section" id="home">
    <div class="container">
        <div class="row">
            <div class="home-info padd-15">
                <h3 class="hello">Hello, My Name is <span class="name">Md Atikul Islam</span></h3>
                <h3 class="my-profession">I'm a <span class="typing">Android App Developer</span></h3>
                <p>I'm a Android Application Developer with extensive experience for over 2 years. My experties is to create and Android App Design, Graphic Design, and many more...</p>
                <a href="{{route('contact')}}" class="btn hire-me">Hire Me</a>
            </div>
            <div class="home-img padd-15">
                <img src="{{asset('assets/images/hero.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
