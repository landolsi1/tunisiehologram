<?php

/* HologramBundle:Front:finalVideo.html.twig */
class __TwigTemplate_8cfc93fa21e580ffacc6f3af5359f9726c9c3607856a504f93a05a5703427f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layouts.html.twig", "HologramBundle:Front:finalVideo.html.twig", 1);
        $this->blocks = array(
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
    public function block_mainContent($context, array $blocks = array())
    {
        // line 3
        echo "
    <!--/content-inner-section-->
\t\t\t\t<div class=\"w3_content_agilleinfo_inner\">
\t\t\t\t\t\t<div class=\"agile_featured_movies\">
\t\t\t\t            <div class=\"inner-agile-w3l-part-head\">
\t\t\t\t\t            <h3 class=\"w3l-inner-h-title\">
\t\t\t\t\t\t\t\t<p class=\"w3ls_head_para\" style=\"text-align: left ; margin-left: 35px;\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productName", array()), "html", null, true);
        echo "</p> </h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t   <div class=\"latest-news-agile-info\">
\t\t\t\t\t\t\t\t   <div class=\"col-md-8 latest-news-agile-left-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single video_agile_player\">
\t\t\t\t\t\t\t\t\t\t\t       
\t\t\t\t\t\t\t\t\t\t            <div class=\"video-grid-single-page-agileits\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <video width=\"800\" height=\"400\" controls>
                                 <source src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "finalVideo", array()))), "html", null, true);
        echo "\" type=\"video/mp4\">
                           </video> </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   <div class=\"col-md-4 latest-news-agile-right-content\">
\t\t\t\t\t\t\t\t   <h4 class=\"side-t-w3l-agile\"> <span>Product Description</span></h4>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t    <ul class=\"side-bar-agile\">
                                                                                <li><h4>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productContent", array()), "html", null, true);
        echo "</h4><p>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productDate", array()), "d/m/Y"), "html", null, true);
        echo "</p></li>
\t\t\t\t\t\t\t                    </ul>
                                                                   </div>
                                </div>
                                                                            
\t\t\t\t\t\t\t\t\t\t
\t\t\t<!--//content-inner-section-->


    
";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Front:finalVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  50 => 17,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
{% block mainContent %}

    <!--/content-inner-section-->
\t\t\t\t<div class=\"w3_content_agilleinfo_inner\">
\t\t\t\t\t\t<div class=\"agile_featured_movies\">
\t\t\t\t            <div class=\"inner-agile-w3l-part-head\">
\t\t\t\t\t            <h3 class=\"w3l-inner-h-title\">
\t\t\t\t\t\t\t\t<p class=\"w3ls_head_para\" style=\"text-align: left ; margin-left: 35px;\">{{p.productName}}</p> </h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t   <div class=\"latest-news-agile-info\">
\t\t\t\t\t\t\t\t   <div class=\"col-md-8 latest-news-agile-left-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single video_agile_player\">
\t\t\t\t\t\t\t\t\t\t\t       
\t\t\t\t\t\t\t\t\t\t            <div class=\"video-grid-single-page-agileits\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <video width=\"800\" height=\"400\" controls>
                                 <source src=\"{{asset('../web/Uploads/'~ p.finalVideo )}}\" type=\"video/mp4\">
                           </video> </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   <div class=\"col-md-4 latest-news-agile-right-content\">
\t\t\t\t\t\t\t\t   <h4 class=\"side-t-w3l-agile\"> <span>Product Description</span></h4>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t    <ul class=\"side-bar-agile\">
                                                                                <li><h4>{{p.productContent}}</h4><p>{{ p.productDate|date('d/m/Y')}}</p></li>
\t\t\t\t\t\t\t                    </ul>
                                                                   </div>
                                </div>
                                                                            
\t\t\t\t\t\t\t\t\t\t
\t\t\t<!--//content-inner-section-->


    
{% endblock %}   ", "HologramBundle:Front:finalVideo.html.twig", "C:\\wamp64\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/finalVideo.html.twig");
    }
}
