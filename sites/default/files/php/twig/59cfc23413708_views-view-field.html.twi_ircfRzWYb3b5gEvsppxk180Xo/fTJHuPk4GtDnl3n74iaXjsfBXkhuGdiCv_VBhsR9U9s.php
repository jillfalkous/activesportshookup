<?php

/* core/themes/stable/templates/views/views-view-field.html.twig */
class __TwigTemplate_684c8642229a177fd51e249cc2eba38edc5ec5495e33d2631b36a59227d442fe extends Twig_Template
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
        $__internal_b74363436adc4a3e603f5e9268c9b6142c1dd36fdd692e915760978c644e001e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74363436adc4a3e603f5e9268c9b6142c1dd36fdd692e915760978c644e001e->enter($__internal_b74363436adc4a3e603f5e9268c9b6142c1dd36fdd692e915760978c644e001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/views/views-view-field.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["output"] ?? null), "html", null, true));
        
        $__internal_b74363436adc4a3e603f5e9268c9b6142c1dd36fdd692e915760978c644e001e->leave($__internal_b74363436adc4a3e603f5e9268c9b6142c1dd36fdd692e915760978c644e001e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/views/views-view-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/views/views-view-field.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/themes/stable/templates/views/views-view-field.html.twig");
    }
}
