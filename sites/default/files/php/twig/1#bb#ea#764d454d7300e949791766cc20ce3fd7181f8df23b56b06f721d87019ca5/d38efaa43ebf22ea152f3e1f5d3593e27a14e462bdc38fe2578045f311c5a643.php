<?php

/* core/modules/views/templates/views-view-summary-unformatted.html.twig */
class __TwigTemplate_bbea764d454d7300e949791766cc20ce3fd7181f8df23b56b06f721d87019ca5 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            echo "  ";
            echo twig_render_var((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "inline", array())) ? ("<span") : ("<div")));
            echo " class=\"views-summary views-summary-unformatted\">
  ";
            // line 24
            if ($this->getAttribute($context["row"], "separator", array())) {
                // line 25
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "separator", array()), "html", null, true);
            }
            // line 27
            echo "  <a href=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "url", array()), "html", null, true);
            echo "\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "link", array()), "html", null, true);
            echo "</a>
  ";
            // line 28
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "count", array())) {
                // line 29
                echo "    (";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["row"], "count", array()), "html", null, true);
                echo ")
  ";
            }
            // line 31
            echo "  ";
            echo twig_render_var((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "inline", array())) ? ("</span>") : ("</div>")));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-summary-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 31,  44 => 29,  42 => 28,  33 => 27,  30 => 25,  28 => 24,  23 => 23,  19 => 22,);
    }
}
