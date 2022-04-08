<style>
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -o-box-sizing: border-box;
        box-sizing: border-box;
        /* adds animation for all transitions */
        -webkit-transition: .25s ease-in-out;
        -moz-transition: .25s ease-in-out;
        -o-transition: .25s ease-in-out;
        transition: .25s ease-in-out;
        margin: 0;
        padding: 0;
        -webkit-text-size-adjust: none;
    }
    #drawer-toggle {
        position: absolute;
        opacity: 0;
    }
    #drawer-toggle-label {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        left: 0px;
        height:50px;
        width: 50px;
        display: block;
        position: fixed;
        background: rgba(1, 13, 63);
        z-index: 1;
        cursor: pointer;
    }
    #drawer-toggle-label:hover{
        background-color: #ffcf1c;
    }
    #drawer-toggle-label:before {
        content: '';
        display: block;
        position: absolute;
        height: 2px;
        width: 24px;
        background: #8d8d8d;
        left: 13px;
        top: 18px;
        box-shadow: 0 6px 0 #8d8d8d, 0 12px 0 #8d8d8d;
    }
    #drawer {
        position: fixed;
        top: 0;
        left:-300px;
        height: 100%;
        width: 300px;
        background: rgba(1, 13, 63,0.8);
        overflow-x: hidden;
        overflow-y: scroll;
        padding: 20px;
        -webkit-overflow-scrolling: touch;
    }
    #page-content {
        margin-left: 0px;
        margin-top: 50px;
        width: 100%;
        height: calc(100% - 50px);
        overflow-x:hidden;
        overflow-y:scroll;
        -webkit-overflow-scrolling: touch;

        padding: 20px;
    }
    #drawer-toggle:checked ~ #drawer-toggle-label {
        height: 100%;
        width: calc(100% - 300px);
        background: rgba(255,207,28,0.2);
    }
    #drawer-toggle:checked ~ #drawer-toggle-label,
    #drawer-toggle:checked ~ header {
        left: 300px;
    }
    #drawer-toggle:checked ~ #drawer {
        left: 0px;
    }
    #drawer-toggle:checked ~ #page-content {
        margin-left: 300px;
    }
    #drawer ul {
        list-style-type:none;
    }
    #drawer ul .a {
        display:block;
        padding:10px;
        color:#c7c7c7;
        text-decoration:none;
    }
    #drawer ul .a:hover {
        color:white;
    }
    @media all and (max-width:350px) {
        #drawer-toggle:checked ~ #drawer-toggle-label {
            height: 100%;
            width: 50px;
        }
        #drawer-toggle:checked ~ #drawer-toggle-label,
        #drawer-toggle:checked ~ header {
            left: calc(100% - 50px);
        }
        #drawer-toggle:checked ~ #drawer {
            width: calc(100% - 50px);
            padding: 20px;
        }
        #drawer-toggle:checked ~ #page-content {
            margin-left: calc(100% - 50px);
        }
    }
</style>
<header class="header">
    <input type="checkbox" id="drawer-toggle" name="drawer-toggle"/>
    <label for="drawer-toggle" id="drawer-toggle-label"></label>
    <nav id="drawer">
        <ul>
            <li><a href="#" class="a">Personal Detalis</a></li>
            <li><a href="#" class="a">My products</a></li>
            <li><a href="#" class="a">Dashboard</a></li>

        </ul>
    </nav>
    <a href="{{ route('addProduct') }}" class="link" id="add"><br>add product</a>
    <a href="{{ route('showProducts') }}" class="link" id="show"><br>show products</a>
    <a href="{{route('showCart')}}" class="link" id="show2"><br><i class="fa fa-shopping-cart"></i>({{ session()->has('cart') ? session()->get('cart')->qty : '0'}})</a>


                        @guest
                            @if (Route::has('login'))

                                    <a class="link1" href="{{ route('login') }}" id="log"><br>{{ __('Login') }}</a>

                            @endif

                            @if (Route::has('register'))

                                    <a class="link1" href="{{ route('register') }}" id="reg"><br>{{ __('Register') }}</a>

                            @endif
                        @else

                                <a id="navbarDropdown" class="link1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <br>{{ Auth::user()->name }}
                                </a>


                                    <a class="link1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <br>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                        @endguest



</header>
