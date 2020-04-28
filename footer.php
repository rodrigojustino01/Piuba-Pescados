    <footer id="footerBlock">

        <div class="rodape">

            <div class="bloco-rod-contato">
                <div class="logo-footer-mobile">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v2-logo.png" alt="" width="300px">
                </div>
                <h5>Atendimento</h5>
                <div class="bloco-telefone-rodape">
                    <div class="telefone-rodape">
                        <i class="fa fa-mobile" aria-hidden="true"></i> <a class="tel0" href="tel:02187811965">(21) 9 8623-2707</a>
                    </div>
                    <!-- <div class="whatsapp-rodape">
                        <i class="icon-cel"></i> 
                    </div> -->
                    <div class="email-rodape">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> </i> <a href="mailto:contato@ndn.adv.br">contato@piubapescados.com.br</a>
                    </div>
                    <div class="email-rodape">
                        <i class="fa fa-map-marker" aria-hidden="true"></i> <span>Fortaleza-CE</span><br> Endereço<br>
                    </div>
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/v2-logo.png" alt="" width="300px" class="logo-footer">
                </div>
            </div>

            <div class="bloco-rod-contato">
                <h5>Nossas Redes</h5>
                <div class="bloco-redes-sociais">
                    <a class="tel0" href="tel:02187811965"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a class="tel0" href="tel:02187811965"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a class="tel0" href="tel:02187811965"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a class="tel0" href="tel:02187811965"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="bloco-rod" id="contato">
                <h5>Fale Conosco</h5>
                <div class="form-rodape">
                    <a id="jumpForm3" class="form-ancora"></a>
                    <form name="phpwcmsForm3" id="phpwcmsForm3" action="" method="post" novalidate="novalidate">

                        <div class="formulario">

                            <span class="msg-obrigatorio">Os campos em destaque <em>vermelho</em> são obrigatórios para o envio do formulário.</span>
                            <p>
                                <strong>Nome:</strong>
                                <input type="text" name="nome" id="nome1" value="" placeholder="Nome" class="floatlabel" style="padding-top: 15px; transition: all 0.1s linear 0s;">
                            <p>
                                <strong>E-mail:</strong>
                                <label for="email1" class="label-floatlabel  " style="position: absolute; top: 10px; left: 8px; display: none; opacity: 0; font-size: 11px; font-weight: normal; color: rgb(153, 153, 153); transition: all 0.1s linear 0s;">Email</label>
                                <input type="text" name="email1" id="email1" value="" placeholder="Email" class="floatlabel" style="padding-top: 15px; transition: all 0.1s linear 0s;">
                            </p>
                            <p class="b2">
                                <strong>Telefone:</strong>
                                <label for="telefone1" class="label-floatlabel  " style="position: absolute; top: 10px; left: 8px; display: none; opacity: 0; font-size: 11px; font-weight: normal; color: rgb(153, 153, 153); transition: all 0.1s linear 0s;">(DDD) Telefone</label><input type="text" name="telefone1" id="telefone1" value="" placeholder="(DDD) Telefone" class="floatlabel" style="padding-top: 15px; transition: all 0.1s linear 0s;">
                            </p>
                            <p class="b2">
                                <select name="conheceu1" id="conheceu1">
                                    <option value="Como nos Conheceu?">Como nos Conheceu?</option>
                                    <option value="Google">Google</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Anúncios">Anúncios</option>
                                    <option value="Email Marketing">Email Marketing</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </p>
                            <span class="bt-int">
                                <strong>Informações:</strong>
                                <textarea name="info1" id="info1" cols="20" rows="3" placeholder="Informações extras"></textarea>
                                <span class="bt-enviar">
                                    <i class="icon-send"></i>Enviar
                                    <input type="submit" name="enviar1" id="enviar1" value="">
                                </span>
                            </span>
                            
                        </div>

                        <div>
                            <input type="hidden" name="cpID3" value="3"><input type="hidden" name="559566b7ae493bfbcf03255af316bdf4" value="2894">
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="ssm-overlay ssm-toggle-nav ssm-nav-visible" style="display: none;"></div>

    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/burger.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/front.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-scrolltofixed-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slideandswipe.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.touchSwipe.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.totop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/update.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/floatlabels.min.js"></script>
    <script type="text/javascript">
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("headerBlock");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("topo-fixo");
          } else {
            header.classList.remove("topo-fixo");
          }
        }
    </script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.slider-banner').bxSlider({
                    mode:"fade",
                    controls:false,
                    pager:false,
                    responsive:true,
                    adaptiveHeight:true,
                    nextText:"",
                    prevText:"",
                    pause:5000
                });
            });
        </script>
    <!-- Contador -->
    <script type="text/javascript">
        var animado = false;
        var exec_numero = 24;
        var o_numero = 300;
        var animado_termino = false;
        var removeAnimacao = false;

        function currencyFormatDE(num) {
            return (
                num
                .toFixed() // always two decimal digits
                .replace('.', ',') // replace decimal point character with ,
                .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
            ) // use . as a separator
        }

        $(document).on('scroll', function() {
            if($(this).scrollTop()>=$('#val_emp').position().top-0&&animado==false){
                $('.progessbar').each(function(){
                    $(this).addClass('preencher');
                });
                jQuery({valor: 0}).animate({valor:  exec_numero}, {
                    duration: 2500,
                    easing:'swing', // can be anything
                    step: function(now) { // called on every step
                        // Update the element's text with rounded-up value:
                        $('.titulo.exec').text(currencyFormatDE(Math.ceil(now)));
                    },
                    start:function(){
                        animado = true;
                    },
                    done:function(){
                        animado_termino = true;
                        removeAnimacao = false;
                    }

                });

                jQuery({someValue: 0}).animate({someValue:  o_numero}, {
                    duration: 2500,
                    easing:'swing', // can be anything
                    step: function(now) { // called on every step
                        // Update the element's text with rounded-up value:
                        $('.titulo.o').text(currencyFormatDE(Math.ceil(now)));
                    },
                    start:function(){
                        animado = true;
                    },
                    done:function(){
                        animado_termino = true;
                        removeAnimacao = false;
                    }
                });
            }else if($(this).scrollTop()<=$('#val_emp').position().top-$('#val_emp').height()-0&&animado_termino==true&&removeAnimacao==false){
                removeAnimacao = true;
                animado = false;
                animado_termino = false;
                $('.titulo.o,.titulo.exec').text('0');
                $('.progessbar').each(function(){
                    $(this).removeClass('preencher');
                });
            }
        })


    </script>


    <script type="text/javascript">
        $().ready(function () {

            $('.menu-fixo').scrollToFixed();

            $('.nav').slideAndSwipe();

            $('.botao-menu').click(function () {
                $(this).toggleClass('on');
            });
            
            $('.abrir-fone').click(function () {
                $('div.abrir-fone, div.fone-dropdown').toggleClass('on');
            });

            $('.ico-fone-responsivo').click(function () {
                $('div.info-lateral, i.ico-fone-responsivo').toggleClass('on');
            });

        });
    </script>
    <script> var $buoop = {}; </script>
    
    <?php wp_footer(); ?>
</body>
</html>
