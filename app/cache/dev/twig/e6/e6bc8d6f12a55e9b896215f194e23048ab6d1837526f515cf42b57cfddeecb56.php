<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_59f0924e7f7c9353c734bea18c57271236eca8f6b29c62abd38944f694a9a5c7 extends Twig_Template
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
        echo "

    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card\">
                        <div class=\"card-header\" data-background-color=\"purple\">
                            <h4 class=\"title\">Inscription</h4>                         
                        </div>
                        <div class=\"card-content\">
                             <div class=\"card-content\">
                            <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\"></label>

                                        </div>
                                    </div>
                            <form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"col-md-3\">
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
                        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  46 => 22,  40 => 21,  19 => 2,);
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
                            <h4 class=\"title\">Inscription</h4>                         
                        </div>
                        <div class=\"card-content\">
                             <div class=\"card-content\">
                            <div class=\"row\">
                                    <div class=\"col-md-5\">
                                        <div class=\"form-group label-floating\">
                                            <label class=\"control-label\"></label>

                                        </div>
                                    </div>
                            <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"col-md-3\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
                        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</form>
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp\\www\\TunisieHologram\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
