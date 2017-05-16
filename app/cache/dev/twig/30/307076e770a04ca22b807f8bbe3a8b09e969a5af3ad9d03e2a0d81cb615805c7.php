<?php

/* HologramBundle:Front:oneProduct.html.twig */
class __TwigTemplate_d805447d0330b05e71280a5c388ff666a2990cfd1d4e625376726d37ab8a5e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layout.html.twig", "HologramBundle:Front:oneProduct.html.twig", 1);
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

    // line 2
    public function block_mainContent($context, array $blocks = array())
    {
        // line 3
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("Front/css/FileCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <div class=\"container\">
    <div style=\"padding-left: 200px; width: 900px; color: #73879C;\">
   
      </br>
        
          </br>
     </br>
     <span> <h3 style=\"padding-left: 300px; color: #73879C;\"> Edit Product </h3> </span>
     <br>
     <br>
      <form class=\"form-horizontal form-label-left\" novalidate method=\"POST\" action=\"\" ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo ">
      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Product name :<span class=\"required\"></span>
                        </label>
                     
                    <div  class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                      <input type=\"text\"  id=\"nomp\" name=\"nomp\"    class=\"  form-control  \" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productName", array()), "html", null, true);
        echo "\">
                    </div>    
      </div>
    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-smp.video-3 col-xs-12\" for=\"textarea\">Description <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                          <textarea  id=\"contenup\" name=\"contenup\"  required=\"required\" class=\"form-control col-md-7 col-xs-12\"> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productContent", array()), "html", null, true);
        echo "</textarea>
                        </div>
    </div>
                       
    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\"> <span class=\"required\">Video:</span>
                        </label>
       
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"480\" height=\"300\" controls>
                                 <source src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "video", array()))), "html", null, true);
        echo "\" type=\"video/mp4\">
                           </video>
                            <br>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 492px; padding-left: 0px;\">
                                     ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "                         
                            </div>   
                        </div>
                          
    </div>
                          

                    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\"><span class=\"required\">Logo:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" >
                            <img width=\"480\" height=\"200\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productPhoto", array()))), "html", null, true);
        echo "\">
                            
                            <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 492px; padding-left: 0px;\">
                                <div style=\"height : 12px;\"></div>
                                <!--<input id=\"photop\" name=\"photop\" class=\"form-control custom-file-input\" style=\"width : 480px;\"  type=\"file\" >!-->
                                

                                 </br>
                        </div> 
                    </div>
                            <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-md-offset-3\">
                                <input type=\"submit\" class=\"btn btn-success\" value=\"Edit\" >
                            
                               
                       
                         </div>
                      </div>
                            </form>
        <!--<form  class=\"control-label col-md-3 col-sm-3 col-xs-12\"  >
                           <button type=\"submit\" class=\"btn btn-primary\" action=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_front_products");
        echo "\">Cancel</button>
                        </form>!-->
     </div>
     </div>
    </div>
</br>

</br> </br> </br>

";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Front:oneProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 73,  99 => 52,  85 => 41,  78 => 37,  65 => 27,  55 => 20,  46 => 14,  31 => 3,  28 => 2,  11 => 1,);
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
{% block mainContent %}
      <link href=\"{{asset('Front/css/FileCSS.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <div class=\"container\">
    <div style=\"padding-left: 200px; width: 900px; color: #73879C;\">
   
      </br>
        
          </br>
     </br>
     <span> <h3 style=\"padding-left: 300px; color: #73879C;\"> Edit Product </h3> </span>
     <br>
     <br>
      <form class=\"form-horizontal form-label-left\" novalidate method=\"POST\" action=\"\" {{ form_enctype(f) }}>
      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Product name :<span class=\"required\"></span>
                        </label>
                     
                    <div  class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                      <input type=\"text\"  id=\"nomp\" name=\"nomp\"    class=\"  form-control  \" value=\"{{p.productName}}\">
                    </div>    
      </div>
    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-smp.video-3 col-xs-12\" for=\"textarea\">Description <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                          <textarea  id=\"contenup\" name=\"contenup\"  required=\"required\" class=\"form-control col-md-7 col-xs-12\"> {{p.productContent}}</textarea>
                        </div>
    </div>
                       
    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\"> <span class=\"required\">Video:</span>
                        </label>
       
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"480\" height=\"300\" controls>
                                 <source src=\"{{asset('../web/Uploads/'~ p.video )}}\" type=\"video/mp4\">
                           </video>
                            <br>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 492px; padding-left: 0px;\">
                                     {{form_widget(f)}}                         
                            </div>   
                        </div>
                          
    </div>
                          

                    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\"><span class=\"required\">Logo:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" >
                            <img width=\"480\" height=\"200\" src=\"{{asset('../web/Uploads/'~ p.productPhoto)}}\">
                            
                            <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 492px; padding-left: 0px;\">
                                <div style=\"height : 12px;\"></div>
                                <!--<input id=\"photop\" name=\"photop\" class=\"form-control custom-file-input\" style=\"width : 480px;\"  type=\"file\" >!-->
                                

                                 </br>
                        </div> 
                    </div>
                            <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-md-offset-3\">
                                <input type=\"submit\" class=\"btn btn-success\" value=\"Edit\" >
                            
                               
                       
                         </div>
                      </div>
                            </form>
        <!--<form  class=\"control-label col-md-3 col-sm-3 col-xs-12\"  >
                           <button type=\"submit\" class=\"btn btn-primary\" action=\"{{path('esprit_hologram_front_products')}}\">Cancel</button>
                        </form>!-->
     </div>
     </div>
    </div>
</br>

</br> </br> </br>

{% endblock %}", "HologramBundle:Front:oneProduct.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/oneProduct.html.twig");
    }
}
