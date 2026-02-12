<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__brand">
                    <a href="/" class="footer__logo" aria-label="REVITA - Página inicial">
                        <img src="/assets/img/logo.png" alt="REVITA" class="footer__logo-img" width="100" height="34">
                    </a>
                    <!-- <p class="footer__tagline">Estratégia, finanças e turnaround.</p> -->
                </div>
                <div class="footer__nav">
                    <span class="footer__nav-title">Navegação</span>
                    <nav aria-label="Rodapé">
                        <ul class="footer__links">
                            <li><a href="/">Home</a></li>
                            <li><a href="/sobre">Sobre</a></li>
                            <li><a href="/especialistas">Especialistas</a></li>
                            <li><a href="/servicos">Serviços</a></li>
                            <li><a href="/contato">Contato</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__contact">
                    <span class="footer__nav-title">Contato</span>
                    <p class="footer__confidencial">Atendimento sob confidencialidade.</p>
                    <a href="mailto:atendimento@revitabr.com.br" class="footer__email">atendimento@revitabr.com.br</a>
                    <a href="https://www.revitabr.com.br" target="_blank" rel="noopener noreferrer" class="footer__site">www.revitabr.com.br</a>
                    <a href="https://www.linkedin.com/company/revita-brasil-estrat%C3%A9gia-finan%C3%A7as-turnaround/" target="_blank" rel="noopener noreferrer" class="footer__linkedin" aria-label="LinkedIn REVITA">
                        <span class="footer__linkedin-icon" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45H16.9v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.56v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.27zM5.34 7.43c-1.14 0-2.06-.93-2.06-2.06 0-1.14.92-2.06 2.06-2.06 1.14 0 2.06.92 2.06 2.06 0 1.13-.92 2.06-2.06 2.06zm1.78 13.02H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45C23.2 24 24 23.23 24 22.27V1.73C24 .77 23.2 0 22.22 0z"/></svg></span>
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <p class="footer__copy">&copy; <?php echo date('Y'); ?> REVITA. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<button class="scroll-top" id="scrollToTop" aria-label="Voltar ao topo" type="button">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<?php include __DIR__ . '/js.php'; ?>
</body>
</html>
