@extends('layouts.default')

@section('page-content')

<link rel="stylesheet" href="/css/style.css">
    <section class="relative min-h-screen flex items-center">
      <div class="container mx-auto text-center" style="bottom: 150px; position: relative;">
						<h2 class="text-4xl sm:text-6xl" style="margin-left: -5%;">Minimalist <span class="text-pink-500">Site</span></h2>
            <h3 class="text-2xl sm:text-4xl italic" style="margin-left: -5%;">from Lisnic Roman</h3>
          </div>
          <section class="news" style="margin-right: 40%;">
                  <figure class="card card-product border-0 rounded hover:bg-gray transition">
                      <a href="#"><img class="card-image" src="{{ asset('img/large.jpg') }}" alt="news1" title="news2" width="345" height="345" /></a>
                        <figcaption class="info-wrap">
                          <h3 class="title">
                            <a title="news1" style="color: white;
                                                    font-size: 20px;
                                                    text-shadow: 2px 2px 2px black;
                                                   ">Что лучше Unity или Unreal Engine 4?</a>
                            <span style="
                                          display: flex;
                                          margin: 0 auto;
                                        	width: 300px;
                                          max-height: 200px;
                                          overflow: hidden;
                                          text-overflow: ellipsis;"
                          >Ранее лучшим игровым движком был Unity, но сегодня столь же востребован Unreal Engine 4. Какой же из них лучше выбрать? Давайте разбираться.</span>
                          </h3>
                        </figcaption>
                        </section>

    </section>
