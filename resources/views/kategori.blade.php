@extends('layouts.front')
@section('content')
    <main class="no-main">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="ps-breadcrumb__list">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="javascript:void(0);">Kategori</a></li>
                </ul>
            </div>
        </div>
        <section class="section-shop shop-categories--default">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="ps-shop--sidebar">
                            <div class="sidebar__category">
                                <div class="sidebar__title">ALL CATEGORIES</div>
                                <div class="ps-widget--category">
                                    <h4>MENU</h4>
                                    <ul>
                                        <li><a href="/"> Home</a></li>
                                        <li><a href="/about">about</a></li>


                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__sort">






                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="category__top">
                            <div class="category__header">
                                <h3 class="category__name">Kerajinan</h3>
                                <div class="category__search">

                                </div>
                            </div>
                            <p class="category__des"><b class='text-black'>Kerajinan Tangan</b> Kerajinan tangan adalah karya seni yang dibuat secara manual menggunakan berbagai bahan dan teknik. Setiap produk kerajinan tangan memiliki nilai estetika, fungsionalitas, dan sering kali menyimpan makna budaya serta sejarah. Di seluruh dunia, kerajinan tangan memainkan peran penting dalam melestarikan warisan budaya dan mendukung ekonomi lokal.</p>
                            <div class="shop__block category__carousel">
                                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="categogy-item"><img src="assets/img/kerajinantangan.jpeg" alt>
                                        <div class="categogy-name">Pengrajin Kayu</div>
                                        {{-- <div class="categogy-number">16 items</div> --}}
                                    </div>
                                    <div class="categogy-item"><img src="assets/img/keraj.jpeg" alt>
                                        <div class="categogy-name">Menyulam</div>
                                        {{-- <div class="categogy-number">23 items</div> --}}
                                    </div>
                                    <div class="categogy-item"><img src="assets/img/kerj.jpeg" alt>
                                        <div class="categogy-name">Pengrajin Kayu</div>
                                        {{-- <div class="categogy-number">16 items</div> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="result__header">
                            <h4 class="title">35<span>Product Found</span></h4>
                            <div class="page">page
                                <input type="text" value="1" disabled>of 3
                            </div>
                        </div>


                            <div class="ps-pagination blog--pagination">
                                <ul class="pagination">
                                    <li class="chevron"><a href="#"><i class="icon-chevron-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="chevron"><a href="#"><i class="icon-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
@endsection
