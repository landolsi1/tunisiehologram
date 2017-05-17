<?php

/* HologramBundle:Front:oneProduct.html.twig */
class __TwigTemplate_914ad3a9eb3a550a8978a565de39288dbe0302dbffb3369114133e6d1576e2af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layouts.html.twig", "HologramBundle:Front:oneProduct.html.twig", 1);
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
         <h2> Edit Product </h2>
         </br>
                         ";
    }

    // line 7
    public function block_mainContent($context, array $blocks = array())
    {
        // line 8
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("Front/css/FileCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <div class=\"container\">
    <div style=\"padding-left: 200px; width: 900px; color: #73879C;\">
   
      <form class=\"form-horizontal form-label-left\" novalidate method=\"POST\"enctype=\"multipart/form-data\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_update_product", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\">
      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Product name :<span class=\"required\"></span>
                        </label>
                     
                    <div  class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                      <input type=\"text\"  id=\"nomp\" name=\"nomp\"    class=\"  form-control  \" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "productName", array()), "html", null, true);
        echo "\">
                    </div>    
      </div>
    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-smp.video-3 col-xs-12\" for=\"textarea\">Description <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                          <textarea  id=\"contenup\" name=\"contenup\"  required=\"required\" class=\"form-control col-md-7 col-xs-12\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "productContent", array()), "html", null, true);
        echo "</textarea>
                        </div>
    </div>
                       
    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\"> <span class=\"required\">Video:</span>
                        </label>
       
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"480\" height=\"300\" controls>
                                 <source src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "video", array()))), "html", null, true);
        echo "\" type=\"video/mp4\">
                           </video>
                            <br>  
                        </div>
                          
    </div>
                           <div style=\"padding-left: 25%;\">
                             <input type=\"file\" name=\"file\" id=\"file\"   />
                           </div>
                          

                    <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\"><span class=\"required\">Logo:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" >
                            <img width=\"480\" height=\"200\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "productPhoto", array()))), "html", null, true);
        echo "\">
                            
                            <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 492px; padding-left: 0px;\">
                                <div style=\"height : 12px;\"></div>
                                <!--<input id=\"photop\" name=\"photop\" class=\"form-control custom-file-input\" style=\"width : 480px;\"  type=\"file\" >!-->
                                

                                 </br>
                        </div> 
                    </div>
                    </div>
                            <div style=\"padding-left: 25%;\">
                             <input type=\"file\" name=\"upload\" id=\"upload\"   />
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
        // line 75
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
        return array (  127 => 75,  99 => 50,  81 => 35,  68 => 25,  58 => 18,  49 => 12,  41 => 8,  38 => 7,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Front:oneProduct.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/oneProduct.html.twig");
    }
}
