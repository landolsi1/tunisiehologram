<?php

/* HologramBundle:Front:Payement.html.twig */
class __TwigTemplate_e40d4ab27787011a314fa99800761f167f76fcc5cea954ed6ae10e657d2e05e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Front:Payement.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " 
          <span> <h2 style=\" color: #73879C;\"> Payment Product </h2> </span>
         </br>
                         ";
    }

    // line 8
    public function block_mainContent($context, array $blocks = array())
    {
        echo " 
     
    
    
<!-- New Product -->
<div class=\"container\">
    <div style=\"padding-left: 300px; width: 800px; color: #73879C;\">
   
      </br>
        
          </br>
     </br>
   
     </br>
    ";
        // line 22
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
        return "HologramBundle:Front:Payement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  37 => 8,  28 => 4,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Front:Payement.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/Payement.html.twig");
    }
}
