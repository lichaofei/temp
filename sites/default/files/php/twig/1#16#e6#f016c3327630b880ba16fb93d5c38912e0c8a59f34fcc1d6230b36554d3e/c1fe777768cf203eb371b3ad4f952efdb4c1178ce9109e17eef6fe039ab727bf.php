<?php

/* <div class="field-plugin-summary">{{ summary|safe_join("<br />") }}</div> */
class __TwigTemplate_16e6f016c3327630b880ba16fb93d5c38912e0c8a59f34fcc1d6230b36554d3e extends Twig_Template
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
        echo "<div class=\"field-plugin-summary\">";
        echo twig_render_var(twig_drupal_join_filter((isset($context["summary"]) ? $context["summary"] : null), "<br />"));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "<div class=\"field-plugin-summary\">{{ summary|safe_join(\"<br />\") }}</div>";
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
