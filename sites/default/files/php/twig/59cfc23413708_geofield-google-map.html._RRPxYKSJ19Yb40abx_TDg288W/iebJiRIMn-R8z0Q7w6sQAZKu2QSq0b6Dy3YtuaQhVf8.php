<?php

/* modules/contrib/geofield_map/templates/geofield-google-map.html.twig */
class __TwigTemplate_7b32615160bee7279ad20e012606eb5497e4f66347601b13da6a5c7fbdbc699a extends Twig_Template
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
        $__internal_1fd2f172fc3b73fbbab6673a18f43cb4583860def60b394ae052349769ab318a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd2f172fc3b73fbbab6673a18f43cb4583860def60b394ae052349769ab318a->enter($__internal_1fd2f172fc3b73fbbab6673a18f43cb4583860def60b394ae052349769ab318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/geofield_map/templates/geofield-google-map.html.twig"));

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

        // line 17
        echo "<div id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mapid"] ?? null), "html", null, true));
        echo "\" class=\"geofield-google-map\" style=\"min-width: 200px; width: ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["width"] ?? null), "html", null, true));
        echo "; min-height: 200px; height: ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["height"] ?? null), "html", null, true));
        echo "\"></div>
";
        
        $__internal_1fd2f172fc3b73fbbab6673a18f43cb4583860def60b394ae052349769ab318a->leave($__internal_1fd2f172fc3b73fbbab6673a18f43cb4583860def60b394ae052349769ab318a_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/geofield_map/templates/geofield-google-map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/geofield_map/templates/geofield-google-map.html.twig", "/Applications/MAMP/htdocs/activesportshookup/modules/contrib/geofield_map/templates/geofield-google-map.html.twig");
    }
}
