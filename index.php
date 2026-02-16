<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechStore - Tienda de Ordenadores</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./CSS/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./CSS/main.css">
  <script src="https://cdn.tailwindcss.com/3.4.17" type="text/javascript"></script>
  <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
  <script src="/_sdk/element_sdk.js" type="text/javascript"></script>
 </head>
<body class="h-full bg-slate-900 text-white">
    <div id="app" class="h-full overflow-auto scrollbar-thin gradient-bg grid-pattern">
        <?php include './modals/navbar.php'; ?>
        
        <!-- Home Page -->
        <main id="main-content" class="min-h-screen">
        <?php include './modals/pageHome.php'; ?>
        <?php include './modals/categorias.php'; ?>
        <?php include './modals/pageCatalog.php'; ?>
        <?php include './modals/pageCart.php'; ?>
        <?php include './modals/login.php'; ?>
        <?php include './modals/register.php'; ?>
        <?php include './modals/pageOrders.php'; ?>
        </main>
        <?php include './modals/trackingModal.php'; ?>

    </div>
</body>
<?php include './modals/footer.php'; ?>

<script src="./JS/main.js"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9cd1ab7a63bf0864',t:'MTc3MDk1Nzg1OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>