<?php

/* core/themes/seven/templates/status-report-grouped.html.twig */
class __TwigTemplate_491b866584d89fa2db92156822d67418d183a5e80839aa87bcce7d29e936a8d2 extends Twig_Template
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
        $__internal_5689de8730add2cb7f605d56a8b9a8e8ff0a4ebf6af61d1af4af0ce18bb79435 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5689de8730add2cb7f605d56a8b9a8e8ff0a4ebf6af61d1af4af0ce18bb79435->enter($__internal_5689de8730add2cb7f605d56a8b9a8e8ff0a4ebf6af61d1af4af0ce18bb79435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/status-report-grouped.html.twig"));

        $tags = array("for" => 23, "set" => 29, "if" => 35);
        $filters = array();
        $functions = array("attach_library" => 19, "create_attribute" => 34);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array(),
                array('attach_library', 'create_attribute')
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

        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("core/drupal.collapse"), "html", null, true));
        echo "
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("seven/drupal.responsive-detail"), "html", null, true));
        echo "

<div class=\"system-status-report\">
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            echo "    <div class=\"system-status-report__requirements-group\">
      <h3 id=\"";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["group"], "type", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true));
            echo "</h3>
      ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 27
                echo "        <details class=\"system-status-report__entry system-status-report__entry--";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["group"], "type", array()), "html", null, true));
                echo " color-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["group"], "type", array()), "html", null, true));
                echo "\">
          ";
                // line 29
                $context["summary_classes"] = array(0 => "system-status-report__status-title", 1 => ((twig_in_filter($this->getAttribute(                // line 31
$context["group"], "type", array()), array(0 => "warning", 1 => "error"))) ? (("system-status-report__status-icon system-status-report__status-icon--" . $this->getAttribute($context["group"], "type", array()))) : ("")));
                // line 34
                echo "          <summary";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(array("class" => ($context["summary_classes"] ?? null))), "html", null, true));
                echo " role=\"button\">
            ";
                // line 35
                if ($this->getAttribute($context["requirement"], "severity_title", array())) {
                    // line 36
                    echo "              <span class=\"visually-hidden\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "severity_title", array()), "html", null, true));
                    echo "</span>
            ";
                }
                // line 38
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "title", array()), "html", null, true));
                echo "
          </summary>
          <div class=\"system-status-report__entry__value\">
            ";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "value", array()), "html", null, true));
                echo "
            ";
                // line 42
                if ($this->getAttribute($context["requirement"], "description", array())) {
                    // line 43
                    echo "              <div class=\"description\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["requirement"], "description", array()), "html", null, true));
                    echo "</div>
            ";
                }
                // line 45
                echo "          </div>
        </details>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>
";
        
        $__internal_5689de8730add2cb7f605d56a8b9a8e8ff0a4ebf6af61d1af4af0ce18bb79435->leave($__internal_5689de8730add2cb7f605d56a8b9a8e8ff0a4ebf6af61d1af4af0ce18bb79435_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/status-report-grouped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 50,  123 => 48,  115 => 45,  109 => 43,  107 => 42,  103 => 41,  96 => 38,  90 => 36,  88 => 35,  83 => 34,  81 => 31,  80 => 29,  73 => 27,  69 => 26,  63 => 25,  60 => 24,  56 => 23,  50 => 20,  46 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/seven/templates/status-report-grouped.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/themes/seven/templates/status-report-grouped.html.twig");
    }
}
