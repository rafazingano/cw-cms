            <section id="contato">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 form-contato">
                            @if (session('message'))
                            <div class="alert alert-success">
                                {{ trans(session('message')) }}
                            </div>
                            @endif
                            <h3>ENVIE SUA MENSAGEM</h3>
                            <form action="{{ route('lead.store') }}" accept-charset="UTF-8" method="post">
                                {!! csrf_field() !!}
                                <input type="text" class="form-control" required name="name" id="name" placeholder="Nome" />
                                <input type="email" class="form-control" required name="email" id="email" placeholder="E-mail" />
                                <input type="text" class="form-control" required name="phone" id="phone" placeholder="Telefone" />
                                <select class="form-control" required name="assunto" id="assunto">
                                    <option value="" style="display:none;">Assunto</option>
                                    <optgroup label="Não sou cliente">
                                        <option value="contact">Orçamento</option>
                                        <option value="contact">Dúvida</option>
                                    </optgroup>
                                    <optgroup label="Já sou cliente">
                                        <option value="contact">Orçamento</option>
                                        <option value="atendimento">Dúvida</option>
                                    </optgroup>
                                    <option value="contact">Outros</option>
                                </select>
                                <textarea name="content" id="content" required cols="30" rows="5" class="form-control" placeholder="Mensagem"></textarea>
                                <input type="submit" name="enviar" value="ENVIAR" class="btn btn-submit" />
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-6 informacoes">
                            <div class="contato-info col-md-12">
                                <span>
                                    <img src="{{ asset('assets/site/fleek/img/endereco-1.svg') }}" class="img img-responsive" alt="">
                                </span>
                                <p>
                                    Av. Nova York, 344<br/>
                                    Auxiliadora, Porto Alegre - RS<br />
                                    CEP 90550-070
                                </p>
                            </div>
                            <div class="contato-info col-md-12">
                                <span>
                                    <img src="{{ asset('assets/site/fleek/img/telefone-1.svg') }}" class="img img-responsive" alt="">
                                </span>
                                <p>
                                    <a href="tel:+555133616277" title="Ligue para nós" class="call-us">+55 51 3361-6277</a><br />
                                    <a href="tel:+555133616287" title="Ligue para nós" class="call-us">+55 51 3361-6287</a>
                                </p>
                            </div>
                            <div class="contato-info col-md-12">
                                <span>
                                    <img src="{{ asset('assets/site/fleek/img/email-1.svg') }}" class="img img-responsive" alt="">
                                </span>
                                <p>
                                    <a href="mailto:atendimento@agenciafleek.com.br" title="Contate-nos" class="mail-us">atendimento@agenciafleek.com.br</a><br />
                                    <a href="mailto:comercial@agenciafleek.com.br" title="Contate-nos" class="mail-us">comercial@agenciafleek.com.br</a>
                                </p>
                            </div>
                            <div class="contato-info col-md-12">
                                <a href="https://www.facebook.com/agenciafleek" class="like-us">
                                    <span>
                                        <img src="{{ asset('assets/site/fleek/img/facebook-1.svg') }}" class="img img-responsive" alt="">
                                    </span>
                                    <p>
                                        Fleek Marketing Digital
                                    </p>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d863.6545593548731!2d-51.19592002153595!3d-30.019116470692214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979c608bc001f%3A0x503160e937612562!2sAv.+Nova+York%2C+344+-+Auxiliadora%2C+Porto+Alegre+-+RS%2C+90550-070!5e0!3m2!1spt-BR!2sbr!4v1489696647441" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>