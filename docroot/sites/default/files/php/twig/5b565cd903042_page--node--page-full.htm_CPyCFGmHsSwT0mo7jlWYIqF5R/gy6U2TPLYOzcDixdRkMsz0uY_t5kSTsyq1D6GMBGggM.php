<?php

/* themes/gavias_tico/templates/page/page--node--page-full.html.twig */
class __TwigTemplate_119ba74f411ac3f763573d555647a24aafc9c93b99f19418362374b4fe414fc2 extends Twig_Template
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
        $tags = array("include" => 8, "if" => 11);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
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

        // line 7
        echo "<div class=\"body-page\">
\t";
        // line 8
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_tico/templates/page/page--node--page-full.html.twig", 8)->display($context);
        // line 9
        echo "   ";
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_tico/templates/page/page--node--page-full.html.twig", 9)->display($context);
        // line 10
        echo "\t
\t";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", array())) {
            // line 12
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 16
        echo "
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", array())) {
            // line 21
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 24
        echo "\t

\t\t";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 27
            echo "\t\t\t<div class=\"help show\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "
\t\t";
        // line 37
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", array())) {
            // line 38
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_before_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 42
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 44
        if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
            // line 45
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 55
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container-full\">
\t\t\t\t";
        // line 60
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_tico/templates/page/page--node--page-full.html.twig", 60)->display($context);
        // line 61
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 65
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 71
        echo "
\t\t";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 73
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 81
        echo "\t\t
\t\t";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", array())) {
            // line 83
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 87
        echo "
\t</div>

\t";
        // line 90
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_tico/templates/page/page--node--page-full.html.twig", 90)->display($context);
        // line 91
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/page/page--node--page-full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 91,  201 => 90,  196 => 87,  190 => 84,  187 => 83,  185 => 82,  182 => 81,  174 => 76,  169 => 73,  167 => 72,  164 => 71,  157 => 67,  153 => 65,  151 => 64,  146 => 61,  144 => 60,  137 => 55,  128 => 49,  122 => 45,  120 => 44,  116 => 42,  110 => 39,  107 => 38,  105 => 37,  102 => 36,  94 => 31,  88 => 27,  86 => 26,  82 => 24,  76 => 22,  73 => 21,  71 => 20,  65 => 16,  59 => 13,  56 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_tico/templates/page/page--node--page-full.html.twig", "/var/www/d8zureview/docroot/themes/gavias_tico/templates/page/page--node--page-full.html.twig");
    }
}
