<?php

/* modules/contrib/profile/templates/profile.html.twig */
class __TwigTemplate_7f00af06f90482623883042264ce1d8555847fc525c06a71807735d5c6336d76 extends Twig_Template
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
        $__internal_5f02968785341d105d74ed12ba313e35e2064090fa7a74e92d9225cd4c0b1e65 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f02968785341d105d74ed12ba313e35e2064090fa7a74e92d9225cd4c0b1e65->enter($__internal_5f02968785341d105d74ed12ba313e35e2064090fa7a74e92d9225cd4c0b1e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/profile/templates/profile.html.twig"));

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

        // line 22
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
</div>
";
        
        $__internal_5f02968785341d105d74ed12ba313e35e2064090fa7a74e92d9225cd4c0b1e65->leave($__internal_5f02968785341d105d74ed12ba313e35e2064090fa7a74e92d9225cd4c0b1e65_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/profile/templates/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 23,  46 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/profile/templates/profile.html.twig", "/Applications/MAMP/htdocs/activesportshookup/modules/contrib/profile/templates/profile.html.twig");
    }
}
