<?php

/* HologramBundle:Front:myProducts.html.twig */
class __TwigTemplate_0ee650c7b7086755fdc2d025ebb726947cdbfeee37831142a690090c4b21ff4e extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Front:myProducts.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "                                    <tbody>
                                        <tr>
                                            <td><img width=\"50\" height=\"50\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute($context["p"], "productPhoto", array()))), "html", null, true);
            echo "\"></td>
                                            <td><a> <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productName", array()), "html", null, true);
            echo "</span></a></td>
                                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "productDate", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                             <td>";
            // line 31
            if (($this->getAttribute($context["p"], "etat", array()) == "waiting")) {
                // line 32
                echo "                                                <div class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Waiting</div>
                                                ";
            } elseif (($this->getAttribute(            // line 33
$context["p"], "etat", array()) == "valider")) {
                // line 34
                echo "                                                    <div class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Validate </div>
                                                    ";
            }
            // line 35
            echo "</td>
                                                    <td><a>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productContent", array()), "html", null, true);
            echo "</a></td>
                                                   
                                                </tr>\t                       \t                                       
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return array (  95 => 40,  85 => 36,  82 => 35,  78 => 34,  76 => 33,  73 => 32,  71 => 31,  67 => 30,  63 => 29,  59 => 28,  55 => 26,  51 => 25,  27 => 5,  18 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Front:myProducts.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/myProducts.html.twig");
    }
}
