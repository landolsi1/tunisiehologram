<?php

/* ::base.html.twig */
class __TwigTemplate_78c635070e591cb1ec4e4aa4878274d3f324b1e809dbf2577c53ef0d407e2356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/img/apple-icon.png\""), "html", null, true);
        echo "\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/img/favicon.png"), "html", null, true);
        echo "\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Material Dashboard by Creative Tim</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/css/bootstrap.min.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" />

    <!--  Material Dashboard CSS    -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/css/material-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!--     Fonts and icons     -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
</head>

<body>

\t<div class=\"wrapper\">
\t    <div class=\"sidebar\" data-color=\"purple\" data-image=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("/bundles/hologram/img/sidebar-1.jpg"), "html", null, true);
        echo "\">

\t\t\t<!--
\t\t        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

\t\t        Tip 2: you can also add an image using data-image tag
\t\t    -->

\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"http://www.creative-tim.com\" class=\"simple-text\">
\t\t\t\t\tCreative Tim
\t\t\t\t</a>
\t\t\t</div>

\t    \t<div class=\"sidebar-wrapper\">
\t            <ul class=\"nav\">
\t                <li class=\"active\">
\t                    <a href=\"dashboard.html\">
\t                        <i class=\"material-icons\">dashboard</i>
\t                        <p>Dashboard</p>
\t                    </a>
\t                </li>
\t            </ul>
\t    \t</div>
\t\t</div>

\t    <div class=\"main-panel\">
\t\t\t<nav class=\"navbar navbar-transparent navbar-absolute\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Table List</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">dashboard</i>
\t\t\t\t\t\t\t\t\t<p class=\"hidden-lg hidden-md\">Dashboard</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification\">5</span>
\t\t\t\t\t\t\t\t\t\t<p class=\"hidden-lg hidden-md\">Notifications</p>
\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mike John responded to your email</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">You have 5 new tasks</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">You're now friend with Andrew</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another Notification</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another One</a></li>
\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t \t\t\t\t\t\t\t   <i class=\"material-icons\">person</i>
\t \t\t\t\t\t\t\t   <p class=\"hidden-lg hidden-md\">Profile</p>
\t \t\t\t\t\t\t   </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<form class=\"navbar-form navbar-right\" role=\"search\">
\t\t\t\t\t\t\t<div class=\"form-group  is-empty\">
\t                        \t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t                        \t<span class=\"material-input\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">search</i><div class=\"ripple-container\"></div>
\t\t\t\t\t\t\t</button>
\t                    </form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t        <div class=\"content\">
\t            <div class=\"container-fluid\">
\t                <div class=\"row\">

\t                </div>
\t            </div>
\t        </div>
\t\t\t<footer class=\"footer\">
\t            <div class=\"container-fluid\">
\t                <nav class=\"pull-left\">
\t                    <ul>
\t                        <li>
\t                            <a href=\"#\">
\t                                Home
\t                            </a>
\t                        </li>

\t                    </ul>
\t                </nav>
\t                <p class=\"copyright pull-right\">
\t                    &copy; <script>document.write(new Date().getFullYear())</script> <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
\t                </p>
\t            </div>
\t        </footer>
\t    </div>
\t</div>

</body>

\t<!--   Core JS Files   -->
\t<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/js/material.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!--  Charts Plugin -->
\t<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/js/chartist.min.js"), "html", null, true);
        echo "\"></script>

\t<!--  Notifications Plugin    -->
\t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

\t<!--  Google Maps Plugin    -->
\t<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js"), "html", null, true);
        echo "\"></script>

\t<!-- Material Dashboard javascript methods -->
\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/js/material-dashboard.js"), "html", null, true);
        echo "\"></script>

\t<!-- Material Dashboard DEMO methods, don't include it in your project! -->
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/bundles/hologram/js/demo.js"), "html", null, true);
        echo "\"></script>


</html>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 160,  219 => 157,  213 => 154,  207 => 151,  201 => 148,  195 => 145,  191 => 144,  187 => 143,  73 => 32,  64 => 26,  60 => 25,  54 => 22,  48 => 19,  42 => 16,  29 => 6,  25 => 5,  19 => 1,);
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
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset('bundles/hologram/img/apple-icon.png\"')}}\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"{{asset('bundles/hologram/img/favicon.png')}}\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Material Dashboard by Creative Tim</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"{{asset('bundles/hologram/css/bootstrap.min.css\" rel=\"stylesheet')}}\" />

    <!--  Material Dashboard CSS    -->
    <link href=\"{{asset('bundles/hologram/css/material-dashboard.css')}}\" rel=\"stylesheet\"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"{{asset('bundles/hologram/css/demo.css')}}\" rel=\"stylesheet\" />

    <!--     Fonts and icons     -->
    <link href=\"{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons')}}\" rel='stylesheet' type='text/css'>
