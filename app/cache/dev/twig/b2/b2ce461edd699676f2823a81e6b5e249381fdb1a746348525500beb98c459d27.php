<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_085350e9b64681b3417fd95bac8bd990fc0e15a4e57d8d4c0ee1556f381a1038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/img/apple-icon.png"), "html", null, true);
        echo "\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/img/favicon.png"), "html", null, true);
        echo "\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Material Dashboard by Creative Tim</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!--  Material Dashboard CSS    -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/css/material-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/css/demo.css"), "html", null, true);
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
    

<div class=\"header header-filter\" style=\"background-image: url('";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("assets/img/city.jpg"), "html", null, true);
        echo "'); background-size: cover; background-position: top center;\">
\t<div class=\"wrapper\">
\t    

\t    \t

\t    <div class=\"main-panel\">
\t\t

\t        <div class=\"content\">
\t            <div class=\"container-fluid\">
\t                <div class=\"row\">
                                         ";
        // line 44
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
        echo "                                                
                                              
\t                </div>
\t            </div>
\t        </div>
\t\t
\t    </div>
\t</div>

</body>

\t<!--   Core JS Files   -->
\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/js/material.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!--  Charts Plugin -->
\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/js/chartist.min.js"), "html", null, true);
        echo "\"></script>

\t<!--  Notifications Plugin    -->
\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

\t<!--  Google Maps Plugin    -->
\t<script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js"), "html", null, true);
        echo "\"></script>

\t<!-- Material Dashboard javascript methods -->
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/js/material-dashboard.js"), "html", null, true);
        echo "\"></script>

\t<!-- Material Dashboard DEMO methods, don't include it in your project! -->
\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/hologram/assets/js/demo.js"), "html", null, true);
        echo "\"></script>


</html>
";
    }

    // line 44
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 45
        echo "                                         
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  152 => 44,  143 => 76,  137 => 73,  131 => 70,  125 => 67,  119 => 64,  113 => 61,  109 => 60,  105 => 59,  91 => 47,  89 => 44,  74 => 32,  65 => 26,  61 => 25,  55 => 22,  49 => 19,  43 => 16,  30 => 6,  26 => 5,  20 => 1,);
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
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset('bundles/hologram/assets/img/apple-icon.png')}}\" />
\t<link rel=\"icon\" type=\"image/png\" href=\"{{asset('bundles/hologram/assets/img/favicon.png')}}\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Material Dashboard by Creative Tim</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"{{asset('bundles/hologram/assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />

    <!--  Material Dashboard CSS    -->
    <link href=\"{{asset('bundles/hologram/assets/css/material-dashboard.css')}}\" rel=\"stylesheet\"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"{{asset('bundles/hologram/assets/css/demo.css')}}\" rel=\"stylesheet\" />

    <!--     Fonts and icons     -->
    <link href=\"{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons')}}\" rel='stylesheet' type='text/css'>
</head>

<body>
    

<div class=\"header header-filter\" style=\"background-image: url('{{asset('assets/img/city.jpg')}}'); background-size: cover; background-position: top center;\">
\t<div class=\"wrapper\">
\t    

\t    \t

\t    <div class=\"main-panel\">
\t\t

\t        <div class=\"content\">
\t            <div class=\"container-fluid\">
\t                <div class=\"row\">
                                         {% block fos_user_content %}
                                         
            {% endblock fos_user_content %}
                                                
                                              
\t                </div>
\t            </div>
\t        </div>
\t\t
\t    </div>
\t</div>

</body>

\t<!--   Core JS Files   -->
\t<script src=\"{{asset('bundles/hologram/assets/js/jquery-3.1.0.min.js')}}\" type=\"text/javascript\"></script>
\t<script src=\"{{asset('bundles/hologram/assets/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
\t<script src=\"{{asset('bundles/hologram/assets/js/material.min.js')}}\" type=\"text/javascript\"></script>

\t<!--  Charts Plugin -->
\t<script src=\"{{asset('bundles/hologram/assets/js/chartist.min.js')}}\"></script>

\t<!--  Notifications Plugin    -->
\t<script src=\"{{asset('bundles/hologram/assets/js/bootstrap-notify.js')}}\"></script>

\t<!--  Google Maps Plugin    -->
\t<script type=\"text/javascript\" src=\"{{asset('https://maps.googleapis.com/maps/api/js')}}\"></script>

\t<!-- Material Dashboard javascript methods -->
\t<script src=\"{{asset('bundles/hologram/assets/js/material-dashboard.js')}}\"></script>

\t<!-- Material Dashboard DEMO methods, don't include it in your project! -->
\t<script src=\"{{asset('bundles/hologram/assets/js/demo.js')}}\"></script>


</html>
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\tunisiehologram\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
