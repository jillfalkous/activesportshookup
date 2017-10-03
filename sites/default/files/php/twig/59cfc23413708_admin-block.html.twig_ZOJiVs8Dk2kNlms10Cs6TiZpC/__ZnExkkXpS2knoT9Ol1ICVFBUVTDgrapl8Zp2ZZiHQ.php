<?php

/* core/themes/stable/templates/admin/admin-block.html.twig */
class __TwigTemplate_a437d6ecc137ffd2ba3709d123667d228d895929eaa0a3fdb12760720cf4b6f2 extends Twig_Template
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
        $__internal_382cf5f8b64f3a65b7e65790234f111a03f5f63bc0819ef9299b9dd59c4712ea = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_382cf5f8b64f3a65b7e65790234f111a03f5f63bc0819ef9299b9dd59c4712ea->enter($__internal_382cf5f8b64f3a65b7e65790234f111a03f5f63bc0819ef9299b9dd59c4712ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/admin-block.html.twig"));

        $tags = array("if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 15
        echo "<div class=\"panel\">
  ";
        // line 16
        if ($this->getAttribute(($context["block"] ?? null), "title", array())) {
            // line 17
            echo "    <h3 class=\"panel__title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "title", array()), "html", null, true));
            echo "</h3>
  ";
        }
        // line 19
        echo "  ";
        if ($this->getAttribute(($context["block"] ?? null), "content", array())) {
            // line 20
            echo "    <div class=\"panel__content\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "content", array()), "html", null, true));
            echo "</div>
  ";
        } elseif ($this->getAttribute(        // line 21
($context["block"] ?? null), "description", array())) {
            // line 22
            echo "    <div class=\"panel__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "description", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 24
        echo "</div>
";
        
        $__internal_382cf5f8b64f3a65b7e65790234f111a03f5f63bc0819ef9299b9dd59c4712ea->leave($__internal_382cf5f8b64f3a65b7e65790234f111a03f5f63bc0819ef9299b9dd59c4712ea_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  67 => 22,  65 => 21,  60 => 20,  57 => 19,  51 => 17,  49 => 16,  46 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/admin-block.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/themes/stable/templates/admin/admin-block.html.twig");
    }
}
