<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_27cb14cdebd1a48ccc007e68b9cd0679712e9dc5e216a8930302db88b045d645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "

    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card\">
                        <div class=\"card-header\" data-background-color=\"purple\">
                            <h4 class=\"title\">Connexion</h4>                         
                        </div>
                        <div class=\"card-content\">
                            <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\"></label>

                                        </div>
                                    </div>

                                    <div class=\"col-md-3\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
                                        </div>
                                    </div>

                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\"></label>

                                        </div>
                                    </div>

                                    <div class=\"col-md-3\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                            <input type=\"password\" class=\"form-control\"  id=\"password\" name=\"_password\" required=\"required\" />
                                        </div>
                                    </div>

                                </div>

        <input  type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label class=\"control-label\" for=\"remember_me\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <input type=\"submit\" class=\"btn btn-primary pull-right\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


                                <div class=\"clearfix\"></div>
                            </form>
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
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 58,  104 => 56,  93 => 48,  75 => 33,  71 => 32,  57 => 21,  53 => 20,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\tunisiehologram\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
