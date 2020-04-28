<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="google-site-verification" content="Z76W6Uwap6xw7l1MPBDYUFiLtVQ4SR1YNn8ifwCOhts" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piuba Pescados</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <header id="headerBlock" class="">
      <div class="topo-16">
          <div class="full-max">
              <div class="ssm-toggle-nav ssm-nav-visible">
                  <i class="botao-menu">
                      <span></span>
                  </i>
              </div>

              <a class="logo" href="">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v2-logo.png" alt="" width="170px">
              </a>

              <div class="topo-right">

                      <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'my-custom-menu', 
                            'container_class' => 'nav' ) ); 
                        ?>

                  <div class="abrir-fone">
                      <div class="icone">
                          <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
   
                                $count = WC()->cart->cart_contents_count;
                                ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
                                if ( $count > 0 ) {
                                    ?>
                              <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                              <?php
                                }
                                    ?></a>

                          <?php } ?>
                      </div>

                  </div>

              </div>

              <i class="ico-fone-responsivo icon-phone03"></i>
          </div>
      </div>



      <!-- informações laterais responsivo -->
      <div class="info-lateral">
          <div class="telefone-lateral"><a class="tel-top1" href="tel:02187811965">(21) 9 8781-1965</a></div>

          <div class="email-lateral"><a href="mailto:contato@institutorenovando.com.br">contato@institutorenovando.com.br</a></div>

          <a class="formulario-contato" href="#contato"> Formulário de Contato</a>
      </div>


      <a href="https://www.ndn.adv.br/#" class="voltar-topo cd-top"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>

  </header>

