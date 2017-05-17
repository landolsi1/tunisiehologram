<?php

/* HologramBundle:Back:addFinalVideo.html.twig */
class __TwigTemplate_4b5de493253e73df0b8300f4ca14c85c16843c0faa6ed9e9b9060ccd19f29a82 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Back:addFinalVideo.html.twig", 3);
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
      <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("Front/css/FileCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
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

                    <form class=\"form-horizontal form-label-left\" novalidate  method=\"POST\" enctype=\"multipart/form-data\"   action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_view_validate_product_back", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\" >

               
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Logo <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <img width=\"120\" height=\"120\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["img"]) ? $context["img"] : null)), "html", null, true);
        echo "\">
                               
                        </div>
                      </div>
                         <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Product name :<span class=\"required\"></span>
                        </label>
                     
                    <div  class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                      <input type=\"text\"  id=\"nomp\" name=\"nomp\"   readonly class=\"  form-control  \" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "productName", array()), "html", null, true);
        echo "\">
                    </div>    
      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Date  <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                             <input id=\"name\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\" name=\"name\"  readonly type=\"text\" value=";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "d/m/Y"), "html", null, true);
        echo ">
                        </div>
                      </div>
                        
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-smp.video-3 col-xs-12\" for=\"textarea\">Description <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                          <textarea  id=\"contenup\" name=\"contenup\"  required=\"required\" readonly class=\"form-control col-md-7 col-xs-12\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "productContent", array()), "html", null, true);
        echo "</textarea>
                        </div>
    </div>
                     
                       <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Video <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"500\" height=\"300\" controls>
                                 <source src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["video"]) ? $context["video"] : null)), "html", null, true);
        echo "\" type=\"video/mp4\">
                           </video>
                               
                        </div>
                      </div>
                   <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Final Product <span class=\"required\">:</span>
                        </label>
                      
                        
                      </div>
                           <div style=\"padding-left: 25%;\">
                             <input type=\"file\" name=\"file\" id=\"file\"   />
                           </div>
                      <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-md-offset-3\">
                           <button  type=\"submit\" class=\"btn btn-success\" >Validate</button>
                        
                        </div>
                      </div>
                  </div>
                 </form>
        <!-- /page content -->
    
    
";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Back:addFinalVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 64,  97 => 55,  86 => 47,  76 => 40,  64 => 31,  54 => 24,  33 => 6,  30 => 5,  27 => 4,  18 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Back:addFinalVideo.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Back/addFinalVideo.html.twig");
    }
}
