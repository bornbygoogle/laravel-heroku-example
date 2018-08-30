<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{# { path('creativhomepage') } #}"><img src=""  alt="Creati'v Cuisine et Bains Logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="{# { path('creativhomepage') } #}">Home </a></li>
        <li><a href="{# { path('creativintro') } #}">Introduction</a></li>
        <li><a href="{# { path('creativtype',{'type':'cuisine'}) } #}">Cuisine</a></li>
        <li><a href="{# { path('creativtype',{'type':'sdb'}) } #}">Salle de bain</a></li>
        <li><a href="{# { path('creativgallery') } #}">Chantiers finis</a></li>
        <li><a href="{# { path('creativcontact') } #}">Contact</a></li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->
{% block content %}
<!-- banner -->
<div class="banner">    	   
    <img src="{{ URL::asset('img/creativ/banner.jpg') }}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown">Creati'v Cuisine et Bains</h1>
                <p class="animated fadeInUp">Spécialisée dans le secteur d'activité du commerce de détail de meubles.</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->

<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
            <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
               Photos ou films représenté l'entreprise
            </div>
         </div>
         <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
            <h3>Souhait d'avoir un devis ? Laisser nous votre coordonnées, nous allons vous contacter : </h3>
            {% if envoie is defined and envoie==1 %}
               <h3> La demande de devis est envoyée, nous vous contacterons dans le plus bref delai.</h3>
            {% else %}
               {% { form_start(form_devis,{'attr': {'role':'form','class':'wowload fadeInRight'}}) } %}
               {% { form_errors(form_devis) } %}
               <div class="form-group">
                  {%{ form_label(form_devis.nomcomplet) } %}
                  {% { form_errors(form_devis.nomcomplet) } %}
                  {% { form_widget(form_devis.nomcomplet,{'attr': {'placeholder': 'Nom & Prénom'}}) }%}
               </div>    
               <div class="form-group">
                  {%{ form_label(form_devis.email) } %}
                  {% { form_errors(form_devis.email)  %}}
                  {% { form_widget(form_devis.email,{'attr': {'placeholder': 'abc@abc.com'}}) }%}
               </div>
               <div class="form-group">
                  {%{ form_label(form_devis.phone) } %}
                  {% { form_errors(form_devis.phone) } %}
                  {% { form_widget(form_devis.phone,{'attr': {'placeholder': '06xxxxxxxx'}}) } %}
               </div>
               <div class="form-group">
                  {%{ form_label(form_devis.message) } %}
                  {% { form_errors(form_devis.message) } %}
                  {% { form_widget(form_devis.message,{'attr': {'placeholder': 'Votre message'}}) } %}
               </div>
               <button class="btn btn-default">Envoyer</button>
               {% { form_end(form_devis) } %}
            {% endif %}   
         </div>
      </div>  
   </div>
</div>
<!-- reservation-information -->

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
       {% render(url('indexcarousel',{'type':'cuisine'})) %}
       {% render(url('indexcarousel',{'type':'sdb'})) %}

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <!-- ChantiersCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active">
                   <figure>
                      <img src="http://i789.photobucket.com/albums/yy178/bornbygoogle/creativ/chantiers-finis/Chantier-16012017-au-19012017/10.jpg" class="img-responsive" alt="slide">
                      <figcaption>10</figcaption>
                   </figure>
				</div>
				@for ($i = 0; $i <= 9; $i--)
                   <div class="item height-full">
                      <figure>
                         <img src="http://i789.photobucket.com/albums/yy178/bornbygoogle/creativ/chantiers-finis/Chantier-16012017-au-19012017/0{{$i}}.jpg" class="img-responsive" alt="slide">
                         <figcaption>{{$i}}</figcaption>
                      </figure>
                   </div>
                @endfor
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- ChantiersCarousel-->
            <div class="caption">Chantiers finis<a href="{{ path('creativgallery') }}" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->

{% endblock content %}

<footer class="spacer">
   <div class="container">
      <div class="row">
         <div class="col-sm-3">
            <h4>Creati'v Cuisines et Bains</h4>
         </div>              
         <div class="col-sm-7">
            <p>Nous sommes revendeur de <em><strong>Charles Rema</strong></em> et de <em><strong>You</strong></em></p> :
            <img src="{{ asset('bundles/creativ/images/charlesrema.png') }}"/>
            <img src="{{ asset('bundles/creativ/images/logo-you.jpg') }}"/>
         </div> 
         <div class="col-sm-2">
            <h4>Quick Links</h4>
            <ul class="list-unstyled">
        		<li><a href="{{ path('creativhomepage') }}">Home </a></li>
      			<li><a href="{# { path('creativintro') } #}">Introduction</a></li>
    			<li><a href="{# { path('creativtype',{'type':'cuisine'}) } #}">Cuisine</a></li>
  			    <li><a href="{# { path('creativtype',{'type':'sdb'}) } #}">Salle de bain</a></li>
				<li><a href="{# { path('creativgallery') } #}">Chantiers finis</a></li>
				<li><a href="{# { path('creativcontact') } #}">Contact</a></li>
            </ul>
         </div>
      </div><!--row--> 
   </div><!--container-->
</footer><!--footer-bottom--> 

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
