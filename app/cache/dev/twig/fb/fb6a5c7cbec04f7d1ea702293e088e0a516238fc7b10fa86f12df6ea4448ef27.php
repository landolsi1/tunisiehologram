<?php

/* HologramBundle:Back:produitsNonValides.html.twig */
class __TwigTemplate_00687c742fbf9af11749963180b144d7d5ba27366023911b461efa84c4840b0e extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Back:produitsNonValides.html.twig", 3);
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
        <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Projects to validate</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                     
                        </ul>
                   
                      
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                   <!-- <p>Simple table with project listing with progress and editing options</p>!-->

                    <!-- start project list -->
                   
                    <table class=\"table table-striped projects\">
                      <thead>
                        <tr>
                          <th style=\"width: 1%\">#</th>
                          <th style=\"width: 20%\">Project Name</th>
                          <th>Date</th>
                          <th>Project Progress</th>
                          <th>Company Name</th>
                          <th style=\"width: 20%\">#Edit</th>
                        </tr>
                      </thead>
                       ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productName", array()), "html", null, true);
            echo "</a>
                            <br />
                            <!--<small>Created 01.01.2015</small>-->
                          </td>
                          <td>
                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "productDate", array()), "d/m/Y"), "html", null, true);
            echo " 
                          </td>
                          <td class=\"project_progress\">
                            <div class=\"progress progress_sm\">
                              <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"57\"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                          <td>
                              <!-- <button type=\"button\" class=\"btn btn-success btn-xs\">Success</button>!-->
                               <a>Samsung</a>
                          </td>
                          <td>
                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_view_one_product", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
            echo "\"  class=\"btn btn-primary btn-xs\"><i class=\"fa fa-folder\"></i> View </a>
                            <!--<a href=\"#\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
                            <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>!-->
                          </td>
                        </tr>
                        
                      
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo " 
                      </tbody>
                      
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       

";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Back:produitsNonValides.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 70,  101 => 63,  85 => 50,  77 => 45,  71 => 41,  67 => 40,  30 => 5,  27 => 4,  18 => 3,);
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
   
        <div class=\"clearfix\"></div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Projects to validate</h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                     
                        </ul>
                   
                      
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">

                   <!-- <p>Simple table with project listing with progress and editing options</p>!-->

                    <!-- start project list -->
                   
                    <table class=\"table table-striped projects\">
                      <thead>
                        <tr>
                          <th style=\"width: 1%\">#</th>
                          <th style=\"width: 20%\">Project Name</th>
                          <th>Date</th>
                          <th>Project Progress</th>
                          <th>Company Name</th>
                          <th style=\"width: 20%\">#Edit</th>
                        </tr>
                      </thead>
                       {% for p  in prod  %}
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>{{ p.productName }}</a>
                            <br />
                            <!--<small>Created 01.01.2015</small>-->
                          </td>
                          <td>
                            {{ p.productDate|date('d/m/Y')}} 
                          </td>
                          <td class=\"project_progress\">
                            <div class=\"progress progress_sm\">
                              <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"57\"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                          <td>
                              <!-- <button type=\"button\" class=\"btn btn-success btn-xs\">Success</button>!-->
                               <a>Samsung</a>
                          </td>
                          <td>
                            <a href=\"{{ path('esprit_hologram_view_one_product',{'id':p.idProduit}) }}\"  class=\"btn btn-primary btn-xs\"><i class=\"fa fa-folder\"></i> View </a>
                            <!--<a href=\"#\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
                            <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>!-->
                          </td>
                        </tr>
                        
                      
                       {% endfor %} 
                      </tbody>
                      
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       

{% endblock %}", "HologramBundle:Back:produitsNonValides.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Back/produitsNonValides.html.twig");
    }
}
