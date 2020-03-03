@extends('pub_theme::layouts.app')
@section('content')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="8000">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url(assets/images/ristorante.jpg);">
                <div class="patina">
                    <div class="col-md-8 offset-md-2 text-center welcomepage">
                        <p class="text-white welcometitle" style="word-wrap:break-word;"><strong>OFFERTA.IN</strong></p>
                        <p class="text-white welcomesubtitle" style=" word-wrap:break-word;">Dai più valore ai tuoi acquisti</p>
                        <div class="mb-3">
                            <a class="btn btn-primary welcomebtn" href="login.html">Entra o Registrati</a><br><br>
                            <a class="btn btn-primary welcomebtn" href="infonr.html">Come funziona</a><br><br>
                            <a class="btn btn-primary welcomebtn" href="riscatto-codice.html">Riscatta un codice</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(assets/images/negozio.jpg)">
                <div class="patina">
                    <div class="col-md-8 offset-md-2 text-center welcomepage">
                        <p class="text-white welcometitle" style="word-wrap:break-word;"><strong>#CASHBACK</strong></p>
                        <p class="text-white welcomesubtitle" style=" word-wrap:break-word;">Ad ogni acquisto</p>
                        <div class="mb-3">
                            <a class="btn btn-primary welcomebtn" href="info_cashback.html">Cosa è il Cashback</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(assets/images/coupon.jpg)">
                <div class="patina">
                    <div class="col-md-8 offset-md-2 text-center welcomepage">
                        <p class="text-white welcometitle" style="word-wrap:break-word;"><strong>#COUPON</strong></p>
                        <p class="text-white welcomesubtitle" style=" word-wrap:break-word;">Offerte e Sconti dai tuoi negozi preferiti</p>
                        <div class="mb-3">
                            <a class="btn btn-primary welcomebtn" href="info_coupon.html">Cosa sono i Coupon</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(assets/images/monete.jpg)">
                <div class="patina">
                    <div class="col-md-8 offset-md-2 text-center welcomepage">
                        <p class="text-white welcometitle" style="word-wrap:break-word;"><strong>RICARICA CASHBACK</strong></p>
                        <p class="text-white welcomesubtitle" style=" word-wrap:break-word;">Hai un codice #RICARICA ?</p>
                        <div class="mb-3">
                            <a class="btn btn-primary welcomebtn" href="riscatto-codice.html">Clicca Qui</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
