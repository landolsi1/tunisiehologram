<?php

/* HologramBundle::layouts.html.twig */
class __TwigTemplate_978995edf03e2b88246180f4a5c4ea698167cf0667196379fccb4f85298cde1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"assets/img/apple-icon.png\">
\t<link rel=\"icon\" type=\"image/png\" href=\"assets/img/favicon.png\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Tunisie Hologram</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

\t<!--     Fonts and icons     -->
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("https://fonts.googleapis.com/icon?family=Material+Icons"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

\t<!-- CSS Files -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/css/material-kit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t<!-- CSS Just for demo purpose, don't include it in your project -->
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

</head>

<body class=\"index-page\">
<!-- Navbar -->
<nav class=\"navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll\">
\t<div class=\"container\">
        <div class=\"navbar-header\">
        
\t    \t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-index\">
\t        \t<span class=\"sr-only\">Toggle navigation</span>
\t        \t<span class=\"icon-bar\"></span>
\t        \t<span class=\"icon-bar\"></span>
\t        \t<span class=\"icon-bar\"></span>
\t    \t</button>
\t    \t<a href=\"http://www.creative-tim.com\">
\t        \t<div class=\"logo-container\">
\t                <div class=\"logo\">
\t                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Creative Tim Logo\" rel=\"tooltip\" title=\"<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>\" data-placement=\"bottom\" data-html=\"true\">
\t                </div>
\t                <div class=\"brand\">
\t                   Tunisie Hologram
\t                </div>


\t\t\t\t</div>
\t      \t</a>
\t    </div>

\t    <div class=\"collapse navbar-collapse\" id=\"navigation-index\">
\t    \t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hologram_homepage");
        echo "\">
\t\t\t\t\t\t<i class=\"material-icons\">dashboard</i> Home
\t\t\t\t\t</a>
\t\t\t\t</li>
                                ";
        // line 60
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo " 
\t\t\t\t<li class=\"dropdown\">
\t                                \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"material-icons\">shopping_basket</i>Products
\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t                                    \t<ul class=\"dropdown-menu dropdown-menu-right\">
\t                                        \t<li class=\"dropdown-header\">Products</li>
\t                                        \t<li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_add_product");
            echo "\">Add Product</a></li>
\t\t                                                   
\t\t                                        <li class=\"divider\"></li>
\t\t                                        <li><a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_front_products");
            echo "\">All Products</a></li>
                                                          <li class=\"divider\"></li>
\t\t                                        <li><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_front_final_products");
            echo "\">Final Products</a></li>
                         
\t\t                                        <li class=\"divider\"></li>
\t\t                                        <li><a href=\"#\">Statistics</a></li>
\t\t                                    </ul>
\t                                \t</li>
                                ";
        }
        // line 79
        echo "\t\t\t\t\t<li class=\"dropdown\">
\t                                \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"material-icons\">person_pin</i>Users
\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t                                    \t<ul class=\"dropdown-menu dropdown-menu-right\">
\t                                        \t<li class=\"dropdown-header\">Users</li>
\t                                        \t<li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Sign-In</a></li>
\t\t                                        
\t\t                                   
\t\t                                        <li class=\"divider\"></li>
\t\t                                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Sign-Up</a></li>\t\t                                        
\t\t                                        <li class=\"divider\"></li>
                                                          ";
        // line 91
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo " 
                                                          <a href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                                                          ";
        }
        // line 94
        echo "\t\t                                       <!-- <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit Profile</a></li> -->
\t\t                                        
\t\t                                    </ul>
\t                                \t</li>
\t\t\t\t<li>
\t\t\t\t\t<a rel=\"tooltip\" title=\"Follow us on Twitter\" data-placement=\"bottom\" href=\"https://twitter.com/CreativeTim\" target=\"_blank\" class=\"btn btn-white btn-simple btn-just-icon\">
\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a rel=\"tooltip\" title=\"Like us on Facebook\" data-placement=\"bottom\" href=\"https://www.facebook.com/CreativeTim\" target=\"_blank\" class=\"btn btn-white btn-simple btn-just-icon\">
\t\t\t\t\t\t<i class=\"fa fa-facebook-square\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a rel=\"tooltip\" title=\"Follow us on Instagram\" data-placement=\"bottom\" href=\"https://www.instagram.com/CreativeTimOfficial\" target=\"_blank\" class=\"btn btn-white btn-simple btn-just-icon\">
\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t    \t</ul>
\t    </div>
\t</div>
</nav>
<!-- End Navbar -->


<div class=\"wrapper\">
\t<div class=\"header header-filter\" style=\"background-image: url('";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/img/bg2.jpeg"), "html", null, true);
        echo "');\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<div class=\"brand\">
\t\t\t\t\t\t<h1>Tunisie Hologram.</h1>
\t\t\t\t\t\t<h3>La plateform numéro 1 en tunisie de la publicité via Hologram .</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"main main-raised\">
\t\t<div class=\"section section-basic\">
\t    \t<div class=\"container\">
                   
