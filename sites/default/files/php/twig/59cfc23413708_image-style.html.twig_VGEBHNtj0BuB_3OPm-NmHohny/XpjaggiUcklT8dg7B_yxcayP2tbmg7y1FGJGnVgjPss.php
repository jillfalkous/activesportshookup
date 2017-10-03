<?php

/* core/themes/classy/templates/field/image-style.html.twig */
class __TwigTemplate_6ae0269c4abe22b44ac28cdf5e6fa23a3441adb466bd4c82b7fc465ebbabf4fd extends Twig_Template
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
        $__internal_fac0928f1824dcab0d65adb2a361191d8275287306d8419d7d25edc168cb28f3 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac0928f1824dcab0d65adb2a361191d8275287306d8419d7d25edc168cb28f3->enter($__internal_fac0928f1824dcab0d65adb2a361191d8275287306d8419d7d25edc168cb28f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/image-style.html.twig"));

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

        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_fac0928f1824dcab0d65adb2a361191d8275287306d8419d7d25edc168cb28f3->leave($__internal_fac0928f1824dcab0d65adb2a361191d8275287306d8419d7d25edc168cb28f3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/image-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/field/image-style.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/themes/classy/templates/field/image-style.html.twig");
    }
}
