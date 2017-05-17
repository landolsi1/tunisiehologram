<?php

/* HologramBundle:Front:allProducts.html.twig */
class __TwigTemplate_15cb368179fa6b03f59d3061d06859b54e5fffedfe1262eca63ab11ecd272772 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Front:allProducts.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " 
         <h2> List Of All Products </h2>
         </br>
                         ";
    }

    // line 9
    public function block_mainContent($context, array $blocks = array())
    {
        echo "  

  
                    
                            <table class=\"table table-hover\">
                                <thead>
                               <th>Logo</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product Description</th>
                                                                                        <th>Edit</th>
                                </thead>
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "                                    <tbody>
                                        <tr>
                                            <td><img width=\"50\" height=\"50\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute($context["p"], "productPhoto", array()))), "html", null, true);
            echo "\"></td>
                                            <td class=\"w3-list-img\"> <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productName", array()), "html", null, true);
            echo "</span></td>
                                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "productDate", array()), "d/m/Y"), "html", null, true);
            echo " </td>
                                            <td>";
            // line 28
            if (($this->getAttribute($context["p"], "etat", array()) == "en attente")) {
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
                                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productContent", array()), "html", null, true);
            echo "</a></td>
                                                   <td>";
            // line 34
            if (($this->getAttribute($context["p"], "etat", array()) == "en attente")) {
                // line 35
                echo "                                                       <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_update_product", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
                echo "\"  class=\"btn btn-primary btn-xs\" style=\"width: 80px;\"><i class=\"fa fa-folder\"></i> Edit </a>
                                                   ";
            } elseif (($this->getAttribute(            // line 36
$context["p"], "etat", array()) == "valider")) {
                // line 37
                echo "                                                     <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_payement", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
                echo "\"  class=\"btn btn-primary btn-xs\" style=\"width: 80px;\"><i class=\"fa fa-folder\"></i> Payer </a>
                                                      ";
            }
            // line 38
            echo "</td>
                                                </tr>\t                       \t                                       
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "HologramBundle:Front:allProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  107 => 38,  101 => 37,  99 => 36,  94 => 35,  92 => 34,  88 => 33,  85 => 32,  81 => 31,  79 => 30,  76 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 23,  54 => 22,  37 => 9,  28 => 4,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Front:allProducts.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/allProducts.html.twig");
    }
}
