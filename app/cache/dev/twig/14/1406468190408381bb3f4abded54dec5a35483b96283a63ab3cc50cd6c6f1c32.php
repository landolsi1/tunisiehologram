<?php

/* HologramBundle:Front:newProduct.html.twig */
class __TwigTemplate_a4f3db8f2ba0ecd93c9c35397a18a643021f678f7c6c5884d75058a6b756ce5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Front:newProduct.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mainContent($context, array $blocks = array())
    {
        echo "          
<!-- New Product -->
<div class=\"container\">
    <div style=\"padding-left: 300px; width: 800px; color: #73879C;\">
   
      </br>
        
          </br>
     </br>
     <span> <h3 style=\"padding-left: 200px; color: #73879C;\"> New Product </h3> </span>
     </br>
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
     ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ff"]) ? $context["ff"] : $this->getContext($context, "ff")), 'form');
        echo "
  
     </div>
     </div>
</br>

</br> </br> </br>

<!-- /New Product -->


";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Front:newProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  42 => 15,  27 => 4,  18 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends is_granted('ROLE_SUPER_ADMIN')
    ? 'HologramBundle::layout.html.twig'
    : 'HologramBundle::layouts.html.twig' %}
{% block mainContent %}          
<!-- New Product -->
<div class=\"container\">
    <div style=\"padding-left: 300px; width: 800px; color: #73879C;\">
   
      </br>
        
          </br>
     </br>
     <span> <h3 style=\"padding-left: 200px; color: #73879C;\"> New Product </h3> </span>
     </br>
    {{form(f)}}
     {{form(ff)}}
  
     </div>
     </div>
</br>

</br> </br> </br>

<!-- /New Product -->


{% endblock %}{# empty Twig template #}
", "HologramBundle:Front:newProduct.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/newProduct.html.twig");
    }
}
