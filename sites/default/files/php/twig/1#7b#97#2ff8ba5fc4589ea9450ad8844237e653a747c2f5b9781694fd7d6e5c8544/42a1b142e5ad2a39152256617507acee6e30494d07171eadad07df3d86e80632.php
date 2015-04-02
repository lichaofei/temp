<?php

/* core/modules/views/templates/views-more.html.twig */
class __TwigTemplate_7b972ff8ba5fc4589ea9450ad8844237e653a747c2f5b9781694fd7d6e5c8544 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["more_url"]) ? $context["more_url"] : null), "html", null, true);
        echo "\" class=\"more-link\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["link_text"]) ? $context["link_text"] : null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 14,);
    }
}
