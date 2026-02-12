<?php $currentPage = 'servicos'; $pageTitle = 'Serviços'; include 'includes/head.php'; ?>

<main class="main main--page">
    <header class="page-hero page-hero--servicos">
        <div class="page-hero__accent" aria-hidden="true"></div>
        <div class="container">
            <h1 class="page-hero__title">Serviços</h1>
            <p class="page-hero__subtitle">O que fazemos</p>
        </div>
    </header>
    <article class="page-content page-content--servicos">
        <div class="servicos-page__wrap">
            <div class="container">
                <p class="page-content__intro">Conheça nossas áreas de atuação. Clique em cada serviço para saber mais.</p>
                <div class="servicos-grid servicos-grid--page">
                    <a href="/diagnostico-empresarial" class="servicos-card">
                        <span class="servicos-card__num" aria-hidden="true">01</span>
                        <h2 class="servicos-card__title">Diagnóstico Empresarial</h2>
                        <p class="servicos-card__desc">Análise financeira, operacional e estratégica com foco em clareza e priorização.</p>
                        <span class="servicos-card__link">Ver mais</span>
                    </a>
                    <a href="/reestruturacao-financeira" class="servicos-card">
                        <span class="servicos-card__num" aria-hidden="true">02</span>
                        <h2 class="servicos-card__title">Reestruturação Financeira</h2>
                        <p class="servicos-card__desc">Organização de caixa, dívidas, capital de giro e relacionamento com credores.</p>
                        <span class="servicos-card__link">Ver mais</span>
                    </a>
                    <a href="/turnaround" class="servicos-card">
                        <span class="servicos-card__num" aria-hidden="true">03</span>
                        <h2 class="servicos-card__title">Turnaround</h2>
                        <p class="servicos-card__desc">Apoio direto à mudança de rota em contextos de crise ou estagnação.</p>
                        <span class="servicos-card__link">Ver mais</span>
                    </a>
                    <a href="/governanca-sucessao" class="servicos-card">
                        <span class="servicos-card__num" aria-hidden="true">04</span>
                        <h2 class="servicos-card__title">Governança & Sucessão</h2>
                        <p class="servicos-card__desc">Estruturação da tomada de decisão e transições societárias.</p>
                        <span class="servicos-card__link">Ver mais</span>
                    </a>
                    <a href="/captacao-estrategia-saida" class="servicos-card">
                        <span class="servicos-card__num" aria-hidden="true">05</span>
                        <h2 class="servicos-card__title">Captação & Estratégia de Saída</h2>
                        <p class="servicos-card__desc">Preparação para bancos, fundos, M&A ou crescimento estruturado.</p>
                        <span class="servicos-card__link">Ver mais</span>
                    </a>
                </div>
                <p class="page-content__cta">
                    <a href="/contato" class="btn btn--primary">Falar com a Revita</a>
                </p>
            </div>
        </div>
    </article>
</main>

<?php include 'includes/footer.php'; ?>
