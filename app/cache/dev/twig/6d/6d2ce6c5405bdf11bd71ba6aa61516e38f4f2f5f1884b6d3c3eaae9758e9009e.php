<?php

/* HologramBundle:Front:listProductClient.html.twig */
class __TwigTemplate_bbbad98e936cd9aa8e9ae68a69667940a83af22b6c80a4111dc54d8e9718f555 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) ? ("HologramBundle::layout.html.twig") : ("HologramBundle::layouts.html.twig")), "HologramBundle:Front:listProductClient.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mainContent($context, array $blocks = array())
    {
        echo "  

\t\t<!--/content-inner-section-->
\t\t\t\t
\t\t\t\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t<!--\t<h4>Search Results : <span>25</span></h4>-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Logo</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product Description</th>
                                                                                        <th>Edit</th>
                                                                                  </tr>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</thead>
                                                                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td> <img width=\"50\" height=\"50\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("../web/Uploads/" . $this->getAttribute($context["p"], "productPhoto", array()))), "html", null, true);
            echo "\"></td>
                                                                                        <td class=\"w3-list-img\"><a> <span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productName", array()), "html", null, true);
            echo "</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "productDate", array()), "d/m/Y"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 31
            if (($this->getAttribute($context["p"], "etat", array()) == "en attente")) {
                // line 32
                echo "                                                                                            <div class=\" btn-danger btn-xs\"  style=\"width: 50px; height : 22px; text-align: center;\"> Waiting</div>
                                                                                            ";
            } elseif (($this->getAttribute(            // line 33
$context["p"], "etat", array()) == "valider")) {
                // line 34
                echo "                                                                                            <div class=\" btn-info btn-xs\"  style=\"width: 50px; height : 22px; text-align: center;\"> Valid</div>
                                                                                                                                                               ";
            }
            // line 36
            echo "                                                                                        </td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productContent", array()), "html", null, true);
            echo "</a></td>
                                                                                        <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hologram_update_product", array("id" => $this->getAttribute($context["p"], "idProduit", array()))), "html", null, true);
            echo "\"  class=\"btn btn-primary btn-xs\" style=\"width: 50px;\"><i class=\"fa fa-folder\"></i> Edit </a>
                                                                                        </td>
\t\t\t\t\t\t\t\t\t\t </tr>
                                                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"a\" aria-labelledby=\"a-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint1\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"b\" aria-labelledby=\"b-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint2\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"c\" aria-labelledby=\"c-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>15</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint3\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"d\" aria-labelledby=\"d-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint4\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"e\" aria-labelledby=\"e-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>9</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint5\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"f\" aria-labelledby=\"f-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint6\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"g\" aria-labelledby=\"g-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>25</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint7\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>18</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>19</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>20</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>21</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>22</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>23</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>24</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>25</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"h\" aria-labelledby=\"h-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint8\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"i\" aria-labelledby=\"i-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint9\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.htmlgenre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"j\" aria-labelledby=\"j-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>15</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint10\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"k\" aria-labelledby=\"k-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint11\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"l\" aria-labelledby=\"l-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint12\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"m\" aria-labelledby=\"m-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>25</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint13\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>18</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>19</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>20</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>21</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>22</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>23</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>24</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>25</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"n\" aria-labelledby=\"n-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint14\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"o\" aria-labelledby=\"o-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint15\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"p\" aria-labelledby=\"p-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint16\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"q\" aria-labelledby=\"q-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>09</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint17\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"r\" aria-labelledby=\"r-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint18\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"s\" aria-labelledby=\"s-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint19\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"t\" aria-labelledby=\"t-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint20\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"u\" aria-labelledby=\"u-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint21\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"v\" aria-labelledby=\"v-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint22\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"w\" aria-labelledby=\"w-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>09</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint23\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"x\" aria-labelledby=\"x-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint24\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"y\" aria-labelledby=\"y-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint25\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"z\" aria-labelledby=\"z-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint26\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--//content-inner-section-->
";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Front:listProductClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  90 => 38,  86 => 37,  83 => 36,  79 => 34,  77 => 33,  74 => 32,  72 => 31,  68 => 30,  64 => 29,  60 => 28,  56 => 26,  52 => 25,  27 => 4,  18 => 3,);
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

\t\t<!--/content-inner-section-->
\t\t\t\t
\t\t\t\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t<!--\t<h4>Search Results : <span>25</span></h4>-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Logo</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Product Description</th>
                                                                                        <th>Edit</th>
                                                                                  </tr>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</thead>
                                                                                {% for p in prod  %}
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td> <img width=\"50\" height=\"50\" src=\"{{asset('../web/Uploads/'~ p.productPhoto)}}\"></td>
                                                                                        <td class=\"w3-list-img\"><a> <span>{{ p.productName }}</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ p.productDate|date('d/m/Y')}} </td>
