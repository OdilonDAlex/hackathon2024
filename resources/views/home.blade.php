@extends('base')

@section('title', 'HOME')

@section('csss')
    @vite(['resources/css/header.css', 'resources/css/landing.css'])
@endsection

@section('header')
    @include('header')
@endsection

@section('content')

<div class="background" >
  <div class="container-main-txt">
    <div class="text">FLEKSEO</div>
    <div class="slogan">Informer, éduquer, protéger : la clé pour un avenir sain.</div> 
  </div>
  <div class="shapes" style="max-width: 100vw">
      <div class="shape diamond"></div>
      <div class="shape calendar"></div>
      <div class="shape floral"></div>
  </div>
</div>

{{-- percentage --}}
<div class="container-percentage">
    <div class="percentage-item">
      <p class="info-percentage">
        Selon le <strong>Ministère malgache de la santé</strong>, <strong>32 %</strong> des filles <strong>tombent enceinte</strong> avant leur majorité. Ces grossesses précoces et souvent non désirées contribuent à l’éloignement des jeunes femmes de l’éducation et du marché du travail, et à les maintenir dans la pauvreté. <br>
        <br>
        Elles révèlent à quel point il est encore difficile pour les jeunes malgaches d’accéder à des informations et à des services en matière de santé sexuelle et reproductive.

        <a href="https://fundinnovation.dev/projects/a-madagascar-un-programme-d-education-complete-a-la-sexualite-pour-lutter-contre-les-grossesses-precoces" style="font-size: 14px; text-decoration: none; margin-left: 12px;"><strong>En savoir plus...</strong></a>
      </p>
    </div>
</div>

<!-- publicite -->
<div class="service-advertising">
  <h1 class="title-part">Notre Services</h1>
  <div class="container-service">
    <a class="service-item">
      <div class="icon-service">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#28a2da" class="icon-item" viewBox="0 0 448 512"><path d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
      </div>
      <div class="info-service">
        <h3>Cours</h3>
        <p class="txt-info">
          Ce cours d’éducation sexuelle offre des connaissances essentielles sur le corps, la santé, et les relations pour encourager des choix éclairés et respectueux.
        </p>
      </div>
    </a>

    <a class="service-item">
      <div class="info-service">
        <h3>Partage</h3>
        <p class="txt-info">
          Le partage est une manière d’offrir et de recevoir, créant des liens et enrichissant mutuellement les expériences.
        </p>
      </div>
      <div class="icon-service">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon-item" fill="#58c658" viewBox="0 0 512 512"><path d="M307 34.8c-11.5 5.1-19 16.6-19 29.2l0 64-112 0C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96l96 0 0 64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"/></svg>
      </div>
    </a>

    <a class="service-item">
      <div class="icon-service">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#d6e321" class="icon-item" viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
      </div>
      <div class="info-service">
        <h3>Mentoring</h3>
        <p class="txt-info">
          Le mentoring est un accompagnement où une personne expérimentée partage son savoir pour guider et inspirer une autre. Il favorise l’apprentissage, le développement personnel et la réussite professionnelle.
        </p>
      </div>
    </a>
  </div>
</div>

<div class="why-us">
  <h1 class="title-part">Pourquoi Nous?</h1>
  <div class="container-why">

    @php
            use Illuminate\Support\Facades\Storage;
            
            $url = Storage::disk('public')->url('freepik__background__10562.png');

        @endphp
      <img src="{{ $url }}" width="600px" alt="">
    <div class="container-txt">
      <p class="txt-info" style="margin-top: 60px;">
        Nous offrons un environnement bienveillant et des ressources fiables pour aborder des sujets souvent complexes avec clarté et respect. Notre équipe d’experts est dédiée à fournir un contenu adapté à chaque public, favorisant une compréhension accessible et pratique. En choisissant notre plateforme, vous bénéficiez d’un espace sécurisé pour apprendre, poser vos questions et évoluer à votre rythme.
      </p>
      <p class="citation">
        <span>"</span>
        <i>
          L’éducation est l’arme la plus puissante pour changer le monde.
        </i>
        <span>"</span>
      </p>
      <caption><i style="color: #c3c3c3;">Mr Nelson Mandela</i></caption>

    </div>
  </div>
</div>

<div class="container-prevention">
  <h1  class="title-part" style="margin-top: 5rem;">Un Engagement Responsable</h1>
    <div class="just-container">

      <div class="prevention-item" >
        <div class="img" style='{{ "background-image: url('". Storage::disk('public')->url('assets/R_3.jpg') ."');" }}'></div>
          <p>                
            Les médicaments ne sont pas simplement des substances chimiques; ce sont des porteurs de promesses de guérison et de bien-être."
        </p>
      </div>

      
      <div class="prevention-item">
        <div class="img" style="{{ "background-image: url('". Storage::disk('public')->url('assets/VIH.jpg') ."');" }}"></div>
          <p>                
              Le VIH affaiblit l’immunité, évolue sans traitement, mais des soins limitent sa transmission.
          </p>
      </div>

      
      <div class="prevention-item">
        <div class="img" style="{{ "background-image: url('". Storage::disk('public')->url('assets/9085429.jpg') ."');" }}"></div>
          <p>                
            La force et la résilience des personnes touchées par les MST sont une source d'inspiration. Malgré les défis, leur détermination à surmonter les obstacles et à vivre pleinement mérite notre respect et notre soutien."
        </p>
      </div>

      
      <div class="prevention-item">
        <div class="img" style="{{ "background-image: url('". Storage::disk('public')->url('assets/4275762.jpg') ."');" }}"></div>
          <p>                
              Célébrons le naturel, brisons les tabous: la menstruation, un sujet de dignité et de santé.
        </p>
      </div>

      
      <div class="prevention-item">
        <div class="img" style="{{ "background-image: url('". Storage::disk('public')->url('assets/5760787.jpg') ."');" }}"></div>
          <p>                
            Les préservatifs sont des outils essentiels pour la santé sexuelle et la prévention des maladies. Ils jouent un rôle crucial dans la protection contre les infections sexuellement transmissibles (IST) et les grossesses non désirées.
            
            "Le préservatif est un symbole de responsabilité et de respect mutuel dans les relations intimes."
        </p>
      </div>

    </div>
@endsection