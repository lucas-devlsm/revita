<?php
if (!isset($serviceTitle)) $serviceTitle = '';
if (!isset($serviceLead)) $serviceLead = '';
if (!isset($serviceContent)) $serviceContent = '';
include 'includes/head.php';
?>
<main class="main main--page">
    <header class="page-hero page-hero--servicos">
        <div class="page-hero__accent" aria-hidden="true"></div>
        <div class="container">
            <h1 class="page-hero__title"><?php echo htmlspecialchars($serviceTitle); ?></h1>
            <p class="page-hero__subtitle"><?php echo htmlspecialchars($serviceLead); ?></p>
        </div>
    </header>
    <article class="page-content page-content--servico-inner">
        <div class="container">
            <div class="servico-inner__body">
                <?php echo $serviceContent; ?>
            </div>
            <p class="page-content__cta">
                <a href="contato" class="btn btn--primary">Falar com a Revita</a>
            </p>
        </div>
    </article>
</main>
<?php include 'includes/footer.php'; ?>
