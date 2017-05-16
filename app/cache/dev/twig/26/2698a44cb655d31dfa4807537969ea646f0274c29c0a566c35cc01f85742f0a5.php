<?php

/* HologramBundle:Back:addFinalVideo.html.twig */
class __TwigTemplate_a6894d94bd19e1e201de2571cf4ac1a5db3909e2d5abed3fe208b956e49aef81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layout.html.twig", "HologramBundle:Back:addFinalVideo.html.twig", 1);
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
        echo "   
      <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("Front/css/FileCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
     <!-- page content -->
       
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Product Validation</h3>
              </div>

              
            </div>
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

                    <form class=\"form-horizontal form-label-left\" novalidate  method=\"POST\" action=\"\" ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo ">

                   
                      <span class=\"section\">Product Info</span>

                      
                     
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Logo <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <img width=\"120\" height=\"120\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img"))), "html", null, true);
        echo "\">
                               
                        </div>
                      </div>
                         <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Product name :<span class=\"required\"></span>
                        </label>
                     
                    <div  class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                      <input type=\"text\"  id=\"nomp\" name=\"nomp\"   readonly class=\"  form-control  \" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productName", array()), "html", null, true);
        echo "\">
                    </div>    
      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Date  <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                             <input id=\"name\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\" name=\"name\"  readonly type=\"text\" value=";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "d/m/Y"), "html", null, true);
        echo ">
                        </div>
                      </div>
                        
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-smp.video-3 col-xs-12\" for=\"textarea\">Description <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                          <textarea  id=\"contenup\" name=\"contenup\"  required=\"required\" readonly class=\"form-control col-md-7 col-xs-12\"> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "productContent", array()), "html", null, true);
        echo "</textarea>
                        </div>
    </div>
                     
                       <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Video <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"500\" height=\"300\" controls>
                                 <source src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video"))), "html", null, true);
        echo "\" type=\"video/mp4\">
                           </video>
                               
                        </div>
                      </div>
                             <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Final Product <span class=\"required\">:</span>
                        </label>
                       <div class=\"col-md-6 col-sm-6 col-xs-12\" >
                                     ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "                         
                            </div>   
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
        return array (  134 => 83,  122 => 74,  110 => 65,  99 => 57,  89 => 50,  77 => 41,  63 => 30,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
     <!-- page content -->
       
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Product Validation</h3>
              </div>

              
            </div>
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

                    <form class=\"form-horizontal form-label-left\" novalidate  method=\"POST\" action=\"\" {{ form_enctype(f) }}>

                   
                      <span class=\"section\">Product Info</span>

                      
                     
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Logo <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <img width=\"120\" height=\"120\" src=\"{{asset(img)}}\">
                               
                        </div>
                      </div>
                         <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Product name :<span class=\"required\"></span>
                        </label>
                     
                    <div  class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                      <input type=\"text\"  id=\"nomp\" name=\"nomp\"   readonly class=\"  form-control  \" value=\"{{p.productName}}\">
                    </div>    
      </div>
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Date  <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                             <input id=\"name\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\" name=\"name\"  readonly type=\"text\" value={{d|date('d/m/Y')}}>
                        </div>
                      </div>
                        
                      <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-smp.video-3 col-xs-12\" for=\"textarea\">Description <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\" style=\"width: 510px;\">
                          <textarea  id=\"contenup\" name=\"contenup\"  required=\"required\" readonly class=\"form-control col-md-7 col-xs-12\"> {{p.productContent}}</textarea>
                        </div>
    </div>
                     
                       <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Video <span class=\"required\">:</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           <video width=\"500\" height=\"300\" controls>
                                 <source src=\"{{asset(video)}}\" type=\"video/mp4\">
                           </video>
                               
                        </div>
                      </div>
                             <div class=\"item form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"textarea\">Final Product <span class=\"required\">:</span>
                        </label>
                       <div class=\"col-md-6 col-sm-6 col-xs-12\" >
                                     {{ form_widget(f) }}                         
                            </div>   
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
    
    
{% endblock %}", "HologramBundle:Back:addFinalVideo.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Back/addFinalVideo.html.twig");
    }
}
