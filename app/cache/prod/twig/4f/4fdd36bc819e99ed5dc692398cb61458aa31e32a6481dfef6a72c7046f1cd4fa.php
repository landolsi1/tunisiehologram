<?php

/* HologramBundle:Front:newProduct.html.twig */
class __TwigTemplate_39126113fc48de0183054ec002258a31fb6b6c489c477d86a9114700f1864517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layouts.html.twig", "HologramBundle:Front:newProduct.html.twig", 1);
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
         <h2> New Product </h2>
         </br>
                         ";
    }

    // line 7
    public function block_mainContent($context, array $blocks = array())
    {
        echo "          
<!-- New Product -->
<div class=\"container\">
    <div style=\"padding-left: 300px; width: 800px; color: #73879C;\">
   
      </br>
        
      
    
     </br>
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form');
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
        return array (  52 => 17,  38 => 7,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Front:newProduct.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/newProduct.html.twig");
    }
}
