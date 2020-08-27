  @extends('VistasRetys.layoutCards')
  @section('tarjetas')

    <div class="container">


          <div class="row">

                <div class="card border-primary mb-3 justify-content-center" style="max-width: 18rem;">
                 <div class="card-header "><h5 class="card-title font-weight-bold" style="text-align: center">Expedición de informe o certificado de antecedentes no penales</h5>  </div>
                  <div class="card-body text-primary" >
                    <img src="img/icon/certificado.png" style="width:30%;" class="img-size-50 mr-3 img-circle mx-auto d-block" alt="User Image">
                   <h5 class="card-title font-weight-bold" style="text-align: center">Costo:$139</h5>
                  <button type="button" class="btn btn-outline-primary" style="width: 120px">Portal de pago</button>
                  <button type="button" class="btn btn-outline-primary"style="width: 120px">Portal de citas</buttom> <button type="button" class="btn btn-outline-primary" style="width: 120px"> Trámite en línea</button>
                   <button type="button" class="btn btn-outline-primary" style="width: 120px">Descargar formato</button>
                 </div>
                 <a class="btn btn-primary" href="{{ route('trasnparencia') }}" role="button">Más información</a>
                </div>


           <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>-->


        </div>
     </div>


  @stop
