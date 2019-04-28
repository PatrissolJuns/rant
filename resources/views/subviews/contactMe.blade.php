<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Me Contacter</h2>
          </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
      <div class="container">
        <div class="row">          
          <div class="col-md-7 mb-5"  data-aos="fade">

            <form action="{{ route('EnvoieDeMessage') }}" method="POST" class="p-5 bg-white">
            {!! csrf_field() !!}
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nom</label>
                  <input type="text" name="nom" id="fname" class="form-control" required>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Prenom</label>
                  <input type="text" name="prenom" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Sujet</label> 
                  <input type="subject" name="sujet" id="subject" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Ecrivez votre message ou votre question ici..." required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Envoyer le message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">

              <p class="mb-0 font-weight-bold">Adresse Email</p>
              <p class="mb-0"><a href="#">patrissolkenfack@gmail.com</a></p>

              <p class="mb-0 font-weight-bold">Site Web</p>
              <p class="mb-0"><a href="#">www.patrissolkenfack.heroku.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Plus d'information</h3>
              <p>En remplissant ce formulaire, cela va m'envoyer un mail à l'address <a href="#">patrissolkenfack@gmail.com</a> </p>
            </div>

          </div>
        </div>
    </div>
</div>
