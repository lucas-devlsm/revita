<?php $currentPage = 'contato'; $pageTitle = 'Contato'; include 'includes/head.php'; ?>

<main class="main main--page">
    <header class="page-hero page-hero--contato">
        <div class="page-hero__accent" aria-hidden="true"></div>
        <div class="container">
            <h1 class="page-hero__title">Contato</h1>
            <p class="page-hero__subtitle">Atendimento sob confidencialidade</p>
        </div>
    </header>
    <div class="page-content page-content--contact">
        <div class="container">
            <div class="contact-layout">
                <div class="contact-info">
                    <p class="contact-info__text">Entre em contato para uma conversa inicial. Atendimento sob confidencialidade.</p>
                    <p class="contact-info__email">E-mail: <a href="mailto:atendimento@revitabr.com.br">atendimento@revitabr.com.br</a></p>
                    <p class="contact-info__site"><a href="https://www.revitabr.com.br" target="_blank" rel="noopener noreferrer">www.revitabr.com.br</a></p>
                </div>
                <form class="contact-form" action="" method="post">
                    <div class="contact-form__field">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" required placeholder="Seu nome">
                    </div>
                    <div class="contact-form__field">
                        <label for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa" placeholder="Nome da empresa">
                    </div>
                    <div class="contact-form__field">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required placeholder="seu@email.com">
                    </div>
                    <div class="contact-form__field">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Sua mensagem"></textarea>
                    </div>
                    <div class="contact-form__submit">
                        <button type="submit" class="btn btn--primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
