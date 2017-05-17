<?php

/* HologramBundle:Front:finalProducts.html.twig */
class __TwigTemplate_4f6653f5ccf94f9bc148f2aad2903ab11d15c434ea337ca0cd731d28ce644d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layouts.html.twig", "HologramBundle:Front:finalProducts.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HologramBundle::layouts.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " 
    <h2> Final Products  </h2>
";
    }

    // line 5
    public function block_mainContent($context, array $blocks = array())
    {
        echo "  

    <!--/content-inner-section-->
       <div class=\"w3_content_agilleinfo_inner\">
\t    <div class=\"agile_featured_movies\">
\t      <!--/comedy-movies-->
\t   
                 ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "\t\t <div class=\"wthree_agile-requested-movies tv-movies\">
\t\t    <div class=\"col-md-2 w3l-movie-gride-agile requested-movies\">
\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_view_video", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
            echo "\" class=\"hvr-sweep-to-bottom\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute($context["p"], "productPhoto", array()))), "html", null, true);
            echo "\" title=\"Movies Pro\" class=\"img-responsive\" alt=\" \">\t\t\t
\t\t\t   <div class=\"w3l-action-icon\"><i class=\"fa fa-play-circle-o\" aria-hidden=\"true\"></i></div>
\t\t\t</a>
\t\t\t<div class=\"mid-1 agileits_w3layouts_mid_1_home\">
\t\t\t    <div class=\"w3l-movie-text\">
                                <h3><a  href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_view_video", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productName", array()), "html", null, true);
            echo "</a></h3>\t\t\t\t\t\t\t
\t\t\t    </div>
\t\t            <div class=\"mid-2 agile_mid_2_home\">
\t\t\t\t<p>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "productDate", array()), "d/m/Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t      <div class=\"clearfix\"></div>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<div class=\"ribben one\">\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t
\t\t\t</div>
\t\t    </div>
                 </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
       </div>
    
                     
<!--/content-inner-section-->
    
 ";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Front:finalProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  74 => 23,  66 => 20,  56 => 15,  52 => 13,  48 => 12,  37 => 5,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"HologramBundle::layouts.html.twig\" %}
{% block title %} 
    <h2> Final Products  </h2>
{%endblock %}
{% block mainContent %}  

    <!--/content-inner-section-->
       <div class=\"w3_content_agilleinfo_inner\">
\t    <div class=\"agile_featured_movies\">
\t      <!--/comedy-movies-->
\t   
                 {% for p in prod  %}
\t\t <div class=\"wthree_agile-requested-movies tv-movies\">
\t\t    <div class=\"col-md-2 w3l-movie-gride-agile requested-movies\">
\t\t\t<a href=\"{{ path('esprit_hologram_view_video',{'id':p.idProduit}) }}\" class=\"hvr-sweep-to-bottom\"><img src=\"{{asset('../web/Uploads/'~ p.productPhoto)}}\" title=\"Movies Pro\" class=\"img-responsive\" alt=\" \">\t\t\t
\t\t\t   <div class=\"w3l-action-icon\"><i class=\"fa fa-play-circle-o\" aria-hidden=\"true\"></i></div>
\t\t\t</a>
\t\t\t<div class=\"mid-1 agileits_w3layouts_mid_1_home\">
\t\t\t    <div class=\"w3l-movie-text\">
                                <h3><a  href=\"{{ path('esprit_hologram_view_video',{'id':p.idProduit}) }}\">{{p.productName}}</a></h3>\t\t\t\t\t\t\t
\t\t\t    </div>
\t\t            <div class=\"mid-2 agile_mid_2_home\">
\t\t\t\t<p>{{p.productDate|date('d/m/Y')}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t      <div class=\"clearfix\"></div>
\t\t\t    </div>
\t\t\t</div>
\t\t\t<div class=\"ribben one\">\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t
\t\t\t</div>
\t\t    </div>
                 </div>
                 {% endfor %}
            </div>
       </div>
    
                     
<!--/content-inner-section-->
    
 {% endblock %}
 ", "HologramBundle:Front:finalProducts.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/finalProducts.html.twig");
    }
}
