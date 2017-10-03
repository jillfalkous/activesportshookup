<?php

/* core/themes/seven/templates/status-report-general-info.html.twig */
class __TwigTemplate_14f2fff9762e009d5c628b57d05380cf1bd4cbec9673c50afaa294b3df226af7 extends Twig_Template
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
        $__internal_82840bf732aa4f3373cddc5c4a095ffa49da51537676a93fe1820dd3b512ad40 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_82840bf732aa4f3373cddc5c4a095ffa49da51537676a93fe1820dd3b512ad40->enter($__internal_82840bf732aa4f3373cddc5c4a095ffa49da51537676a93fe1820dd3b512ad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/status-report-general-info.html.twig"));

        $tags = array("if" => 40);
        $filters = array("t" => 33);
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

        // line 32
        echo "<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("General System Information")));
        echo "</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--d8\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal Version")));
        echo "</h3>
        ";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["drupal"] ?? null), "value", array()), "html", null, true));
        echo "
        ";
        // line 40
        if ($this->getAttribute(($context["drupal"] ?? null), "description", array())) {
            // line 41
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["drupal"] ?? null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 43
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last Cron Run")));
        echo "</h3>
        ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cron"] ?? null), "value", array()), "html", null, true));
        echo "
        ";
        // line 50
        if ($this->getAttribute(($context["cron"] ?? null), "run_cron", array())) {
            // line 51
            echo "          <div class=\"system-status-general-info__run-cron\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cron"] ?? null), "run_cron", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 53
        echo "        ";
        if ($this->getAttribute(($context["cron"] ?? null), "description", array())) {
            // line 54
            echo "          <div class=\"system-status-general-info__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["cron"] ?? null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 56
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Web Server")));
        echo "</h3>
        ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["webserver"] ?? null), "value", array()), "html", null, true));
        echo "
        ";
        // line 63
        if ($this->getAttribute(($context["webserver"] ?? null), "description", array())) {
            // line 64
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["webserver"] ?? null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 66
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP")));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php"] ?? null), "value", array()), "html", null, true));
        echo "
        ";
        // line 73
        if ($this->getAttribute(($context["php"] ?? null), "description", array())) {
            // line 74
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php"] ?? null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 76
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Memory limit")));
        echo "</h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php_memory_limit"] ?? null), "value", array()), "html", null, true));
        echo "
        ";
        // line 78
        if ($this->getAttribute(($context["php_memory_limit"] ?? null), "description", array())) {
            // line 79
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["php_memory_limit"] ?? null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 81
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Database")));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system_version"] ?? null), "value", array()), "html", null, true));
        echo "
        ";
        // line 88
        if ($this->getAttribute(($context["database_system_version"] ?? null), "description", array())) {
            // line 89
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system_version"] ?? null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 91
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("System")));
        echo "</h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system"] ?? null), "value", array()), "html", null, true));
        echo "
        ";
        // line 93
        if ($this->getAttribute(($context["database_system"] ?? null), "description", array())) {
            // line 94
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["database_system"] ?? null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 96
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_82840bf732aa4f3373cddc5c4a095ffa49da51537676a93fe1820dd3b512ad40->leave($__internal_82840bf732aa4f3373cddc5c4a095ffa49da51537676a93fe1820dd3b512ad40_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 96,  206 => 94,  204 => 93,  198 => 92,  195 => 91,  189 => 89,  187 => 88,  181 => 87,  177 => 86,  170 => 81,  164 => 79,  162 => 78,  156 => 77,  153 => 76,  147 => 74,  145 => 73,  139 => 72,  135 => 71,  128 => 66,  122 => 64,  120 => 63,  116 => 62,  112 => 61,  105 => 56,  99 => 54,  96 => 53,  90 => 51,  88 => 50,  84 => 49,  80 => 48,  73 => 43,  67 => 41,  65 => 40,  61 => 39,  57 => 38,  49 => 33,  46 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/seven/templates/status-report-general-info.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/themes/seven/templates/status-report-general-info.html.twig");
    }
}
