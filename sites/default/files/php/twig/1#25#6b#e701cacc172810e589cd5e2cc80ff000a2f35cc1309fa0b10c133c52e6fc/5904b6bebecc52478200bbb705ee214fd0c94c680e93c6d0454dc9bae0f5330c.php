<?php

/* core/modules/user/templates/username.html.twig */
class __TwigTemplate_256be701cacc172810e589cd5e2cc80ff000a2f35cc1309fa0b10c133c52e6fc extends Twig_Template
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
        // line 21
        if ((isset($context["link_path"]) ? $context["link_path"] : null)) {
            // line 22
            echo "<a";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo twig_drupal_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</a>";
        } else {
            // line 24
            echo "<span";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo twig_drupal_escape_filter($this->env, (isset($context["extra"]) ? $context["extra"] : null), "html", null, true);
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/user/templates/username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 24,  21 => 22,  19 => 21,);
    }
}
