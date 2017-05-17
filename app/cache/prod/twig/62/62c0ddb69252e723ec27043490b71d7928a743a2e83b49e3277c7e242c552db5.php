<?php

/* HologramBundle:Back:ViewValidateProd.html.twig */
class __TwigTemplate_770743c49cc5980ed3557314eeb169d5317858a201e5dc5ef109e877aad5720f extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Back:ViewValidateProd.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mainContent($context, array $blocks = array())
    {
        // line 5
        echo "   
     <!-- page content -->
       
            <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Product validation</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                    <form class=\"form-horizontal form-label-left\" novalidate>

                   
                   

                      
                     
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Logo <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <img width=\"120\" height=\"120\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["img"]) ? $context["img"] : null)), "html", null, true);
        echo "\">
                               
                        </div>
                      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Product name <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "productName", array()), 'widget');
        echo "
                        </div>
                      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Date  <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                             <input id=\"name\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\" name=\"name\"  readonly type=\"text\" value=";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "d/m/Y"), "html", null, true);
        echo ">
                        </div>
                      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Description <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "productContent", array()), 'widget');
        echo "
                        </div>
                      </div>
                     
                       <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Video <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"500\" height=\"300\" controls>
                                 <source src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["video"]) ? $context["video"] : null)), "html", null, true);
        echo "\" type=\"video/mp4\">
                           </video>
                               
                        </div>
                      </div>
                        <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Final Product <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"500\" height=\"300\" controls>
                                 <source src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["final"]) ? $context["final"] : null)), "html", null, true);
        echo "\" type=\"video/mp4\">
                           </video>
                               
                        </div>
                      </div>    
                           
                      
                      
                </form>

                    <div class=\"ln_solid\"></div>
                   <!-- <div class=\"form-group\">
                        <div class=\"col-md-6 col-md-offset-3\">
                        <form class=\"control-label col-md-3 col-sm-3 col-xs-12\" action=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_validatate_product", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "idProduit", array()))), "html", null, true);
        echo "\" >
                           <button  type=\"submit\" class=\"btn btn-success\" >Validate</button>
                        </form>
                        <form  class=\"control-label col-md-3 col-sm-3 col-xs-12\"  action=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_refuse_product", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "idProduit", array()))), "html", null, true);
        echo "\">
                           <button type=\"submit\" class=\"btn btn-primary\">Refuse</button>
                        </form>
                        </div>
                      </div>!-->
                  </div>
               
        <!-- /page content -->
    
    
";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Back:ViewValidateProd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 91,  133 => 88,  117 => 75,  104 => 65,  92 => 56,  82 => 49,  72 => 42,  61 => 34,  30 => 5,  27 => 4,  18 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Back:ViewValidateProd.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Back/ViewValidateProd.html.twig");
    }
}
