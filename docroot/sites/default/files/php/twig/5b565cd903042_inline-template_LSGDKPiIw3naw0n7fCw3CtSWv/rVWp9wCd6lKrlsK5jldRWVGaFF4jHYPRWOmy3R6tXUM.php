<?php

/* {# inline_template_start #}<div class="post-block">
      <div class="post-image">
            {{ field_image }}
      </div>
      <div class="post-content">
            <div class="post-title"> {{ title }} </div>            
            <div class="post-meta">
		   <span class="post-categories">{{ field_post_category }} </span> / 
                   <span class="post-created">{{ created }} </span> / 
                  <span class="post-comment">{{ comment_count }} </span>
	     </div>
       </div>
</div> */
class __TwigTemplate_0e2f481c83c6530e85b315b7011e5c1af973cfccd2a45fc9deee3561c1496a25 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"post-block\">
      <div class=\"post-image\">
            ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
      </div>
      <div class=\"post-content\">
            <div class=\"post-title\"> ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " </div>            
            <div class=\"post-meta\">
\t\t   <span class=\"post-categories\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_post_category"] ?? null), "html", null, true));
        echo " </span> / 
                   <span class=\"post-created\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo " </span> / 
                  <span class=\"post-comment\">";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["comment_count"] ?? null), "html", null, true));
        echo " </span>
\t     </div>
       </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content\">
            <div class=\"post-title\"> {{ title }} </div>            
            <div class=\"post-meta\">
\t\t   <span class=\"post-categories\">{{ field_post_category }} </span> / 
                   <span class=\"post-created\">{{ created }} </span> / 
                  <span class=\"post-comment\">{{ comment_count }} </span>
\t     </div>
       </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  74 => 9,  70 => 8,  65 => 6,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content\">
            <div class=\"post-title\"> {{ title }} </div>            
            <div class=\"post-meta\">
\t\t   <span class=\"post-categories\">{{ field_post_category }} </span> / 
                   <span class=\"post-created\">{{ created }} </span> / 
                  <span class=\"post-comment\">{{ comment_count }} </span>
\t     </div>
       </div>
</div>", "");
    }
}
