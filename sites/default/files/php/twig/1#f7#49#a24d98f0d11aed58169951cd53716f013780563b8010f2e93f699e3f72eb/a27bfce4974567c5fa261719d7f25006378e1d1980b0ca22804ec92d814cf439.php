<?php

/* core/modules/filter/templates/text-format-wrapper.html.twig */
class __TwigTemplate_f749a24d98f0d11aed58169951cd53716f013780563b8010f2e93f699e3f72eb extends Twig_Template
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
        // line 18
        echo "<div class=\"text-format-wrapper form-item\">
  ";
        // line 19
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
  ";
        // line 20
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 21
            echo "    ";
            // line 22
            $context["classes"] = array(0 => (((isset($context["aria_description"]) ? $context["aria_description"] : null)) ? ("description") : ("")));
            // line 26
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 28,  32 => 26,  30 => 22,  28 => 21,  26 => 20,  22 => 19,  19 => 18,);
    }
}
