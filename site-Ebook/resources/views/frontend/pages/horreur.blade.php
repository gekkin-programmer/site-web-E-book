@extends('layouts.master')
@section('content')

<main>
    <header>

        <nav>
            <a href="" class="active">Home</a>
            <a href="">Contact</a>
        </nav>

    </header>


    <div class="carousel">

        <div class="list">

            <div class="item" style="background-image: url('{{ asset('frontend/assets/img/bible2.jpg') }}');">
                <div class="content">
                    <div class="title">LE RITUEL</div>
                    <div class="name"> Adam Nevill</div>
                    <div class="des">Ce livre est sorti en 2011 , il parle de Quatre randonneurs traqués par un culte païen en Suède</div>
                    <div class="btn">
                        <button>Acheter</button>

                    </div>
                </div>
            </div>

            <div class="item" style="background-image: url('{{ asset ('frontend/assets/img/dracula.jpeg') }}');">

                <div class="content">
                    <div class="title">DRACULA</div>
                    <div class="name"> Bram Stoker</div>
                    <div class="des">ce livre est sorti en 1897 parlant du comte Dracula quitte la Transylvanie pour semer la terreur en Angleterre.</div>
                    <div class="btn">
                        <button>Acheter</button>

                    </div>
                </div>

            </div>

            <div class="item" style="background-image: url('{{ asset ('frontend/assets/img/frankenstein.jpeg')}}');">

                <div class="content">
                    <div class="title">FRANKESTEIN</div>
                    <div class="name"> Mary Shelly</div>
                    <div class="des">ce livre est sorti en 1818 , c'est un livre de genre tragedie githique entourant des creatures qui se vengent de leurs createur</div>
                    <div class="btn">
                        <button>Acheter</button>

                    </div>
                </div>

            </div>

            <div class="item" style="background-image: url('{{ asset ('frontend/assets/img/house of leaves.jpeg')}}');">

                <div class="content">
                    <div class="title">HOUSE OF LEAVES</div>
                    <div class="name"> Puzzle Literraire</div>
                    <div class="des">nee en 2000 ce livre parle d'Un couloir apparaît dans une maison, plus grand à l’intérieur qu’à l’extérieur.</div>
                    <div class="btn">
                        <button>Acheter</button>

                    </div>
                </div>

            </div>

            <div class="item" style="background-image: url('{{ asset('frontend/assets/img/shining.jpeg')}}');">

                <div class="content">
                    <div class="title">SHINING</div>
                    <div class="name">Stephen King</div>
                    <div class="des">ecrit en 1977 , ce livre parle d'un écrivain qui devient gardien d’un hôtel hanté qui le pousse au meurtre.</div>
                    <div class="btn">
                        <button>Acheter</button>

                    </div>
                </div>

            </div>

            <div class="item" style="background-image: url('{{ asset('frontend/assets/img/birdbox.jpeg')}}');">

                <div class="content">
                    <div class="title">BIRD BOX</div>
                    <div class="name"> Josh Malerman</div>
                    <div class="des">Un livre tres sombre de l'an 2014 parlant de monstres invisibles qui poussent ceux qui les voient au suicide</div>
                    <div class="btn">
                        <button>Acheter</button>

                    </div>
                </div>

            </div>

            <div class="item" style="background-image: url('{{ asset('frontend/assets/img/it.jpeg')}}');">

                <div class="content">
                    <div class="title">IT</div>
                    <div class="name">Stephen King</div>
                    <div class="des">Un clown maléfique terrorise une ville, revenant tous les 27 ans.</div>
                    <div class="btn">
                        <button>Acheter</button>

                    </div>
                </div>

            </div>


        </div>

        <!--next prev button-->
        <div class="arrows">
            <button class="prev"><</button>
            <button class="next">></button>
        </div>


        <!-- time running -->
        <div class="timeRunning"></div>

    </div>
</main>
@include('layouts.footers.guest.footer')
@endsection
