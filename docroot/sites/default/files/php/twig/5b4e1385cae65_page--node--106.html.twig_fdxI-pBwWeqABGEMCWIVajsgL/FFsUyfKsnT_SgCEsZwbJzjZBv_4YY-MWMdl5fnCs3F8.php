<?php

/* themes/gavias_tico/templates/page/page--node--106.html.twig */
class __TwigTemplate_a1a111c8dd6f8c7d43f0bd85cc2099656a7d3470e932a51a14948028a05e0ecb extends Twig_Template
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
        $tags = array("include" => 9, "if" => 15);
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
        echo "
<div class=\"body-page\">
\t";
        // line 9
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_tico/templates/page/page--node--106.html.twig", 9)->display($context);
        // line 10
        echo "   ";
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_tico/templates/page/page--node--106.html.twig", 10)->display($context);
        // line 11
        echo "
\t<div role=\"main\" class=\"main main-page\">
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"page-notfound\">
\t\t\t\t";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 16
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 24
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_tico/templates/page/page--node--106.html.twig", 24)->display($context);
        // line 25
        echo "\t
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/page/page--node--106.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  75 => 24,  69 => 20,  63 => 17,  60 => 16,  58 => 15,  52 => 11,  49 => 10,  47 => 9,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_tico/templates/page/page--node--106.html.twig", "/var/www/d8zureview/docroot/themes/gavias_tico/templates/page/page--node--106.html.twig");
    }
}
