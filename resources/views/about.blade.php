@extends('layouts.front')
@section('content')
        <main class="no-main">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="ps-breadcrumb__list">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="javascript:void(0);">About Us</a></li>
                </ul>
            </div>
        </div>
        <section class="section--about ps-page--business">
            <div class="banner--block"><img class="banner-img" src="assets/img/abouts.jpeg" alt></div>
            <div class="container">
                <div class="about__farmart">
                    <div class="about__header">
                        <h3 class="about__title">About Craft Corner</h3>
                        <p class="about__subtilte">Craft Corner adalah platform e-commerce yang didedikasikan untuk penjualan produk kerajinan tangan. Kami menyediakan berbagai produk unik dan berkualitas tinggi yang dibuat oleh pengrajin lokal dari berbagai penjuru Indonesia. Craft Corner bertujuan untuk mendukung komunitas pengrajin dan mempromosikan karya mereka ke pasar yang lebih luas.</p>
                        {{-- <p class="about__des">We are breaking ground on The Farmart Market in May 2020 and are anticipating a Grand Opening in Fall 2020. The Farmhouse Barn land is available for weddings and events before the Grand Opening.</p> --}}
                    </div>


                </div>
            </div>


        </section>
    </main>
@endsection