\t            <div class=\"title\">
                         ";
        // line 141
        $this->displayBlock('title', $context, $blocks);
        // line 144
        echo "\t            </div>
                    
";
        // line 146
        $this->displayBlock('mainContent', $context, $blocks);
        // line 206
        echo "
</body>

\t<!--   Core JS Files   -->
\t<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/js/material.min.js"), "html", null, true);
        echo "\"></script>

\t<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
\t<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/js/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
\t<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
\t<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/js/material-kit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</html>
";
    }

    // line 141
    public function block_title($context, array $blocks = array())
    {
        // line 142
        echo "\t                <h2>Bienvenue</h2>
                        ";
    }

    // line 146
    public function block_mainContent($context, array $blocks = array())
    {
        echo "  
\t\t      
\t\t\t\t\t
\t\t\t\t
                             <div class=\"section\" id=\"carousel\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">

\t\t\t\t\t\t<!-- Carousel Card -->
\t\t\t\t\t\t<div class=\"card card-raised card-carousel\">
\t\t\t\t\t\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t\t<div class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t\t\t\t\t\t\t<!-- Indicators -->
\t\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t\t</ol>

\t\t\t\t\t\t\t\t\t<!-- Wrapper for slides -->
\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/img/bg2.jpeg"), "html", null, true);
        echo "\" alt=\"Awesome Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"material-icons\">location_on</i> Yellowstone National Park, United States</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/img/bg3.jpeg"), "html", null, true);
        echo "\" alt=\"Awesome Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"material-icons\">location_on</i> Somewhere Beyond, United States</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/img/bg4.jpeg"), "html", null, true);
        echo "\" alt=\"Awesome Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"material-icons\">location_on</i> Yellowstone National Park, United States</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Controls -->
\t\t\t\t\t\t\t\t\t<a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_left</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Carousel Card -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
                                                                                         ";
    }

    public function getTemplateName()
    {
        return "HologramBundle::layouts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 182,  313 => 176,  304 => 170,  276 => 146,  271 => 142,  268 => 141,  260 => 221,  254 => 218,  248 => 215,  242 => 212,  238 => 211,  234 => 210,  228 => 206,  226 => 146,  222 => 144,  220 => 141,  198 => 122,  166 => 94,  161 => 92,  157 => 91,  152 => 89,  145 => 85,  137 => 79,  127 => 72,  122 => 70,  116 => 67,  106 => 60,  99 => 56,  82 => 42,  60 => 23,  54 => 20,  50 => 19,  44 => 16,  40 => 15,  36 => 14,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"assets/img/apple-icon.png\">
\t<link rel=\"icon\" type=\"image/png\" href=\"assets/img/favicon.png\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Tunisie Hologram</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

\t<!--     Fonts and icons     -->
\t<link rel=\"stylesheet\" href=\"{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}\" />
\t<link rel=\"stylesheet\" href=\"{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}\" />

\t<!-- CSS Files -->
    <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
    <link href=\"{{asset('assets/css/material-kit.css')}}\" rel=\"stylesheet\"/>

\t<!-- CSS Just for demo purpose, don't include it in your project -->
\t<link href=\"{{asset('assets/css/demo.css')}}\" rel=\"stylesheet\" />

</head>

<body class=\"index-page\">
<!-- Navbar -->
<nav class=\"navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll\">
\t<div class=\"container\">
        <div class=\"navbar-header\">
        
\t    \t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-index\">
\t        \t<span class=\"sr-only\">Toggle navigation</span>
\t        \t<span class=\"icon-bar\"></span>
\t        \t<span class=\"icon-bar\"></span>
\t        \t<span class=\"icon-bar\"></span>
\t    \t</button>
\t    \t<a href=\"http://www.creative-tim.com\">
\t        \t<div class=\"logo-container\">
\t                <div class=\"logo\">
\t                    <img src=\"{{asset('assets/img/logo.png')}}\" alt=\"Creative Tim Logo\" rel=\"tooltip\" title=\"<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>\" data-placement=\"bottom\" data-html=\"true\">
\t                </div>
\t                <div class=\"brand\">
\t                   Tunisie Hologram
\t                </div>


\t\t\t\t</div>
\t      \t</a>
\t    </div>

\t    <div class=\"collapse navbar-collapse\" id=\"navigation-index\">
\t    \t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('hologram_homepage')}}\">
\t\t\t\t\t\t<i class=\"material-icons\">dashboard</i> Home
\t\t\t\t\t</a>
\t\t\t\t</li>
                                {% if app.user %} 
\t\t\t\t<li class=\"dropdown\">
\t                                \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"material-icons\">shopping_basket</i>Products
\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t                                    \t<ul class=\"dropdown-menu dropdown-menu-right\">
\t                                        \t<li class=\"dropdown-header\">Products</li>
\t                                        \t<li><a href=\"{{ path('esprit_hologram_add_product')}}\">Add Product</a></li>
\t\t                                                   
\t\t                                        <li class=\"divider\"></li>
\t\t                                        <li><a href=\"{{ path('esprit_hologram_front_products') }}\">All Products</a></li>
                                                          <li class=\"divider\"></li>
