<?php

/* HologramBundle:Front:myProducts.html.twig */
class __TwigTemplate_0e11ad9db2711f10272c22db240a148fe27a5c9d89578fde5214551a72f125d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HologramBundle::layout.html.twig", "HologramBundle:Front:myProducts.html.twig", 1);
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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "                                    <tbody>
                                        <tr>
                                            <td><img width=\"50\" height=\"50\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute($context["p"], "productPhoto", array()))), "html", null, true);
            echo "\"></td>
                                            <td><a> <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productName", array()), "html", null, true);
            echo "</span></a></td>
                                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "productDate", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                             <td>";
            // line 28
            if (($this->getAttribute($context["p"], "etat", array()) == "waiting")) {
                // line 29
                echo "                                                <div class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Waiting</div>
                                                ";
            } elseif (($this->getAttribute(            // line 30
$context["p"], "etat", array()) == "valider")) {
                // line 31
                echo "                                                    <div class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Validate </div>
                                                    ";
            }
            // line 32
            echo "</td>
                                                    <td><a>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productContent", array()), "html", null, true);
            echo "</a></td>
                                                   
                                                </tr>\t                       \t                                       
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return "HologramBundle:Front:myProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  86 => 33,  83 => 32,  79 => 31,  77 => 30,  74 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 23,  52 => 22,  28 => 2,  11 => 1,);
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
                                             <td>{% if p.etat == 'waiting' %}
                                                <div class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Waiting</div>
                                                {% elseif p.etat == 'valider' %}
                                                    <div class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Validate </div>
                                                    {% endif %}</td>
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
", "HologramBundle:Front:myProducts.html.twig", "C:\\wamp\\www\\TunisieHologram\\src\\HologramBundle/Resources/views/Front/myProducts.html.twig");
    }
}
