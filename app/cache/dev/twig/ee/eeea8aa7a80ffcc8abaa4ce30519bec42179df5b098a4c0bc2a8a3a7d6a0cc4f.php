<?php

/* HologramBundle::Verification.html.twig */
class __TwigTemplate_1c5b099a226b2efc753b435c5ba7081fe6eefadbc0cdd03bfd68f1ad047c6b48 extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 2
            echo "    ";
            $this->loadTemplate("HologramBundle::layout.html.twig", "HologramBundle::Verification.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            $this->loadTemplate("HologramBundle::layouts.html.twig", "HologramBundle::Verification.html.twig", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "HologramBundle::Verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted('ROLE_SUPER_ADMIN') %}
    {% include 'HologramBundle::layout.html.twig' %}
{% else %}
    {% include 'HologramBundle::layouts.html.twig' %}
{% endif %}
", "HologramBundle::Verification.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Verification.html.twig");
    }
}
