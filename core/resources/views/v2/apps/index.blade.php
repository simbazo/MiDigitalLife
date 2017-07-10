@extends('v2.templates.master')

@section('content')
<section class="single-page-title">
    <div class="container text-center">
        <h2>Apps</h2>
    </div>
</section>
<!-- .page-title -->

<section class="service-icon-style ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>OUR HEALTHCARE APPS</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>


    <div class="container text-center">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href="http://store.appenberg.co.za/HIV_clin_guidelines/index.html" class="thumbnail">
              <img src="{{asset('assets/img/logos/afa-card.png')}}">
          </a>
          <p class="app_name"> The Aid for AIDS Clinical Guidelines 11th Edition</p>
      </div> 

      <div class="col-xs-6 col-md-3">
        <a href="http://store.appenberg.co.za/WCAHAR/index.html" class="thumbnail">
          <img src="{{asset('assets/img/logos/nhls-card.png')}}">
      </a>
      <p class="app_name">Western Cape Academic Hospitals Antimicrobial Recommendations </p>
  </div> 

  <div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/PIOAG/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/pioag-card.png')}}">
  </a>
  <p class="app_name"> Procedures in Obstetrics and Gynaecology</p>
</div> 

<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/saasp/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/saasp-card.png')}}">
  </a>
  <p class="app_name"> South African Antibiotic Stewardship Programme</p>
</div> 
</div>

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/HIV_clin_soc/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/sahcs-card.png')}}">
  </a>
  <p class="app_name"> SA HIV Clinicians Society: Adult Antiretroviral Therapy Guidelines</p>
</div> 

<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/ent/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/ent.png')}}">
  </a>
  <p class="app_name">ENT Surgery Atlas</p>
</div> 

<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/aahafo/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/aahafo.png')}}">
  </a>
  <p class="app_name">Audiology and Hearing Aids for Otolaryngologists</p>
</div> 
<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/uct_student/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/uct-student.png')}}">
  </a>
  <p class="app_name">UCT Student</p>
</div> 
</div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/uct_surgery/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/uct-surgery.png')}}">
  </a>
  <p class="app_name">UCT Surgery</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/stg/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/stg.png')}}">
  </a>
  <p class="app_name">Standard Treatment Guidelines and Essential Drug List for SA, Hospital Level, 2012 Edition</p>
</div>
<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/sa-hypertension/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/sa-hypertension.png')}}">
  </a>
  <p class="app_name">South African Hypertension practice guideline 2014</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/sa-lipid/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/sa-lipid.png')}}">
  </a>
  <p class="app_name">South African Dislipidaemia Guideline 2015</p>
</div>
</div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/mic/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/mic.png')}}">
  </a>
  <p class="app_name">MIC</p>

</div>

<div class="col-xs-6 col-md-3">
    <a href="http://store.appenberg.co.za/sasa/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/sasa.png')}}">
  </a>
  <p class="app_name">SASA</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/otg/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/ot.png')}}">
  </a>
  <p class="app_name">Occupational Guidelines</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/uct_medicine/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/dep-medicine.png')}}">
  </a>
  <p class="app_name">UCT Medicine</p>
</div>
</div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/semdsa/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/semdsa.png')}}">
  </a>
  <p class="app_name">The 2012 SEMDSA Guideline for the Management of Type 2 Diabetes</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/nicd/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/nicd.png')}}">
  </a>
  <p class="app_name">National Institute for Communicable Diseases</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/rheumatology/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/rheumatology.png')}}">
  </a>
  <p class="app_name">Rheumatology</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/Geriatrics_UCT/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/geriatrics.png')}}">
  </a>
  <p class="app_name">Geriatrics UCT</p>
</div>
</div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/FIDSSA/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/fidssa.png')}}">
  </a>
  <p class="app_name">FIDSSA</p>
</div>


<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/ghtpm/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/ghtpm.png')}}">
  </a>
  <p class="app_name">Global Health Trials Process Map</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/ecg/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/ecg.jpeg')}}">
  </a>
  <p class="app_name">ECG APPtitude</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/pack/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/pack.png')}}">
  </a>
  <p class="app_name">PACK</p>
</div>
</div>

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/Pharmacology/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/uct-surgery.png')}}">
  </a>
  <p class="app_name">Pharmacology UCT</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/ngdd/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/ngdd.png')}}">
  </a>
  <p class="app_name">Neonatal Guidelines and Drug Doses</p>
</div>

<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/anaesthetics/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/anaesthetics.png')}}">
  </a>
  <p class="app_name">Anaesthetics</p>
</div>
<div class="col-xs-6 col-md-3">
    <a href="http://staging.appenberg.co.za/medicine-information/index.html" class="thumbnail">
      <img src="{{asset('assets/img/logos/medicine-information.png')}}">
  </a>
  <p class="app_name">Medicine Information</p>
</div>
</div>

</div>

</section>
<section class="ervice-icon-style ptb-100" id="communityapp_image">
    <section class="section-title">
        <div class="container text-center">
            <h2>OUR COMMUNITY APPS</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section> 
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-md-3">
          <a href="http://staging.appenberg.co.za/abalimi/index.html" class="thumbnail">
            <img src="{{asset('assets/img/logos/abalimi.png')}}">
        </a>
        <p class="app_name">Abalimi</p>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="http://store.appenberg.co.za/child-act/index.html" class="thumbnail">
        <img src="{{asset('assets/img/logos/child-act.png')}}">
    </a>
    <p class="app_name">Children's Act Manual</p>
</div>
<div class="col-xs-6 col-md-3">
  <a href="http://store.appenberg.co.za/warehouse/index.html" class="thumbnail">
    <img src="{{asset('assets/img/logos/warehouse.png')}}">
</a>
<p class="app_name">The Warehouse</p>
</div>

    <div class="col-xs-6 col-md-3">
      <a href="http://staging.appenberg.co.za/wow/index.html" class="thumbnail">
        <img src="{{asset('assets/img/logos/wow.png')}}">
    </a>
    <p class="app_name">WesternCape on Wellness (WoW!)</p>
</div>
</div>
</div>
</section>
<!-- .about-text-->
@endsection