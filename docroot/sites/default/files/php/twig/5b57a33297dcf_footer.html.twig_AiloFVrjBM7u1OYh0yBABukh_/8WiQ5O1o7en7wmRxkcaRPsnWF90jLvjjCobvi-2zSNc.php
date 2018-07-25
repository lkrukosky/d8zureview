<?php

/* themes/gavias_tico/templates/page/footer.html.twig */
class __TwigTemplate_4cfd9da467084cde453023b590666178d858936649a0f351c24d64796a60f148 extends Twig_Template
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
        $tags = array("if" => 3);
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

        // line 1
        echo "<footer id=\"footer\" class=\"footer\">
  
  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "before_footer", array())) {
            // line 4
            echo "   <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <div class=\"before_footer area\">
                ";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_footer", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>     
      </div>   
    </div> 
   ";
        }
        // line 16
        echo "   
   <div class=\"footer-center\">
      <div class=\"container\">      
         <div class=\"row\">
            ";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
            // line 21
            echo "              <div class=\"footer-first col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
              </div> 
            ";
        }
        // line 25
        echo "
            ";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
            // line 27
            echo "             <div class=\"footer-second col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
              </div> 
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
            // line 33
            echo "              <div class=\"footer-third col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
              </div> 
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "footer_four", array())) {
            // line 39
            echo "               <div class=\"footer-four col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_four_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_four_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                ";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_four", array()), "html", null, true));
            echo "
              </div> 
            ";
        }
        // line 43
        echo "         </div>   
      </div>
  </div>   

  ";
        // line 47
        if ($this->getAttribute(($context["page"] ?? null), "after_footer", array())) {
            // line 48
            echo "    <div class=\"after-footer\">
      <div class=\"container\">
        <div class=\"after-footer-inner\">
            ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_footer", array()), "html", null, true));
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "copyright", array())) {
            // line 58
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "copyright", array()), "html", null, true));
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 66
        echo "
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_tico/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  172 => 61,  167 => 58,  165 => 57,  162 => 56,  154 => 51,  149 => 48,  147 => 47,  141 => 43,  135 => 40,  128 => 39,  126 => 38,  123 => 37,  117 => 34,  110 => 33,  108 => 32,  105 => 31,  99 => 28,  92 => 27,  90 => 26,  87 => 25,  81 => 22,  74 => 21,  72 => 20,  66 => 16,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_tico/templates/page/footer.html.twig", "/var/www/d8zureview/docroot/themes/gavias_tico/templates/page/footer.html.twig");
    }
}