\t\t                                        <li><a href=\"{{ path('esprit_hologram_front_final_products') }}\">Final Products</a></li>
                         
\t\t                                        <li class=\"divider\"></li>
\t\t                                        <li><a href=\"#\">Statistics</a></li>
\t\t                                    </ul>
\t                                \t</li>
                                {% endif %}
\t\t\t\t\t<li class=\"dropdown\">
\t                                \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"material-icons\">person_pin</i>Users
\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t                                    \t<ul class=\"dropdown-menu dropdown-menu-right\">
\t                                        \t<li class=\"dropdown-header\">Users</li>
\t                                        \t<li><a href=\"{{ path ('fos_user_security_login')}}\">Sign-In</a></li>
\t\t                                        
\t\t                                   
\t\t                                        <li class=\"divider\"></li>
\t\t                                        <li><a href=\"{{ path ('fos_user_registration_register')}}\">Sign-Up</a></li>\t\t                                        
\t\t                                        <li class=\"divider\"></li>
                                                          {% if app.user %} 
                                                          <a href=\"{{ path ('fos_user_security_logout')}}\">Déconnexion</a></li>
                                                          {% endif %}
\t\t                                       <!-- <li><a href=\"{{ path ('fos_user_profile_edit')}}\">Edit Profile</a></li> -->
\t\t                                        
\t\t                                    </ul>
\t                                \t</li>
\t\t\t\t<li>
\t\t\t\t\t<a rel=\"tooltip\" title=\"Follow us on Twitter\" data-placement=\"bottom\" href=\"https://twitter.com/CreativeTim\" target=\"_blank\" class=\"btn btn-white btn-simple btn-just-icon\">
\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a rel=\"tooltip\" title=\"Like us on Facebook\" data-placement=\"bottom\" href=\"https://www.facebook.com/CreativeTim\" target=\"_blank\" class=\"btn btn-white btn-simple btn-just-icon\">
\t\t\t\t\t\t<i class=\"fa fa-facebook-square\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a rel=\"tooltip\" title=\"Follow us on Instagram\" data-placement=\"bottom\" href=\"https://www.instagram.com/CreativeTimOfficial\" target=\"_blank\" class=\"btn btn-white btn-simple btn-just-icon\">
\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t    \t</ul>
\t    </div>
\t</div>
</nav>
<!-- End Navbar -->


<div class=\"wrapper\">
\t<div class=\"header header-filter\" style=\"background-image: url('{{asset('assets/img/bg2.jpeg')}}');\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<div class=\"brand\">
\t\t\t\t\t\t<h1>Tunisie Hologram.</h1>
\t\t\t\t\t\t<h3>La plateform numéro 1 en tunisie de la publicité via Hologram .</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"main main-raised\">
\t\t<div class=\"section section-basic\">
\t    \t<div class=\"container\">
                   
\t            <div class=\"title\">
                         {% block title %}
\t                <h2>Bienvenue</h2>
                        {% endblock %}
\t            </div>
                    
{% block mainContent %}  
\t\t      
\t\t\t\t\t
\t\t\t\t
                             <div class=\"section\" id=\"carousel\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">

\t\t\t\t\t\t<!-- Carousel Card -->
\t\t\t\t\t\t<div class=\"card card-raised card-carousel\">
\t\t\t\t\t\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t\t<div class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t\t\t\t\t\t\t<!-- Indicators -->
\t\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t\t</ol>

\t\t\t\t\t\t\t\t\t<!-- Wrapper for slides -->
\t\t\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/img/bg2.jpeg')}}\" alt=\"Awesome Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"material-icons\">location_on</i> Yellowstone National Park, United States</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/img/bg3.jpeg')}}\" alt=\"Awesome Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"material-icons\">location_on</i> Somewhere Beyond, United States</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('assets/img/bg4.jpeg')}}\" alt=\"Awesome Image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"material-icons\">location_on</i> Yellowstone National Park, United States</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Controls -->
\t\t\t\t\t\t\t\t\t<a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_left</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_arrow_right</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Carousel Card -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
                                                                                         {% endblock %}

</body>

\t<!--   Core JS Files   -->
\t<script src=\"{{asset('assets/js/jquery.min.js')}}\" type=\"text/javascript\"></script>
\t<script src=\"{{asset('assets/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
\t<script src=\"{{asset('assets/js/material.min.js')}}\"></script>

\t<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
\t<script src=\"{{asset('assets/js/nouislider.min.js')}}\" type=\"text/javascript\"></script>

\t<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
\t<script src=\"{{asset('assets/js/bootstrap-datepicker.js')}}\" type=\"text/javascript\"></script>

\t<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
\t<script src=\"{{asset('assets/js/material-kit.js')}}\" type=\"text/javascript\"></script>

</html>
", "HologramBundle::layouts.html.twig", "C:\\wamp64\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/layouts.html.twig");
    }
}
