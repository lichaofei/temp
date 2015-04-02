<?php

/* core/modules/views_ui/templates/views-ui-style-plugin-table.html.twig */
class __TwigTemplate_eb2d48db8890df3d3fb21ce79dae61035e7c1e2188832be6fab1d341fc4306f2 extends Twig_Template
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
        // line 16
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description_markup", array()), "html", null, true);
        echo "
";
        // line 17
        echo twig_drupal_escape_filter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true);
        echo "
";
        // line 18
        echo twig_drupal_escape_filter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-style-plugin-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 18,  23 => 17,  19 => 16,);
    }
}
