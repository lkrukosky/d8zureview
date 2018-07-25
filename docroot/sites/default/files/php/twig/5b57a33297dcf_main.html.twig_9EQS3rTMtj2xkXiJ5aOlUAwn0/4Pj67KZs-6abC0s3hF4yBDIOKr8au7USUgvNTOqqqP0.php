<?php

/* themes/gavias_tico/templates/page/main.html.twig */
class __TwigTemplate_89279ad44d84ae35d93ffdb0c85bafb2f03177495d7b975b65ba57119ff27c30 extends Twig_Template
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
        $tags = array("set" => 4, "if" => 5);
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

        // line 1
        echo "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 4
        $context["cl_main"] = "col-md-12 col-xs-12";
        // line 5
        echo "\t\t";
        if (($this->getAttribute(($context["page"] ?? null), "sidebar_right", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_left", array()))) {
            echo "\t
\t\t\t";
            // line 6
            $context["cl_main"] = "col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ";
            // line 7
            echo "\t\t";
        } elseif (($this->getAttribute(($context["page"] ?? null), "sidebar_right", array()) || $this->getAttribute(($context["page"] ?? null), "sidebar_left", array()))) {
            echo "\t
\t\t\t";
            // line 8
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", array())) {
                // line 9
                echo "\t\t\t \t";
                $context["cl_main"] = "col-xs-12 col-md-9 sb-r ";
                // line 10
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t";
            // line 11
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", array())) {
                // line 12
                echo "\t\t\t\t";
                $context["cl_main"] = "col-xs-12 col-md-9 col-md-push-3 sb-l ";
                // line 13
                echo "\t\t\t";
            }
            echo "\t\t\t\t
      ";
        }
        // line 14
        echo " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["cl_main"] ?? null), "html", null, true));
        echo "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 21
            echo "\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "
\t\t\t\t";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 27
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 33
            echo "\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 37
        echo "\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", array())) {
            // line 43
            echo "\t\t\t
\t\t\t";
            // line 44
            $context["cl_left"] = "col-md-3 col-md-pull-9 col-sm-12 col-xs-12";
            // line 45
            echo "\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", array())) {
                // line 46
                echo "\t\t\t \t";
                $context["cl_left"] = "col-md-3 col-md-pull-6 col-sm-12 col-xs-12";
                // line 47
                echo "\t\t\t";
            }
            echo " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["cl_left"] ?? null), "html", null, true));
            echo " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_left", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 55
        echo "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 58
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", array())) {
            // line 59
            echo "\t\t\t
\t\t\t";
            // line 60
            $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
            // line 61
            echo "\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", array())) {
                // line 62
                echo "\t\t\t\t";
                $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
                // line 63
                echo "\t\t\t";
            }
            echo "\t 

\t\t\t<div class=\"";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["cl_right"] ?? null), "html", null, true));
            echo " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_right", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 71
        echo "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/page/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 71,  200 => 67,  195 => 65,  189 => 63,  186 => 62,  183 => 61,  181 => 60,  178 => 59,  176 => 58,  171 => 55,  164 => 51,  159 => 49,  153 => 47,  150 => 46,  147 => 45,  145 => 44,  142 => 43,  140 => 42,  133 => 37,  127 => 34,  124 => 33,  122 => 32,  119 => 31,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  99 => 22,  96 => 21,  94 => 20,  87 => 16,  83 => 14,  77 => 13,  74 => 12,  72 => 11,  67 => 10,  64 => 9,  62 => 8,  57 => 7,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_tico/templates/page/main.html.twig", "/var/www/d8zureview/docroot/themes/gavias_tico/templates/page/main.html.twig");
    }
}
