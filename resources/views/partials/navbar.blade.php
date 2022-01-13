@auth

<nav class="bg-cyan-500">            
        <div class="px-2 sm:px-4">            
            <div class="flex items-center justify-between h-14">
                   
                <a href=" {{ route('accueil') }}" class="text-white p-2 hover:bg-sky-700 rounded-md">Accueil</a>      
                <div class="hidden md:block space-x-2">
                    <a href=" {{ route('offre.new') }}" class="text-gray-100 hover:bg-sky-700 p-2 rounded-md"> Poster une offre</a>


                    <a href="{{ route('logout') }}" class="text-gray-100 hover:bg-sky-700 p-2 rounded-md" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Se déconnecter
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>


                    <a href=" {{ route('contact') }}" class="text-gray-100 hover:bg-sky-700 p-2 rounded-md">Contact</a>
                               
                </div>
        </div>

        <div class="md:hidden">
                <div class="px-2 pb-2 space-y-1 mx-auto">
                    <a href=" {{ route('offre.new') }}" class="text-gray-100 hover:bg-sky-700 block p-2 rounded-md"> Poster une offre </a>
                    <a href="{{ route('logout') }}" class="text-gray-100 hover:bg-sky-700 block p-2 rounded-md" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Se déconnecter
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href=" {{ route('contact') }}" class="text-gray-100 hover:bg-sky-700 block p-2 rounded-md">Contact</a>
                            
                </div>                    
            </div>
        </div>

</nav>           

@endauth

@guest

<nav class="bg-cyan-500">            
        <div class="px-2 sm:px-4">            
            <div class="flex items-center justify-between h-14">
                   
                <a href=" {{ route('accueil') }}" class="text-white p-2 hover:bg-sky-700 rounded-md">Accueil</a>      
                <div class="hidden md:block space-x-2">
                    <a href=" {{ route('connexion') }}" class="text-gray-100 hover:bg-sky-700 p-2 rounded-md"> Connexion </a>
                    <a href=" {{ route('inscription') }}" class="text-gray-100 hover:bg-sky-700 p-2 rounded-md"> Inscription</a>
                    <a href=" {{ route('contact') }}" class="text-gray-100 hover:bg-sky-700 p-2 rounded-md">Contact</a>
                     
                </div>
        </div>

        <div class="md:hidden">
                <div class="px-2 pb-2 space-y-1 mx-auto">
                    <a href=" {{ route('connexion') }}" class="text-gray-100 hover:bg-sky-700 block p-2 rounded-md"> Poster une offre </a>
                    <a href=" {{ route('inscription') }}" class="text-gray-100 hover:bg-sky-700 block p-2 rounded-md"> Inscription</a>
                    <a href=" {{ route('contact') }}" class="text-gray-100 hover:bg-sky-700 block p-2 rounded-md">Contact</a>
                            
                </div>                    
            </div>
        </div>

</nav>        

@endguest