<?php

/* HologramBundle:Front:index.html.twig */
class __TwigTemplate_efb9d09751784d4e9b888c71c027e7e71504c7a66ac7a7f6f34d60ca9020be87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layout.html.twig", "HologramBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'dashboard' => array($this, 'block_dashboard'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HologramBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dashboard($context, array $blocks = array())
    {
        // line 3
        echo "   <div class=\"content\">
\t            <div class=\"container-fluid\">
\t                <div class=\"row\">
\t                    <div class=\"col-md-12\">
\t                        <div class=\"card card-plain\">
\t                            <div class=\"card-header\" data-background-color=\"purple\">
\t                                <h4 class=\"title\">Tunisie Hologram</h4>
\t                                <p class=\"category\">Votre site de publication de publicité via Hologram </p>
\t                            </div>
\t                            <div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-container hidden-sm hidden-xs\">
\t\t\t\t\t\t\t\t\t\t<iframe src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("https://design.google.com/icons/"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<p>Your browser does not support iframes.</p>
\t\t\t\t\t\t\t\t\t\t</iframe>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 hidden-lg hidden-md text-center\">
\t\t\t\t\t\t\t\t\t\t<h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the  <a href=\"https://design.google.com/icons/\" target=\"_blank\">Material Icons</a></h5>
\t\t\t\t\t\t\t\t\t</div>
\t                        \t</div>
\t                    \t</div>
\t                \t</div>
\t            \t</div>
\t        \t</div>
\t    \t</div>
";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"HologramBundle::layout.html.twig\" %}
{% block dashboard %}
   <div class=\"content\">
\t            <div class=\"container-fluid\">
\t                <div class=\"row\">
\t                    <div class=\"col-md-12\">
\t                        <div class=\"card card-plain\">
\t                            <div class=\"card-header\" data-background-color=\"purple\">
\t                                <h4 class=\"title\">Tunisie Hologram</h4>
\t                                <p class=\"category\">Votre site de publication de publicité via Hologram </p>
\t                            </div>
\t                            <div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<div class=\"iframe-container hidden-sm hidden-xs\">
\t\t\t\t\t\t\t\t\t\t<iframe src=\"{{ asset('https://design.google.com/icons/')}}\">
\t\t\t\t\t\t\t\t\t\t\t<p>Your browser does not support iframes.</p>
\t\t\t\t\t\t\t\t\t\t</iframe>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 hidden-lg hidden-md text-center\">
\t\t\t\t\t\t\t\t\t\t<h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the  <a href=\"https://design.google.com/icons/\" target=\"_blank\">Material Icons</a></h5>
\t\t\t\t\t\t\t\t\t</div>
\t                        \t</div>
\t                    \t</div>
\t                \t</div>
\t            \t</div>
\t        \t</div>
\t    \t</div>
{% endblock %}", "HologramBundle:Front:index.html.twig", "C:\\wamp\\www\\TunisieHologram\\src\\HologramBundle/Resources/views/Front/index.html.twig");
    }
}
