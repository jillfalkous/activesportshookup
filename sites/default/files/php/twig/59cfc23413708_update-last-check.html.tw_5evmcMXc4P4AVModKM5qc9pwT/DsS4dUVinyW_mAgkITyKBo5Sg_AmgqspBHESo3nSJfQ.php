<?php

/* core/themes/stable/templates/admin/update-last-check.html.twig */
class __TwigTemplate_a03b8667bcb197ff7554462f01d0e8fc5fb63d7cab4b31c668fa891f02b44534 extends Twig_Template
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
        $__internal_5929b9cc7fec10f669b122b825f17c916606d01dfef86c51283fad7247603269 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5929b9cc7fec10f669b122b825f17c916606d01dfef86c51283fad7247603269->enter($__internal_5929b9cc7fec10f669b122b825f17c916606d01dfef86c51283fad7247603269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/update-last-check.html.twig"));

        $tags = array("if" => 15);
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        echo "<p>
  ";
        // line 15
        if (($context["last"] ?? null)) {
            // line 16
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last checked: @time ago", array("@time" => ($context["time"] ?? null)))));
            echo "
  ";
        } else {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last checked: never")));
            echo "
  ";
        }
        // line 20
        echo "  (";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
        echo ")
</p>
";
        
        $__internal_5929b9cc7fec10f669b122b825f17c916606d01dfef86c51283fad7247603269->leave($__internal_5929b9cc7fec10f669b122b825f17c916606d01dfef86c51283fad7247603269_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/update-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  57 => 18,  51 => 16,  49 => 15,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/update-last-check.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/themes/stable/templates/admin/update-last-check.html.twig");
    }
}
