<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_0936f70854809bd412eadf0ec50704fce0532a9490c56a99f099990a25988bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card\">
                        <div class=\"card-header\" data-background-color=\"purple\">
                            <h4 class=\"title\">Edit Profile</h4>                         
                        </div>
                        <div class=\"card-content\">
                            <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\"></label>

                                        </div>
                                    </div>
<form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"col-md-3\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 21,  43 => 19,  37 => 18,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card\">
                        <div class=\"card-header\" data-background-color=\"purple\">
                            <h4 class=\"title\">Edit Profile</h4>                         
                        </div>
                        <div class=\"card-content\">
                            <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\"></label>

                                        </div>
                                    </div>
<form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"col-md-3\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp64\\www\\tunisiehologram\\app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
