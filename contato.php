<?php include '_header.php'?>
	<body>
		<div class="body">
    <?php include '_topmenu.php'?>
    <div role="main" class="main">
      <section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1" data-plugin-lazyload data-original="img/orbit/Topo_contato.jpeg">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
          <div class="row mt-5">
            <div class="col">
              <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                <li><a href="#">Home</a></li>
                <li class="active">Contato</li>
              </ul>
              <h1 class="custom-text-10 font-weight-bolder">Entre em Contato</h1>
            </div>
          </div>
        </div>
      </section>
      
      <section class="mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h4 class="text-center custom-text-10 mb-4 pb-2 font-weight-bolder custom-title-with-icon custom-title-with-icon-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Fale com a gente, teremos prazer em atendê-lo<span class="text-color-primary">!</span></h4>
                                      
              <div class="d-flex flex-row flex-wrap align-items-center justify-content-center mb-4 pb-3">
                <span class="d-flex flex-column flex-md-row text-center text-md-left px-5 px-md-0 mb-4 mb-md-0 align-items-center custom-text-5 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"><i class="far fa-envelope text-color-primary text-4 mr-2" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"></i> 
                  <a href="mailto:comercial@norrskeneventos.com.br" class="text-color-default">comercial@norrskeneventos.com.br</a>
                </span>
                <span class="d-flex flex-column flex-md-row text-center text-md-left px-5 px-md-0 align-items-center custom-text-5 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"><i class="far fa-clock text-color-primary text-4 ml-md-4 mr-md-2"></i>Seg - Sex 9:00am - 6:00pm </span>
              </div>
              
            </div>
          </div>
          <div class="row">
            
            <div class="col-lg-12">
              
              <form class="contact-form" action="php/contact-form.php" method="POST">
                <div class="contact-form-success alert alert-success d-none mt-4">
                  <strong>Success!</strong> Your message has been sent to us.
                </div>
              
                <div class="contact-form-error alert alert-success d-none mt-4">
                  <strong>Sucesso!</strong> Mensagem enviada.
                  <!-- <span class="mail-error-message text-1 d-block"></span> -->
                </div>
                
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" value="" data-msg-required="Digite o seu nome." maxlength="100" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" name="name" id="name" placeholder="Nome" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" value="" data-msg-required="Digite o seu telefone." maxlength="100" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" name="phone" id="phone" placeholder="Telefone" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" value="" data-msg-required="Digite o seu email." data-msg-email="Please enter a valid email." maxlength="100" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" name="email" id="email" placeholder="E-mail" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" value="" data-msg-required="Qual o motivo do contato?" maxlength="100" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" name="subject" id="subject" placeholder="Assunto" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <textarea maxlength="5000" data-msg-required="Fale mais sobre a sua necessidade." rows="8" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" name="message" id="message" placeholder="Sua Mensagem" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" required></textarea>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col">
                    <button type="submit" herf="index.html" class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-button-with-arrow px-4 py-3 appear-animation" data-loading-text="Loading..." data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    </div>
<?php include '_footer.php'; ?>
