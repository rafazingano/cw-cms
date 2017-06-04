<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Entrar em contato</span>
            </div>
            <div class="col-md-3">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Acompanhe nossos recursos e tecnologia sempre em evolução. Insira seu e-mail e assine nosso boletim informativo.</p>

                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>Sucesso!</strong> Você foi adicionado à nossa lista de e-mails.
                    </div>

                    <div class="alert alert-danger hidden" id="newsletterError"></div>

                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control" placeholder="Seu e-mail" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Cadastrar!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Últimos Tweets</h4>
                <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                    <p>Please wait...</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h4>Contatos</h4>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> <strong>Cidade:</strong> Porto Alegre - RS</p></li>
                        <li><p><i class="fa fa-phone"></i> <strong>Telefone:</strong> (051) 99402-4451</p></li>
                        <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:contato@confrariaweb.com.br">contato@confrariaweb.com.brm</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Siga-nos</h4>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/ConfrariaWeb" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/ConfrariaWeb" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/ConfrariaWeb" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="{{ url('/') }}" class="logo">
                        <img alt="Confraria Web" class="img-responsive" src="{{ asset('assets/site/porto/img/logo-footer.png') }}">
                    </a>
                </div>
                <div class="col-md-7">
                    <p>© Copyright {{ date('Y') }}. All Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <li><a href="{{ url('faq') }}">FAQ's</a></li>
                            <li><a href="{{ url('sitemap') }}">Sitemap</a></li>
                            <li><a href="{{ url('contato') }}">Contato</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>