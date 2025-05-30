<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/navbar.css') }}">
</head>

<body>
    <nav class="navbar">

        <ul class="links">
            <li><a href="{{ route('user.index') }}">Home</a></li>
            <li><a href="{{ route('layout.acervo') }}">Nosso Acervo</a></li>
            <li><a href="{{ route('layout.sobre') }}">Sobre</a></li>
            <li><a href="{{ route('contato.submit') }}">Contato</a></li>
        </ul>

        <div class="navbar-right">
            <div class="container-input">
                <form action="{{ route('buscar.pagina') }}" method="GET" class="search-form">
                    <input type="text" name="termo" placeholder="Buscar página..." class="search-input" required>
                    <svg fill="#382414" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
                    </svg>
                </form>
            </div>

            <div class="icones">
                <button accesskey="1" style="--i:#ff7e5f;--j:#feb47b;" aria-label="Acessar Empréstimo">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg>
                    </span>
                </button>

                <button accesskey="2" style="--i:#ff7e5f;--j:#feb47b;" aria-label="Acessar Minha Conta">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </span>

                    <div class="nome-usuario" style="margin-left: 10px; color: #fff;">
                        @auth
                            @if (!Auth::user()->is_admin)
                                <div style="color: black;">
                                    Olá, {{ Auth::user()->name }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('logout') }}" style="margin-top: 5px;">
                                @csrf
                                <button type="submit" style="background: none; border: none; color: black; cursor: pointer;">
                                    Logout
                                </button>
                            </form>
                        @endauth
                    </div>
                </button>

            </div>
        </div>

        <div class="menu-toggle" id="mobile-menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

    </nav>
</body>