</head>

<body>

\t<div class=\"wrapper\">
\t    <div class=\"sidebar\" data-color=\"purple\" data-image=\"{{asset('/bundles/hologram/img/sidebar-1.jpg')}}\">

\t\t\t<!--
\t\t        Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

\t\t        Tip 2: you can also add an image using data-image tag
\t\t    -->

\t\t\t<div class=\"logo\">
\t\t\t\t<a href=\"http://www.creative-tim.com\" class=\"simple-text\">
\t\t\t\t\tCreative Tim
\t\t\t\t</a>
\t\t\t</div>

\t    \t<div class=\"sidebar-wrapper\">
\t            <ul class=\"nav\">
\t                <li class=\"active\">
\t                    <a href=\"dashboard.html\">
\t                        <i class=\"material-icons\">dashboard</i>
\t                        <p>Dashboard</p>
\t                    </a>
\t                </li>
\t            </ul>
\t    \t</div>
\t\t</div>

\t    <div class=\"main-panel\">
\t\t\t<nav class=\"navbar navbar-transparent navbar-absolute\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Table List</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">dashboard</i>
\t\t\t\t\t\t\t\t\t<p class=\"hidden-lg hidden-md\">Dashboard</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification\">5</span>
\t\t\t\t\t\t\t\t\t\t<p class=\"hidden-lg hidden-md\">Notifications</p>
\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mike John responded to your email</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">You have 5 new tasks</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">You're now friend with Andrew</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another Notification</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another One</a></li>
\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#pablo\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t \t\t\t\t\t\t\t   <i class=\"material-icons\">person</i>
\t \t\t\t\t\t\t\t   <p class=\"hidden-lg hidden-md\">Profile</p>
\t \t\t\t\t\t\t   </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<form class=\"navbar-form navbar-right\" role=\"search\">
\t\t\t\t\t\t\t<div class=\"form-group  is-empty\">
\t                        \t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t                        \t<span class=\"material-input\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">search</i><div class=\"ripple-container\"></div>
\t\t\t\t\t\t\t</button>
\t                    </form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t        <div class=\"content\">
\t            <div class=\"container-fluid\">
\t                <div class=\"row\">

\t                </div>
\t            </div>
\t        </div>
\t\t\t<footer class=\"footer\">
\t            <div class=\"container-fluid\">
\t                <nav class=\"pull-left\">
\t                    <ul>
\t                        <li>
\t                            <a href=\"#\">
\t                                Home
\t                            </a>
\t                        </li>

\t                    </ul>
\t                </nav>
\t                <p class=\"copyright pull-right\">
\t                    &copy; <script>document.write(new Date().getFullYear())</script> <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
\t                </p>
\t            </div>
\t        </footer>
\t    </div>
\t</div>

</body>

\t<!--   Core JS Files   -->
\t<script src=\"{{asset('bundles/hologram/js/jquery-3.1.0.min.js')}}\" type=\"text/javascript\"></script>
\t<script src=\"{{asset('bundles/hologram/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
\t<script src=\"{{asset('bundles/hologram/js/material.min.js')}}\" type=\"text/javascript\"></script>

\t<!--  Charts Plugin -->
\t<script src=\"{{asset('bundles/hologram/js/chartist.min.js')}}\"></script>

\t<!--  Notifications Plugin    -->
\t<script src=\"{{asset('bundles/hologram/js/bootstrap-notify.js')}}\"></script>

\t<!--  Google Maps Plugin    -->
\t<script type=\"text/javascript\" src=\"{{asset('https://maps.googleapis.com/maps/api/js')}}\"></script>

\t<!-- Material Dashboard javascript methods -->
\t<script src=\"{{asset('bundles/hologram/js/material-dashboard.js')}}\"></script>

\t<!-- Material Dashboard DEMO methods, don't include it in your project! -->
\t<script src=\"{{asset('bundles/bundles/hologram/js/demo.js')}}\"></script>


</html>
", "::base.html.twig", "C:\\wamp64\\www\\tunisiehologram\\app/Resources\\views/base.html.twig");
    }
}
