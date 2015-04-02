<?php

/* core/themes/classy/templates/file-widget-multiple.html.twig */
class __TwigTemplate_e4ba725a9083800cd40684e2682b1e327f53106a5160435427d41bea16a16c86 extends Twig_Template
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
        // line 15
        echo twig_drupal_escape_filter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true);
        echo "
";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/file-widget-multiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 16,  19 => 15,);
    }
}
