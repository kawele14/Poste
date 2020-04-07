@extends('layouts.home')

@section('pageTitle', $pageTitle)

@section('content')


<div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10">
          
          
          <div class="row justify-content-center mb-4">
            <div class="col-md-10 text-center">
              <h1 data-aos="fade-up">Global Finance <span class="typed-words"></span></h1>
              <!--<p data-aos="fade-up" class=" w-75 mx-auto">GLOBAL FINANCE BANK propose à ses membres, utilisateurs des services, l’accès à une offre de services financiers intégrés. Au crédit, s’ajoute depuis 2010, l'assurance et l'épargne, offerts dans le cadre d’un processus d’accompagnement et de formation...</p>-->
              <a class="btn text-white btn-primary" href="{{ route('front.loan') }}">Request a credit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container" id="about">
    <br><br>
    <div class="row">
      <div class="col-md-6 mb-6 mb-lg-6 col-lg-6"><br>
       <strong><h4 style="text-align: right;"> DES PRÊTS RAPIDES <br>AUX MEILLEURS TAUX</h4></strong>
      </div>
      <div class="col-md-6 mb-6 mb-lg-6 col-lg-6">
        <p>Avec l'expérience personnalisée et unique, nous avons développé nos services pour satisfaire vos besoins. Vous pouvez aujourd'hui profiter de l'ensemble de nos services en ligne. Nuls besoins de passer a l'agence, un conseiller est à votre disposition 24h/24. .</p>
      </div>
    </div>
<br>
    <div class="row justify-content-center mb-5">
        <h2 class="font-weight-light text-primary">What we do</h2>
        <div class="row">
          <div class="col-md-6 mb-6 mb-lg-6 col-lg-6">
            <br><br>
            <strong><h3>GLOBAL FINANCE EXPRESS</h3></strong>
        <p class="color-black-opacity-5">includes credit for property experts and mobilized to listen and serve its customers, A network of united agents. GLOBAL FINANCE EXPRESS makes himself available and brings you the best financing conditions.<br></p>
</p>
    
          </div>
          <div class="col-md-6 mb-6 mb-lg-6 col-lg-6">
            
            <p class="color-black-opacity-5" style="text-align: justify;">
              <h3>OUR INTEREST RATE</h3> 
               We offer you loans at very flexible terms. Our interest rates vary depending on the amount requested and the 
settlement period. Our rates are relatively low and vary between 3% and 8.90%. Choose Personal Loan is to benefit from a fixed interest rate. Between 3% and 8.90%, 
it does not change for the duration of your loan. It is you who choose the amount and the most suitable time for you. With Personal Loan, you can borrow an amount of 
€ 5,000 to € 15,000,000 over a period of 12 to 240 months.
       </p>
    
          </div>
        </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Our services</h2>
          <p class="color-black-opacity-5"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
          <div class="how-it-work-step">
            <div class="img-wrap">
              <img class="img-fluid" alt="" src="images/step-1.svg">
            </div>
            <span class="number">1</span>
            <h3>Online credit</h3>
            <p>
              Take advantage of a professional loan online with GLOBAL FINANCE BANK. Thanks to a 100% digital process, you can get a response to your request in just 10 minutes. You do your work wherever and whenever you want. Take advantage of an adapted professional credit and receive the funds in just 48 hours (following acceptance by GLOBAL FINANCE BANK of your file)!</p>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
          <div class="how-it-work-step">
            <div class="img-wrap">
              <img class="img-fluid" alt="" src="images/step-2.svg">
            </div>
            <span class="number">2</span>
            <h3>Savings and Livret A</h3>
            <p>
              Make your money grow without opening / closing and management fees, with the various ING online savings books. The A Booklet & The Sustainable Development Booklet give you maximum freedom because they do not require the payment of any monthly payment, are net of taxes and are not subject to any social security contributions. The Orange Savings Account, available capital with a gross rate of 0.10% which may change over time.</p>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
          <div class="how-it-work-step">
            <div class="img-wrap">
              <img class="img-fluid" alt="" src="images/step-3.svg">
            </div>
            <span class="number">3</span>
            <strong><h3>Insurance</h3></strong>
            <p>
              The GLOBAL FINANCE BANK DIRECT VIE life insurance policy, thanks to the good performance of its funds in euros in 2017, its flexibility and its advantageous taxation, makes competition for booklets. To save, but also to prepare for retirement or pass on an inheritance. And at GLOBAL FINANCE BANK, what's more, it's simple: the insurance contract via ...</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">News</h2>
          <p class="color-black-opacity-5">See Our articles</p>
        </div>
      </div>
      <div class="row mb-3 align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img class="img-fluid mx-auto d-block" alt="" src="images/news/4.jpg">
            <div class="h-entry-inner">
              <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
              <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">•</span> May 5th, 2019</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img class="img-fluid mx-auto d-block" alt="" src="images/news/2.jpg">
            <div class="h-entry-inner">
              <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
              <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">•</span> May 5th, 2019</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
          </div> 
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img class="img-fluid mx-auto d-block" alt="" src="images/news/3.jpg">
            <div class="h-entry-inner">
              <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
              <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">•</span> May 5th, 2019</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
          <h2 class="mb-3 mt-0 text-white">A CREDIT FAST IN 48H</h2>
          <p class="mb-0 text-white">Global Finance: We treat your files as soon as possible to satisfy your demand</p>
        </div>
        <div class="col-lg-4">
          <p class="mb-0"><a class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block" href="{{ route('front.loan') }}">Request a credit now</a></p>
        </div>
      </div>
    </div>
  </div>


@endsection