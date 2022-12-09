<footer>
        <p>&copy; Copyright {{date('Y')}} &middot; 
            <a href="#">kivuyirwamystere@gmail.com</a>
            <!-- Nous ajoutons une condition qui affiche ce lien si nous ne somme pas
            sur la page d'accueil -->
            @if(! Route::is('Accueil')) <br>
            <a href="{{ route('Accueil')}}">
                <button type="button" class="btn btn-outline-primary" >
                    Revenir à la page d'Accueil
                </button>
            </a>
            @endif
        </p>
    </footer>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>