<?php

/* core/modules/views/templates/views-view-summary.html.twig */
class __TwigTemplate_95fce39461df4fc1f864c856afa786c4d18eeb2ace6ccdc9e3e044f93e5574b7 extends Twig_Template
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
        // line 22
        echo "<div class=\"item-list\">
  <ul class=\"views-summary\">
  ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "    <li><a href=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "url", array()), "html", null, true);
            echo "\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "link", array()), "html", null, true);
            echo "</a>
      ";
            // line 26
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "count", array())) {
                // line 27
                echo "        (";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "count", array()), "html", null, true);
                echo ")
      ";
            }
            // line 29
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  44 => 29,  38 => 27,  36 => 26,  27 => 25,  23 => 24,  19 => 22,);
    }
}
