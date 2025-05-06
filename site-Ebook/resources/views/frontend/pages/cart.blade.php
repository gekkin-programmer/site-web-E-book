@extends('layouts.master')
@section('content')

<main>
<body>
    <div id="navB">
        <div id="logo">
            <div id="img1"><a href="../home_page/home.html"><img width="100%" height="100%"
                src="https://static.zarahome.net/8/static4/itxwebstandard/logo/logo.png?t=202112110318092070005127"
                alt="Zara Logo"></a></div>
        </div>
        <div id="sear">
            <div>SEARCH</div>
            <span>__________________</span>
        </div>
        <div id="Rside">
            <span id="modallogin"><i style="padding-right: 8px;" class="far fa-user"></i>LOG IN</span>
            <span style="margin-right:0;"><i style="padding-right: 8px;" class="fas fa-shopping-bag"></i></span><span style="margin-left:0" id="basketCount">0</span>
        </div>
    </div>

    <div id="cart_container">
        <div id="mainB">
            <button id = "basket">SHOPPING BASKET(0)</button>
            <button id = "later">BUY LATER(0)</button>
        </div>
        <div id="card">
            <div id="product"></div>
        </div>
        <div id="pay">
            <div id="Item">0 &nbsp;<span>ITEM</span></div>
            <hr>
            <div id="lText1_div">
              <div id="lText1">Total items: including tax</div>
              <div id="total">0 &euro;</div>
            </div>
            <div #lText2_div>
              <div id="lText2">TOTAL:</div>
              <div id="total2">0 &euro; *</div>
            </div>
            <div id="cText">DO YOU HAVE A PROMOTIONAL CODE? Enter it when you reach the payment page</div>
            <button id="btn">PROCESS ORDER</button>
        </div>
    </div>

</body>
</main>
@include('layouts.footers.guest.footer')
@endsection

