<?php
/**
 *    The template for dispalying the index.
 *
 * @package    WordPress
 * @subpackage Rodrigo Justino

 */
?>
 <?php get_header(); ?> 
<div id="mainBlock">
    <div class="banner-02">
        <div class="slideHome swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner01.png" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>  

        <!-- <span id="ancora"></span> -->
        <div class="overlay"></div>
    </div>
    <div class="home" id="ancora">
        <div class="processo-compra">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processo-compra.jpg" alt="Processo de Compra">
            </figure>
        </div>
        <div class="servicos-29">
            <h2>Dicas do Expecialista</h2>
            <h3>Conheça melhor o pescado que vai sua mesa.</h3>

            <div class="full-max">
            
                <div class="box-serv">
                    <div class="cont-serv">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone_peixe.png" data-image-id="8" data-image-hash="747585737c98f6223ce9e752be3757bf" data-image-zoom="1" width="52" height="52" alt="" class="image-thumb">
                        </figure>

                        <div class="info-text">
                            <h4>Peixe fresco</h4>
                            <p>
                                • Aparência: ausência de manchas, furos ou cortes na superfície. <br>
                                • Escamas: bem fi rmes e resistentes. Devem estar translúcidasbr  
                                (parcialmente transparentes) e brilhantes. <br>
                                • Pele: úmida, fi rme e bem aderida. <br>
                                • Olhos: devem ocupar toda a cavidade, ser brilhantes e salientes,
                                sem a presença de pontos brancos ao centro do olho.
                            </p>
                        </div>

                        
                    </div>
                </div>
            
                <div class="box-serv">
                    <div class="cont-serv">
                        <figure>
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/frio.png" data-image-id="9" data-image-hash="3bc59b7fd5a6290aa8e2abdf2038a30c" data-image-zoom="3" width="52" height="52" alt="" class="image-thumb">
                        </figure>
                        <div class="info-text">
                            <h4>Conservação do Pescado</h4>
                            <p>
                                Se o seu pescado fresco não for consumido em até 24h, você pode congelá-lo. Os pescados mais gordurosos podem ser congelados por até 3 meses, e os menos gordurosos, por até 8 meses.
                           </p>
                        </div>

                        
                    </div>
                </div>
            
                <div class="box-serv">
                    <div class="cont-serv">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone_camarao.png" data-image-id="9" data-image-hash="3bc59b7fd5a6290aa8e2abdf2038a30c" data-image-zoom="3" width="52" height="52" alt="Direito Tributário" class="image-thumb">
                        </figure>

                        <div class="info-text">
                            <h4>Crustáceos</h4>
                            <p>
                                • Aspecto: geral brilhante, úmido; corpo em curvatura natural,
                                  rígida, patas fi rmes e resistentes; pernas inteiras e fi rmes;
                                  carapaça bem aderente ao corpo, olhos vivos e destacados. <br>
                                • Coloração: própria à espécie, sem qualquer pigmentação
                                  estranha; não apresentar coloração alaranjada ou negra na
                                  carapaça. <br>
                                • Cheiro: próprio e suave.
                            </p>
                        </div>

                        
                    </div>
                </div>
            
            </div>
        </div>
        <div class="sobre-00" id="nossa-missao">
            <div class="full-max">
                <h2>Nossa Missão</h2>

                <p>O instituto <strong>RENOVANDO VIDAS</strong> é uma instituição juridicamente estabelecida , uma instituição de caráter privado que preza pelos valores cristãos, interdenominacional  prestando serviço a toda a comunidade cristã.
                Como instituição ,somos ideologicamente apartidário e não temos  vínculos com agremiações onde aja acepção de pessoas .<br>
                <br>
                Respeitamos as doutrinas e pensamentos de todas as denominações e não interferimos em doutrinas nem costumes desde que as mesmas não  firam a sã palavra de Deus (bíblia sagrada)
                A capelania ensinada pelo nosso instituto é de excelência  tomamos por referencia Mateus 25.35-46.</p>
                    </div>
        </div>
        <div class="destaque-menor-00" id="val_emp">
            <div class="full-max">
                <div class="dados-emp">
                    <h2>Empresas Reestruturadas</h2>
                    <span class="count titulo exec">0</span>+
                </div>

                <div class="dados-emp">
                    <h2>Ultrapassando a sifra de</h2>
                    <span class="count titulo o">0</span>,00
                    <p>Bilhões de reais</p>
                </div>
            </div>
        </div>
        <section class="chamada-wpp">
            <div class="conteudo">
                <div class="titulo"><h2>Comunicação Rápida e Pratica!</h2></div>
                <div class="headlander">Clique no Botão Abaixo Para Entrar Em Contato Agora Mesmo!</div>
                <div class="button">
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=5521987811965&text=Ol%C3%A1%20Pastor" target="_blank">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>Chamar do WhatsApp    
                        </a>
                    </p>
                </div>
            </div>
        </section>
        <div class="sobre-00" id="nossa-missao">
            <div class="full-max">
                <h2>Acomplahe Nosso Instagram</h2>
                <?php echo do_shortcode( '[instagram-feed]' ); ?>
                
            </div>
        </div>
    </div>

    <div class="cb"></div>
</div>

<?php get_footer(); ?>
