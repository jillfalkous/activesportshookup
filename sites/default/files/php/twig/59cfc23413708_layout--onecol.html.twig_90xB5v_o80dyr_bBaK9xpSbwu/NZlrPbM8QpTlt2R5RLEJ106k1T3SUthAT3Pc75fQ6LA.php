<?php

/* core/modules/layout_discovery/layouts/onecol/layout--onecol.html.twig */
class __TwigTemplate_75846fa11f94af8046f453885dec976c11adc082c7bddcd5827312040b40f144 extends Twig_Template
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
        $__internal_8420294f4f2a0fabf8deef15bdce89884e663cfd838f0ec6945b21f2fdd41dc5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8420294f4f2a0fabf8deef15bdce89884e663cfd838f0ec6945b21f2fdd41dc5->enter($__internal_8420294f4f2a0fabf8deef15bdce89884e663cfd838f0ec6945b21f2fdd41dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/layout_discovery/layouts/onecol/layout--onecol.html.twig"));

        $tags = array("set" => 14, "if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 14
        $context["classes"] = array(0 => "layout", 1 => "layout--onecol");
        // line 19
        if (($context["content"] ?? null)) {
            // line 20
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    <div class=\"layout__region layout__region--content\">
      ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        }
        
        $__internal_8420294f4f2a0fabf8deef15bdce89884e663cfd838f0ec6945b21f2fdd41dc5->leave($__internal_8420294f4f2a0fabf8deef15bdce89884e663cfd838f0ec6945b21f2fdd41dc5_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/onecol/layout--onecol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  50 => 20,  48 => 19,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/layout_discovery/layouts/onecol/layout--onecol.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/modules/layout_discovery/layouts/onecol/layout--onecol.html.twig");
    }
}
