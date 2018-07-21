<?php

/* themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig */
class __TwigTemplate_f507e736cced9d112e29e00eab8214493f97c2563b4186f3dd7f6c4af5fe93a5 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 5, "for" => 6);
        $filters = array("length" => 22);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('length'),
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
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div id=\"gva-images-carousel\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "slider-gallery-v1"), "method"), "html", null, true));
            echo ">
";
        }
        // line 4
        echo "
   ";
        // line 5
        $context["i"] = 0;
        // line 6
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 8
            echo "      ";
            if (((($context["i"] ?? null) % 5) == 1)) {
                // line 9
                echo "         <div class=\"gallery-large carousel-item\">
            <div class=\"item content\">";
                // line 10
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                echo "</div>
         </div>
      ";
            } else {
                // line 13
                echo "         
         ";
                // line 14
                if (((($context["i"] ?? null) % 5) == 2)) {
                    // line 15
                    echo "            <div class=\"galery-small-wrap\">
         ";
                }
                // line 16
                echo "   
         
            ";
                // line 18
                if ((((($context["i"] ?? null) % 5) == 2) || ((($context["i"] ?? null) % 5) == 4))) {
                    // line 19
                    echo "              <div class=\"gallery-small carousel-item\">
            ";
                }
                // line 21
                echo "               <div class=\"item content gallery-small-item\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                echo "</div>
            ";
                // line 22
                if (((((($context["i"] ?? null) % 5) == 3) || ((($context["i"] ?? null) % 5) == 0)) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    // line 23
                    echo "               </div>
            ";
                }
                // line 24
                echo "   

         ";
                // line 26
                if ((((($context["i"] ?? null) % 5) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                    // line 27
                    echo "            </div>
         ";
                }
                // line 28
                echo "    
            
      ";
            }
            // line 30
            echo " 
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 

";
        // line 33
        if (($context["attributes"] ?? null)) {
            // line 34
            echo "</div>
";
        }
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  134 => 34,  132 => 33,  128 => 31,  121 => 30,  116 => 28,  112 => 27,  110 => 26,  106 => 24,  102 => 23,  100 => 22,  95 => 21,  91 => 19,  89 => 18,  85 => 16,  81 => 15,  79 => 14,  76 => 13,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig", "/var/www/d8zureview/docroot/themes/gavias_tico/templates/views/gallery/views-view-gvaowl--gallery-carousel.html.twig");
    }
}
