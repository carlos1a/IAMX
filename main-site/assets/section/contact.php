<section id="contact" class="contact-section section-padding">
      <div class="container">
        <h2 class="section-title wow fadeInUp">Contactame</h2>

        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <strong>Envíame un Mensaje</strong>
              <form name="contact-form" method="post" action="assets/php/sendemail.php">
                <div class="form-group">
                  <label for="InputName1">Nombre</label>
                  <input type="text" name="name" class="form-control" id="InputName1" required="">
                </div>
                <div class="form-group">
                  <label for="InputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" id="InputEmail1" required="">
                </div>
                <div class="form-group">
                  <label for="InputSubject">Asunto</label>
                  <input type="text" name="subject" class="form-control" id="InputSubject">
                </div>
                <div class="form-group">
                  <label for="InputTextarea">Mensaje</label>
                  <textarea name="message" class="form-control" id="InputTextarea" rows="5" required=""></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Envíar Mensaje</button>
              </form>
            </div>
          </div><!-- /.col-md-6 -->

          <div class="col-md-6">
            <div class="row center-xs">
              <div class="col-sm-6">
                <i class="fa fa-map-marker"></i>
                <address>
                  <strong>Dirección/Av/Calle</strong>
                  El Junquito/Urb. Los Molinos<br>
                  Caracas, Venezuela<br>
                </address>
              </div>

              <div class="col-sm-6">
                <i class="fa fa-mobile"></i>
                <div class="contact-number">
                  <strong>Números Telefónicos</strong>
                  (+58) 416 605.43.34
                  <br>
                  (+58) 424 197.28.20
                </div>
              </div>
            </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="location-map">
                <div id="mapCanvas" class="map-canvas"></div>
              </div>
            </div>
          </div>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>