<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header -->
    <header class="header">
        <div class="container header-container">
            <div class="logo">
                <i class="fa-solid fa-code" style="color: var(--primary);"></i>
                <span>Portfolyom</span>
            </div>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#giris">Giriş</a></li>
                    <li><a href="#hakkimda">Hakkımda</a></li>
                    <li><a href="#yetenekler">Yetenekler</a></li>
                    <li><a href="#projeler">Projeler</a></li>
                    <li><a href="#iletisim">İletişim</a></li>
                </ul>
            </nav>
            <a href="javascript:void(0)" onclick="openModal('modal-cv')" class="btn btn-primary btn-sm">Özgeçmiş</a>
        </div>
    </header>
