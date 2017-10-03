<?php

/* core/themes/classy/templates/misc/status-messages.html.twig */
class __TwigTemplate_59accd533e70f4d1c54f318bf02ba4ba1f2365cc34283e268db54ff5c097af40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ab2b82894672ef97006be53a0334a52cede8bec6f35d7eed2e2a02ae4791805 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab2b82894672ef97006be53a0334a52cede8bec6f35d7eed2e2a02ae4791805->enter($__internal_3ab2b82894672ef97006be53a0334a52cede8bec6f35d7eed2e2a02ae4791805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/misc/status-messages.html.twig"));

        $tags = array("block" => 25, "for" => 26, "set" => 28, "if" => 34);
        $filters = array("without" => 33, "length" => 40, "first" => 47);
        $functions = array("attach_library" => 24);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'for', 'set', 'if'),
                array('without', 'length', 'first'),
                array('attach_library')
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

        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/messages"), "html", null, true));
        echo "
";
        // line 25
        $this->displayBlock('messages', $context, $blocks);
        
        $__internal_3ab2b82894672ef97006be53a0334a52cede8bec6f35d7eed2e2a02ae4791805->leave($__internal_3ab2b82894672ef97006be53a0334a52cede8bec6f35d7eed2e2a02ae4791805_prof);

    }

    public function block_messages($context, array $blocks = array())
    {
        $__internal_e952b189358936b3ef48ab99ee419e5bb1c0cf14b97003f868a4930c6cbbe501 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e952b189358936b3ef48ab99ee419e5bb1c0cf14b97003f868a4930c6cbbe501->enter($__internal_e952b189358936b3ef48ab99ee419e5bb1c0cf14b97003f868a4930c6cbbe501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            // line 28
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 30
$context["type"]));
            // line 33
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role", "aria-label"), "html", null, true));
            echo ">
    ";
            // line 34
            if (($context["type"] == "error")) {
                // line 35
                echo "      <div role=\"alert\">
    ";
            }
            // line 37
            echo "      ";
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")) {
                // line 38
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 40
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 41
                echo "        <ul class=\"messages__list\">
          ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 43
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "        </ul>
      ";
            } else {
                // line 47
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
      ";
            }
            // line 49
            echo "    ";
            if (($context["type"] == "error")) {
                // line 50
                echo "      </div>
    ";
            }
            // line 52
            echo "  </div>
  ";
            // line 54
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e952b189358936b3ef48ab99ee419e5bb1c0cf14b97003f868a4930c6cbbe501->leave($__internal_e952b189358936b3ef48ab99ee419e5bb1c0cf14b97003f868a4930c6cbbe501_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 54,  130 => 52,  126 => 50,  123 => 49,  117 => 47,  113 => 45,  104 => 43,  100 => 42,  97 => 41,  94 => 40,  88 => 38,  85 => 37,  81 => 35,  79 => 34,  72 => 33,  70 => 30,  69 => 28,  67 => 27,  63 => 26,  51 => 25,  47 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/misc/status-messages.html.twig", "/Applications/MAMP/htdocs/activesportshookup/core/themes/classy/templates/misc/status-messages.html.twig");
    }
}
