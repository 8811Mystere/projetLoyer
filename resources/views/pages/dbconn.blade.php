@extends('layout/pageBase')
    
    @section('title','BD/ '.Config('app.name'))



    @section('content')

        <div>
            <?php
                if(DB::connection()->getPdo()) {
                    echo "Connexion à la Base de données réussi ".DB::connection()->getDatabaseName();
                }
            ?>
        </div>

    @endsection
   
