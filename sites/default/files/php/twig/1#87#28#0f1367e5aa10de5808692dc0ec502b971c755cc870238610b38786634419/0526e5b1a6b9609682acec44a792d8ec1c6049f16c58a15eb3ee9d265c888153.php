<?php

/* core/modules/system/templates/tablesort-indicator.html.twig */
class __TwigTemplate_87280f1367e5aa10de5808692dc0ec502b971c755cc870238610b38786634419 extends Twig_Template
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
        // line 14
        if (((isset($context["style"]) ? $context["style"] : null) == "asc")) {
            // line 15
            echo "<img src=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["arrow_asc"]) ? $context["arrow_asc"] : null), "html", null, true);
            echo "\" width=\"13\" height=\"13\" alt=\"";
            echo twig_render_var(t("sort ascending"));
            echo "\" title=\"";
            echo twig_render_var(t("sort ascending"));
            echo "\" />
";
        } else {
            // line 17
            echo "<img src=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["arrow_desc"]) ? $context["arrow_desc"] : null), "html", null, true);
            echo "\" width=\"13\" height=\"13\" alt=\"";
            echo twig_render_var(t("sort descending"));
            echo "\" title=\"";
            echo twig_render_var(t("sort descending"));
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 17,  21 => 15,  19 => 14,);
    }
}