\t\t\t\t\t\t\t\t\t\t\t<td>{% if p.etat == 'en attente' %}
                                                                                            <div class=\" btn-danger btn-xs\"  style=\"width: 50px; height : 22px; text-align: center;\"> Waiting</div>
                                                                                            {% elseif p.etat == 'valider' %}
                                                                                            <div class=\" btn-info btn-xs\"  style=\"width: 50px; height : 22px; text-align: center;\"> Valid</div>
                                                                                                                                                               {% endif %}
                                                                                        </td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a>{{ p.productContent }}</a></td>
                                                                                        <td><a href=\"{{ path('esprit_hologram_update_product',{'id':p.idProduit}) }}\"  class=\"btn btn-primary btn-xs\" style=\"width: 50px;\"><i class=\"fa fa-folder\"></i> Edit </a>
                                                                                        </td>
\t\t\t\t\t\t\t\t\t\t </tr>
                                                                                 {% endfor %}
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"a\" aria-labelledby=\"a-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint1\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"b\" aria-labelledby=\"b-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint2\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"c\" aria-labelledby=\"c-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>15</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint3\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"d\" aria-labelledby=\"d-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint4\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"e\" aria-labelledby=\"e-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>9</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint5\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"f\" aria-labelledby=\"f-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint6\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"g\" aria-labelledby=\"g-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>25</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint7\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>18</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>19</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>20</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>21</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>22</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>23</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>24</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>25</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"h\" aria-labelledby=\"h-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint8\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"i\" aria-labelledby=\"i-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint9\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.htmlgenre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"j\" aria-labelledby=\"j-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>15</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint10\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"k\" aria-labelledby=\"k-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint11\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"l\" aria-labelledby=\"l-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint12\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"m\" aria-labelledby=\"m-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>25</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint13\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>18</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>19</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>20</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>21</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>22</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>23</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>24</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>25</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"n\" aria-labelledby=\"n-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint14\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"o\" aria-labelledby=\"o-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint15\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"p\" aria-labelledby=\"p-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint16\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"q\" aria-labelledby=\"q-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>09</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint17\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"r\" aria-labelledby=\"r-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint18\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"s\" aria-labelledby=\"s-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint19\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"t\" aria-labelledby=\"t-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint20\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"u\" aria-labelledby=\"u-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint21\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"v\" aria-labelledby=\"v-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>16</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint22\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"w\" aria-labelledby=\"w-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>09</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint23\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"x\" aria-labelledby=\"x-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>14</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint24\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"y\" aria-labelledby=\"y-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>17</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint25\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>15</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>16</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>17</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"z\" aria-labelledby=\"z-tab\">
\t\t\t\t\t\t\t\t<div class=\"agile-news-table\">
\t\t\t\t\t\t\t\t\t<div class=\"w3ls-news-result\">
\t\t\t\t\t\t\t\t\t\t<h4>Search Results : <span>12</span></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table id=\"table-breakpoint26\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<th>No.</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Movie Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Year</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Country</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Genre</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Rating</th>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m2.jpg\" alt=\"\" /> <span>Me Before you</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Korea</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m11.jpg\" alt=\"\" /> <span>Warcraft</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>SD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>6.5</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m3.jpg\" alt=\"\" /> <span>Deadpool</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m4.jpg\" alt=\"\" /> <span>Rogue One</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United States</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m5.jpg\" alt=\"\" /> <span>Storks</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">India</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>9.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m6.jpg\" alt=\"\" /> <span>Hopeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Euro, France</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Thriller, Crime, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.2</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m7.jpg\" alt=\"\" /> <span>Mechanic</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">China</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>8.9</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m8.jpg\" alt=\"\" /> <span>Timeless</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m9.jpg\" alt=\"\" /> <span>Inferno</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Japan</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Action</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.1</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>11</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m10.jpg\" alt=\"\" /> <span>Now You See Me 2</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t\t<td>12</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-img\"><a href=\"single.html\"><img src=\"images/m1.jpg\" alt=\"\" /> <span>Swiss Army Man</span></a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>2016</td>
\t\t\t\t\t\t\t\t\t\t\t<td>HD</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">United Kingdom</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"w3-list-info\"><a href=\"genre.html\">Comedy, Drama</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>7.0</td>
\t\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--//content-inner-section-->
{% endblock %}
   
", "HologramBundle:Front:listProductClient.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Front/listProductClient.html.twig");
    }
}
