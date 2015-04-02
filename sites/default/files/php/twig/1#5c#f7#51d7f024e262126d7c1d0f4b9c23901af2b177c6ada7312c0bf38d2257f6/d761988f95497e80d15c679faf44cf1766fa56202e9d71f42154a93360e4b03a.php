<?php

/* <div class="block-region demo-block">{{ region_name }}</div> */
class __TwigTemplate_5cf751d7f024e262126d7c1d0f4b9c23901af2b177c6ada7312c0bf38d2257f6 extends Twig_Template
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
        // line 1
        echo "<div class=\"block-region demo-block\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : null), "html", null, true);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "<div class=\"block-region demo-block\">{{ region_name }}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
