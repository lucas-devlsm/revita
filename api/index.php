<?php $currentPage = 'home'; $pageTitle = ''; include 'includes/head.php'; ?>

<main class="main">
    <section class="hero" id="inicio">
        <div class="hero__bg" aria-hidden="true">
            <span class="hero__bg-shape hero__bg-shape--1"></span>
            <span class="hero__bg-shape hero__bg-shape--2"></span>
            <span class="hero__bg-shape hero__bg-shape--3"></span>
        </div>
        <div class="hero__accent" aria-hidden="true"></div>
        <div class="container container--hero">
            <div class="hero__grid">
                <div class="hero__left">
                    <p class="hero__label">
                        <span class="hero__label-dot" aria-hidden="true"></span>
                        Estratégia, finanças e turnaround
                    </p>
                    <h1 class="hero__title">Clareza para decidir quando importa.</h1>
                    <p class="hero__lead">A REVITA atua ao lado de donos, CEOs e CFOs em decisões estratégicas e financeiras, quando o contexto exige estrutura, clareza e responsabilidade.</p>
                    <p class="hero__sub">Organizamos o cenário, apoiamos a tomada de decisão e acompanhamos a execução quando necessário.</p>
                    <div class="hero__cta">
                        <a href="/contato" class="btn btn--primary">Falar com a Revita</a>
                        <a href="/servicos" class="hero__cta-secondary">Ver serviços</a>
                    </div>
                </div>
                <div class="hero__right">
                    <div class="hero__cards">
                        <a href="/diagnostico-empresarial" class="hero-card">
                            <span class="hero-card__title">Diagnóstico Empresarial</span>
                            <span class="hero-card__desc">Análise financeira, operacional e estratégica com foco em clareza.</span>
                        </a>
                        <a href="/reestruturacao-financeira" class="hero-card">
                            <span class="hero-card__title">Reestruturação Financeira</span>
                            <span class="hero-card__desc">Organização de caixa, dívidas e relacionamento com credores.</span>
                        </a>
                        <a href="/turnaround" class="hero-card">
                            <span class="hero-card__title">Turnaround</span>
                            <span class="hero-card__desc">Apoio direto à mudança de rota em contextos de crise.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--atuacao" id="atuacao">
        <div class="section__accent section__accent--right" aria-hidden="true"></div>
        <div class="container">
            <div class="atuacao__grid">
                <div class="atuacao__left atuacao__pillars-wrap">
                    <ul class="atuacao__pillars">
                        <li class="atuacao__pillar">
                            <span class="atuacao__pillar-num" aria-hidden="true">01</span>
                            <span class="atuacao__pillar-text">Organizamos o cenário financeiro e estratégico.</span>
                        </li>
                        <li class="atuacao__pillar">
                            <span class="atuacao__pillar-num" aria-hidden="true">02</span>
                            <span class="atuacao__pillar-text">Apoiamos a tomada de decisão.</span>
                        </li>
                        <li class="atuacao__pillar">
                            <span class="atuacao__pillar-num" aria-hidden="true">03</span>
                            <span class="atuacao__pillar-text">Acompanhamos a execução quando necessário.</span>
                        </li>
                    </ul>
                </div>
                <div class="atuacao__right atuacao__text-wrap">
                    <span class="section__label">Atuação</span>
                    <h2 class="section__title atuacao__title">Quando decisões não podem ser adiadas</h2>
                    <p class="atuacao__lead">Atuamos em situações em que decisões não podem ser adiadas.</p>
                    <p class="atuacao__cta"><a href="/contato" class="btn btn--atuacao">Falar com a Revita</a></p>
                </div>
            </div>
        </div>
    </section>

    <div class="ticker-bar" aria-hidden="true">
        <div class="ticker-bar__track">
            <div class="ticker-bar__content">
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10M18 20V4M6 20v-4"/></svg>Estratégia</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9M13 17V5M8 17v-3"/></svg>Finanças</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>Turnaround</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>Diagnóstico</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>Reestruturação</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>Governança</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10M18 20V4M6 20v-4"/></svg>Estratégia</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M18 17V9M13 17V5M8 17v-3"/></svg>Finanças</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>Turnaround</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>Diagnóstico</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>Reestruturação</span>
                <span class="ticker-bar__item"><svg class="ticker-bar__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>Governança</span>
            </div>
        </div>
    </div>

    <section class="section section--servicos" id="servicos-home">
        <div class="container">
            <span class="section__label">Serviços</span>
            <h2 class="section__title">O que fazemos</h2>
            <p class="section__intro section--servicos__intro">Conheça nossas áreas de atuação.</p>
            <ul class="servicos-cards">
                <li class="servicos-cards__item">
                    <a href="/diagnostico-empresarial" class="servicos-card">
                        <span class="servicos-card__title">Diagnóstico Empresarial</span>
                        <span class="servicos-card__desc">Análise financeira, operacional e estratégica com foco em clareza e priorização.</span>
                    </a>
                </li>
                <li class="servicos-cards__item">
                    <a href="/reestruturacao-financeira" class="servicos-card">
                        <span class="servicos-card__title">Reestruturação Financeira</span>
                        <span class="servicos-card__desc">Organização de caixa, dívidas, capital de giro e relacionamento com credores.</span>
                    </a>
                </li>
                <li class="servicos-cards__item">
                    <a href="/turnaround" class="servicos-card">
                        <span class="servicos-card__title">Turnaround</span>
                        <span class="servicos-card__desc">Apoio direto à mudança de rota em contextos de crise ou estagnação.</span>
                    </a>
                </li>
                <li class="servicos-cards__item">
                    <a href="/governanca-sucessao" class="servicos-card">
                        <span class="servicos-card__title">Governança & Sucessão</span>
                        <span class="servicos-card__desc">Estruturação da tomada de decisão e transições societárias.</span>
                    </a>
                </li>
                <li class="servicos-cards__item">
                    <a href="/captacao-estrategia-saida" class="servicos-card">
                        <span class="servicos-card__title">Captação & Estratégia de Saída</span>
                        <span class="servicos-card__desc">Preparação para bancos, fundos, M&A ou crescimento estruturado.</span>
                    </a>
                </li>
            </ul>
            <p class="section__link-wrap section--servicos__cta">
                <a href="/servicos" class="btn btn--outline">Ver todos os serviços</a>
            </p>
        </div>
    </section>

    <section class="section section--accent section--contato" id="contato-home">
        <div class="section__accent section__accent--right" aria-hidden="true"></div>
        <div class="container">
            <div class="contato-home__grid">
                <div class="contato-home__left">
                    <span class="section__label section__label--light">Contato</span>
                    <h2 class="section__title section__title--light">Atendimento sob confidencialidade</h2>
                    <p class="contato-home__text">Entre em contato para uma conversa inicial. Atendimento sob confidencialidade.</p>
                    <div class="contato-home__cta">
                        <a href="/contato" class="btn btn--light">Falar com a Revita</a>
                    </div>
                </div>
                <div class="contato-home__right">
                    <div class="contato-home__card">
                        <div class="contato-home__item">
                            <span class="contato-home__label">E-mail</span>
                            <a href="mailto:atendimento@revitabr.com.br" class="contato-home__link">atendimento@revitabr.com.br</a>
                        </div>
                        <div class="contato-home__item">
                            <span class="contato-home__label">Site</span>
                            <a href="https://www.revitabr.com.br" target="_blank" rel="noopener noreferrer" class="contato-home__link">www.revitabr.com.br</a>
                        </div>
                        <div class="contato-home__item">
                            <span class="contato-home__label">LinkedIn</span>
                            <a href="https://www.linkedin.com/company/revita-brasil-estrat%C3%A9gia-finan%C3%A7as-turnaround/" target="_blank" rel="noopener noreferrer" class="contato-home__link">Revita Brasil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
