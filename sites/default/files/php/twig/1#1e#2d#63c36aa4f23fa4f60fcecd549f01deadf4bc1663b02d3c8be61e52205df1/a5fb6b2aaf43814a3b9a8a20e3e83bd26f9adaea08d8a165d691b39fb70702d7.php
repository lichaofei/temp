<?php

/* {{ items | safe_join(separator) }} */
class __TwigTemplate_1e2d63c36aa4f23fa4f60fcecd549f01deadf4bc1663b02d3c8be61e52205df1 extends Twig_Template
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
        echo twig_render_var(twig_drupal_join_filter((isset($context["items"]) ? $context["items"] : null), (isset($context["separator"]) ? $context["separator"] : null)));
    }

    public function getTemplateName()
    {
        return "{{ items | safe_join(separator) }}";
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
