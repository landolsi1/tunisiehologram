<?php

/* HologramBundle:Front:productWaitingLaunch.html.twig */
class __TwigTemplate_44f891e5ffd829d67ac804f59e8f2ec44e3ca18292339f44fe335757c3f6dccd extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Front:productWaitingLaunch.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mainContent($context, array $blocks = array())
    {
        echo "  

    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                 <div class=\"col-md-12\">
                    <div class=\"card card-plain\">
                        <div class=\"card-header\" data-background-color=\"purple\">
                            <h4 class=\"title\">Product</h4>
                            <p class=\"category\">List of all products</p>
                        </div>
                        <div class=\"card-content table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Etat</th>
                                <th>Descrition</th>
                                </thead>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "                                    <tbody>
                                        <tr>
                                            <td><img width=\"50\" height=\"50\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute($context["p"], "productPhoto", array()))), "html", null, true);
            echo "\"></td>
                                            <td><a> <span>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productName", array()), "html", null, true);
            echo "</span></a></td>
                                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "productDate", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                            <td>
                                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_refuse_product", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Refuse</div>
                                </td><td>
                                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_validatate_product", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Validate </div>
                                                    </td>
                                                    <td><a>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productContent", array()), "html", null, true);
            echo "</a></td>
                                                   
                                                </tr>\t                       \t                                       
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " 
                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Front:productWaitingLaunch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  82 => 35,  77 => 33,  72 => 31,  67 => 29,  63 => 28,  59 => 27,  55 => 25,  51 => 24,  27 => 4,  18 => 3,);
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

    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                 <div class=\"col-md-12\">
                    <div class=\"card card-plain\">
                        <div class=\"card-header\" data-background-color=\"purple\">
                            <h4 class=\"title\">Product</h4>
                            <p class=\"category\">List of all products</p>
                        </div>
                        <div class=\"card-content table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Etat</th>
                                <th>Descrition</th>
                                </thead>
                                {% for p in prod  %}
                                    <tbody>
                                        <tr>
                                            <td><img width=\"50\" height=\"50\" src=\"{{asset('../web/Uploads/'~ p.productPhoto)}}\"></td>
                                            <td><a> <span>{{ p.productName }}</span></a></td>
                                            <td>{{ p.productDate|date('d/m/Y')}} </td>
                                            <td>
                                                <a href=\"{{ path('esprit_hologram_refuse_product',{'id':p.idProduit}) }}\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Refuse</div>
                                </td><td>
                                                    <a href=\"{{ path('esprit_hologram_validatate_product',{'id':p.idProduit}) }}\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Validate </div>
                                                    </td>
                                                    <td><a>{{ p.productContent }}</a></td>
                                                   
                                                </tr>\t                       \t                                       
                                                {% endfor %}
 
                                                </tbody>


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endblock %}
", "HologramBundle:Front:productWaitingLaunch.html.twig", "C:\\wamp64\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/productWaitingLaunch.html.twig");
    }
}
