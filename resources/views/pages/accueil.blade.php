
@extends('layout/pageBase')
<!-- Ici, nous appellons la page pageBase -->
       
@section('title','Gestion de location')  

@section('content')
    <!-- ici, nous appellons la section content de la page pageBase pour mettre les codes qui
    concerne cette page -->
    <section class="body">
    <div class="container col-sm-12">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <img src="{{ asset('img/maison.jpg')}}" class="mr-3"  alt="Image de la maison" >
                </div>    
                <p>Nous somme au <span class="text-color:blue">&hearts;</span> de BUTEMBO</p>

                <!-- forms -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- fin  -->
                
                <p>Nous somme le {{date('d/M/Y')}}. </p><p>l'heure actuel est {{date('h:i A')}}</p>
            </div>
        </div>
    </div>
    </section>

    @endsection
    <!-- ici nous fermons la section -->
   