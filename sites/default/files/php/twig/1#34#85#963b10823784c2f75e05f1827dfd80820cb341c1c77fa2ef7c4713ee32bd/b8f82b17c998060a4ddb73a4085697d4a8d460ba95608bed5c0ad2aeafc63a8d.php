<?php

/* core/modules/image/templates/image-formatter.html.twig */
class __TwigTemplate_3485963b10823784c2f75e05f1827dfd80820cb341c1c77fa2ef7c4713ee32bd extends Twig_Template
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
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 17
            echo "  <a href=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "</a>
";
        } else {
            // line 19
            echo "  ";
            echo twig_drupal_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 19,  21 => 17,  19 => 16,);
    }
}
