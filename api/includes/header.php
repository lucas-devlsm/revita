<header class="header" id="header">
    <div class="header__bar">
        <div class="container container--header">
            <div class="header__inner">
                <a href="/" class="header__logo" aria-label="REVITA - Página inicial">
                    <img src="/assets/img/logo.png" alt="REVITA" class="header__logo-img" width="120" height="40">
                </a>
                <nav class="header__nav" id="headerNav" aria-label="Menu principal">
                    <ul class="header__menu">
                        <li><a href="/" class="header__link<?php echo (!isset($currentPage) || $currentPage === 'home') ? ' header__link--active' : ''; ?>">Home</a></li>
                        <li><a href="/sobre" class="header__link<?php echo (isset($currentPage) && $currentPage === 'sobre') ? ' header__link--active' : ''; ?>">Sobre</a></li>
                        <li><a href="/especialistas" class="header__link<?php echo (isset($currentPage) && $currentPage === 'especialistas') ? ' header__link--active' : ''; ?>">Especialistas</a></li>
                        <li class="header__dropdown" aria-haspopup="true" aria-expanded="false">
                            <a href="/servicos" class="header__link header__link--dropdown<?php echo (isset($currentPage) && $currentPage === 'servicos') ? ' header__link--active' : ''; ?>" id="servicosTrigger">Serviços</a>
                            <ul class="header__submenu" id="servicosSubmenu" aria-label="Submenu Serviços">
                                <li><a href="/diagnostico-empresarial" class="header__sublink">Diagnóstico Empresarial</a></li>
                                <li><a href="/reestruturacao-financeira" class="header__sublink">Reestruturação Financeira</a></li>
                                <li><a href="/turnaround" class="header__sublink">Turnaround</a></li>
                                <li><a href="/governanca-sucessao" class="header__sublink">Governança & Sucessão</a></li>
                                <li><a href="/captacao-estrategia-saida" class="header__sublink">Captação & Estratégia de Saída</a></li>
                            </ul>
                        </li>
                        <li><a href="/contato" class="header__link header__link--cta<?php echo (isset($currentPage) && $currentPage === 'contato') ? ' header__link--active' : ''; ?>">Contato</a></li>
                    </ul>
                </nav>
                <button class="header__toggle" id="navToggle" type="button" aria-label="Abrir menu" aria-expanded="false" aria-controls="headerNav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>
<div class="header-overlay" id="headerOverlay" aria-hidden="true"></div>
