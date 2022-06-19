@extends('layouts.default')

@section('page-content')
<link rel="stylesheet" href="/css/style.css">
<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <section class="relative min-h-screen flex items-center">
      <div class="container mx-auto text-center">
						<h2 class="text-4xl sm:text-8xl">Minimalist <span class="text-pink-500">Site</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">from Lisnic Roman</h3>
          </div>

          <div class="absolute bottom-0 left-0 right-0 p-20">
              <p class="text-center">Sroll to see news</p>
          </div>
    </section>
    <section class="py-20">
      <div class="jobs" style="display: flex;justify-content: center;">
        <h3 class="text-4xl font-bold text-white mb-4 hover:text-pink-500 transition">Jobs</h3>
      </div>
    </section>
    <div class="searchbar" style="display: flex; justify-content: center;">
      <form name="search" method="post" action="search.php">
        <input type="search" style="color: black;" name="query" placeholder="Поиск">
        <button type="submit">Найти</button> 
    </form>
</div>
    <div class="container mx-auto flex" style="justify-content:space-around;">
    <section class="news">
            <figure class="card card-product border-0 rounded hover:bg-gray transition">
                <a href="#"><img class="card-image" src="{{ asset('img/Microsoft-1.jpg') }}" style="max-width: 100%;object-fit: cover;height: 345px;" alt="news1" title="news2" width="345" height="345" /></a>
                  <figcaption class="info-wrap" style="display: flex;justify-content: center;">
                    <h3 class="title ">
                      <span title="news1">PHP Developer (Symfony)</span>
                    </h3>
                  </figcaption>
                        </figure>
                        <a href="javascript:PopUpShow()" class="text bg-pink-500  py-2 px-6 rounded hover:bg-purple-500 transition" style="display: flex;top: 18px;position: relative;justify-content: center;margin: 0 110px;">Send CV</a>
                  </section>

                <section class="news">
              <figure class="card card-product border-0" style="opacity: .8">
            <a href="#"><img class="card-image" src="{{ asset('img/Apple-1.jpg') }}" style="max-width: 100%;object-fit: cover;height: 345px;" alt="news2" title="news2" width="345" height="345" /></a>
        <figcaption class="info-wrap" style="display: flex;justify-content: center;">
      <h3 class="title flex">
    <span title="news2">Programator PHP</span>
    </h3>
        </figcaption>
              </figure>
                <a href='javascript:PopUpShow()' class="text bg-pink-500  py-2 px-6 rounded hover:bg-purple-500 transition" style="display: flex;top: 18px;position: relative;justify-content: center;margin: 0 110px;">Send CV</a>
            </section>

            <section class="news">
                    <figure class="card card-product border-0" style="opacity: .8">
                        <a href="{{ route('about') }}"><img class="card-image" src="{{ asset('img/endava-1.jpg') }}" style="max-width: 100%;object-fit: cover;height: 345px;" alt="news3" title="news3" width="345" height="345" /></a>
                          <figcaption class="info-wrap" style="display: flex;justify-content: center;">
                            <h3 class="title flex">
                              <span title="news3">PHP Back-end Developer</span>
                            </h3>
                          </figcaption>
                                </figure>
                                <a href="javascript:PopUpShow()" class="text bg-pink-500  py-2 px-6 rounded hover:bg-purple-500 transition" style="display: flex;top: 18px;position: relative;justify-content: center;margin: 0 110px;">Send CV</a>
                              </section>
                              <section class="news">
                                      <figure class="card card-product border-0" style="opacity: .8">
                                          <a href="{{ route('about') }}"><img class="card-image" src="{{ asset('img/twitter-1.jpg') }}" style="max-width: 100%;object-fit: cover;height: 345px;" alt="news1" title="news4" width="345" height="345" /></a>
                                            <figcaption class="info-wrap" style="display: flex;justify-content: center;">
                                              <h3 class="title flex">
                                                <span title="news4">PHP developer</span>
                                              </h3>
                                            </figcaption>                      
                                                  <a href="javascript:PopUpShow()" class="text bg-pink-500  py-2 px-6 rounded hover:bg-purple-500 transition" style="display: flex;top: 18px;position: relative;justify-content: center;margin: 0 110px;">Send CV</a>
                                                </section>
                                </div>
                                <div class="pop-up" style=" font-weight: bold;font-size: 19px;display: flex;justify-content: center;">
                              <div class="b-popup" id="popup1" style="box-shadow: 5px 5px 7px #00000085;">
                                <form action="insert.php"  method="POST">
                                  <div class="b-popup-content">
                                    <span style="display: flex; font-size: 19px;justify-content: center;border-bottom: white solid 1px;">Fill in all the fields pls</span>
                                    <div class="inputciv" style="padding:10px;">                              
                                      <input class="cvinput" type="text" name="name" placeholder="Your name" required>
                                      <input class="cvinput" type="text" name="address" placeholder="Your address" required>
                                      <input class="cvinput" type="text" name="education" placeholder="Your education" required>
                                      <input class="cvinput" type="text" name="work" placeholder="Your work(job title)" required>
                                      <input class="cvinput" type="text" name="experience" placeholder="Your experience" required>
                                   
                                    </div>  
                                  <a class="button-x" href="javascript:PopUpHide()" style="
                                  height: 20px;
                                  width: 20px;
                                  padding: 0 15px;
                                  border-radius: 5px;
                                  position: absolute;
                                  top: 0;
                                  right: 0;
                                  display: flex;
                                  place-content: center;">&#10005;</a>
                                  <div class="buttonsend" style="border-bottom: white solid 1px;">
                                  <input type="submit" value="submit" style="
                                  float: right;
                                  font-size: 20px;
                                  background-color: deeppink;
                                  border-radius: 6px;
                                  width: 60px;
                                  padding: 4px;
                                  top: -6px;
                                  position: relative;
                                  margin-top: 15px;
                              ">
                              </div>
                            </form>
                                  </div>
                              </div>
                                </div>
                                <section class="py-20">
                                </section>
<style>
  *{
    font-family: Areal;
}

.b-popup-content .cvinput{
  width: 100%;
  min-height: 40px;
  outline: none;
  resize: none;
  border: 3px solid #cccccc;
  font-family: Tahoma, sans-serif;
  border-radius: 5px;
  padding: 10px;
  margin-top: 5px;
  font-weight: bold;
  color: #000;
}
.b-popup{
    width:500px;
    height: auto;
    background-color: rgba(0,0,0,0.7);
    overflow:hidden;
    position:fixed;
    align-items: center;
    top:100px;
    border-radius: 5px;
}
.b-popup .b-popup-content{
    padding:10px;
    border-radius:5px;
    box-shadow: 0px 0px 0px #000;
}
  </style>

  <script>
    $(document).ready(function(){
        PopUpHide();
    });
    function PopUpShow(){
        $("#popup1").show();
    }
    function PopUpHide(){
        $("#popup1").hide();
    }
</script>


@endsection
