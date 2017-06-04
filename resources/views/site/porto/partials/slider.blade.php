<div class="slider-with-overlay">
    <div class="slider-container rev_slider_wrapper" style="height: 560px;">
        <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 560}">
            <ul>
                <li data-transition="fade">
                    <img src="{{ asset('assets/site/porto/img/slides/slide-bg-5.jpg') }}"  
                         alt=""
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat" 
                         class="rev-slidebg">

                    <div class="tp-caption"
                         data-x="177"
                         data-y="180"
                         data-start="1000"
                         data-transform_in="x:[-300%];opacity:0;s:500;">
                        <img src="{{ asset('assets/site/porto/img/slides/slide-title-border.png') }}" alt=""></div>

                    <div class="tp-caption top-label"
                         data-x="227"
                         data-y="180"
                         data-start="500"
                         data-transform_in="y:[-300%];opacity:0;s:500;">VOCÊ PRECISA DE UM NOVO</div>

                    <div class="tp-caption"
                         data-x="550"
                         data-y="180"
                         data-start="1000"
                         data-transform_in="x:[300%];opacity:0;s:500;"><img src="{{ asset('assets/site/porto/img/slides/slide-title-border.png') }}" alt=""></div>

                    <div class="tp-caption main-label"
                         data-x="220"
                         data-y="210"
                         data-start="1500"
                         data-whitespace="nowrap"						 
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         data-mask_in="x:0px;y:0px;">WEB SITE?</div>

                    <div class="tp-caption bottom-label"
                         data-x="225"
                         data-y="280"
                         data-start="2000"
                         data-transform_in="y:[100%];opacity:0;s:500;">Confira nossas opções de serviços.</div>

                </li>
            </ul>
        </div>
    </div>
    <div class="home-intro" id="home-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        A maneira mais rápida de fazer crescer o seu negócio com o líder em <em>Tecnologia</em>
                        <span>Confira nossas opções e recursos incluídos.</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="get-started">
                        <a href="{{ url('contato') }}" class="btn btn-lg btn-primary">Comece agora!</a>
                        <div class="learn-more">ou <a href="{{ url('servicos') }}">Saiba mais.</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="slider-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="featured-boxes mt-none mb-none">
                        <div class="featured-box featured-box-primary mt-xl">
                            <div class="box-content">
                                <h4 class="mb-none">Como podemos ajudar?</h4>
                                <p>Nos diga como podemos ajudar que logo entraremos em contato com você.</p>
                                <form id="contactForm" action="{{ route('lead.store') }}" method="POST">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Seu nome *</label>
                                                <input type="text" value="" data-msg-required="Por favor insira seu nome." maxlength="100" class="form-control" name="name" id="name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Seu e-mail *</label>
                                                <input type="email" value="" data-msg-required="Por favor insira seu e-mail." data-msg-email="Digite um email validos." maxlength="100" class="form-control" name="email" id="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Seu telefone</label>
                                                <input type="text" value="" data-msg-required="Por favor insira seu telefone." maxlength="100" class="form-control" name="phone" id="subject" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Sua mensagem *</label>
                                                <textarea maxlength="5000" data-msg-required="Por favor digite sua mensagem." rows="3" class="form-control" name="message" id="message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="submit" value="Enviar a mensagem" class="btn btn-primary mb-xl" data-loading-text="Loading...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="alert alert-success hidden" id="contactSuccess">
                                                Mensagem enviada com sucesso.
                                            </div>

                                            <div class="alert alert-danger hidden" id="contactError">
                                                Ops! algo deu errado, tente novamente.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>