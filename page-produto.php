<?php
/**
 *    The template for dispalying the index.
 *
 * @package    WordPress
 * @subpackage Rodrigo Justino

 */
?>
<?php /* Template Name: Produto */ ?>
<?php get_header(); ?> 
<div id="mainBlock">
    <div class="banner-page">
		 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-produtos.jpg">
	</div>
	<div class="categoria-produto">
        <div class="full-max">
            <h2>Categorias em Destaqeue</h2>
        </div>
        <div class="imagem-categoria">
        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/categoria-peixe2.jpg">
            <div class="titulo-categoria"><p>Pescados</p></div>
        </div>
         <div class="imagem-categoria">
        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-produtos.jpg">
        </div>
        <div class="imagem-categoria">
        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-produtos.jpg">
        </div>
    </div>
	<div class="ofertas">
	    <div class="full-max">
	        <h2><?php the_title();?></h2>

	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
   
    <div class="destaque-menor-00" id="val_emp">
        <div class="full-max">
            <div class="dados-emp">
                <h2>Pescadores Beneficiados Com a Compra do Pescado</h2>
                <span class="count titulo exec">12</span>+
            </div>

            <div class="dados-emp">
                <h2>Pescados Vendidos Atráves da Pesca Artesenal</h2>
                <span class="count titulo o">150</span>,00
                <p>Kg</p>
            </div>
        </div>
    </div>
    <section class="chamada-wpp">
        <div class="conteudo">
            <div class="titulo"><h2>Comunicação Rápida e Pratica!</h2></div>
            <div class="headlander">Clique no Botão Abaixo Para Entrar Em Contato Agora Mesmo Com Especialista!</div>
            <div class="button">
                <p>
                    <a href="https://api.whatsapp.com/send?phone=5585986232707&text=Ol%C3%A1%20Piuba" target="_blank">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp;&nbsp;Chamar do WhatsApp    
                    </a>
                </p>
            </div>
        </div>
    </section>
    <div class="ofertas" id="nossa-missao">
        <div class="full-max">
            <h2>Acompanhe Nosso Instagram</h2>
            <?php echo do_shortcode( '[instagram-feed]' ); ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>
