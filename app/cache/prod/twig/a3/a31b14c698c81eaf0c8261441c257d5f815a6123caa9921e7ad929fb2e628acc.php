<?php

/* HologramBundle:Security:login.html.twig */
class __TwigTemplate_383500027d026e91f50d4011778d7e16b340d75a66d5731d606ebca65384a952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "HologramBundle:Security:login.html.twig", 1);
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

\t        <div class=\"content\">
\t            <div class=\"container-fluid\">
\t                <div class=\"row\">
\t                    <div class=\"col-md-8\">
\t                        <div class=\"card\">
\t                            <div class=\"card-header\" data-background-color=\"purple\">
\t                                <h4 class=\"title\">Edit Profile</h4>
\t\t\t\t\t\t\t\t\t<p class=\"category\">Complete your profile</p>
\t                            </div>
\t                            <div class=\"card-content\">
\t                                <form>
\t                                    <div class=\"row\">
\t                                        <div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Company (disabled)</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" disabled>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                        <div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Username</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Email address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                    </div>

\t                                    <div class=\"row\">
\t                                        <div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Fist Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                        <div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Last Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                    </div>

\t                                    <div class=\"row\">
\t                                        <div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Adress</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                    </div>

\t                                    <div class=\"row\">
\t                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">City</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Country</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Postal Code</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" >
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t                                        </div>
\t                                    </div>

\t                                    <div class=\"row\">
\t                                        <div class=\"col-md-12\">
\t                                            <div class=\"form-group\">
\t                                                <label>About Me</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating\">
\t\t\t\t\t\t\t\t\t    \t\t\t\t<label class=\"control-label\"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
\t\t\t\t\t\t\t\t    \t\t\t\t\t<textarea class=\"form-control\" rows=\"5\"></textarea>
\t\t                        \t\t\t\t\t</div>
\t                                            </div>
\t                                        </div>
\t                                    </div>

\t                                    <button type=\"submit\" class=\"btn btn-primary pull-right\">Update Profile</button>
\t                                    <div class=\"clearfix\"></div>
\t                                </form>
\t                            </div>
\t                        </div>
\t                    </div>
\t\t\t\t\t\t<div class=\"col-md-4\">
    \t\t\t\t\t\t<div class=\"card card-profile\">
    \t\t\t\t\t\t\t<div class=\"card-avatar\">
    \t\t\t\t\t\t\t\t<a href=\"#pablo\">
    \t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"../assets/img/faces/marc.jpg\" />
    \t\t\t\t\t\t\t\t</a>
    \t\t\t\t\t\t\t</div>

    \t\t\t\t\t\t\t<div class=\"content\">
    \t\t\t\t\t\t\t\t<h6 class=\"category text-gray\">CEO / Co-Founder</h6>
    \t\t\t\t\t\t\t\t<h4 class=\"card-title\">Alec Thompson</h4>
    \t\t\t\t\t\t\t\t<p class=\"card-content\">
    \t\t\t\t\t\t\t\t\tDon't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
    \t\t\t\t\t\t\t\t</p>
    \t\t\t\t\t\t\t\t<a href=\"#pablo\" class=\"btn btn-primary btn-round\">Follow</a>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
\t\t    \t\t\t</div>
\t                </div>
\t            </div>
\t        </div>


<form action=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" class=\"form-control\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\"/>
</form>
";
    }

    public function getTemplateName()
    {
        return "HologramBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 141,  186 => 139,  179 => 135,  174 => 133,  170 => 132,  165 => 130,  161 => 129,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HologramBundle:Security:login.html.twig", "C:\\wamp\\www\\tunisiehologram\\src\\HologramBundle/Resources/views/Security/login.html.twig");
    }
}
