<?php

/* HologramBundle:Front:newProduct.html.twig */
class __TwigTemplate_b64c5508107b1a12b5efc4a4bf9adbe94410178e31b582b921b7b5e68737b64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("HologramBundle::layout.html.twig", "HologramBundle:Front:newProduct.html.twig", 3);
        $this->blocks = array(
            'mainContent' => array($this, 'block_mainContent'),
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

    // line 5
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
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "
     ";
        // line 17
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
        return array (  47 => 17,  43 => 16,  28 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

    {% extends \"HologramBundle::layout.html.twig\" %}

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
", "HologramBundle:Front:newProduct.html.twig", "C:\\wamp\\www\\TunisieHologram\\src\\HologramBundle/Resources/views/Front/newProduct.html.twig");
    }
}
