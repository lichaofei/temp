<?php

/* themes/zircon-8.x-1.x-dev/zircon/templates/page.html.twig */
class __TwigTemplate_928dc263078c4cfdbcd643f96797e78043aafb7ee332c1b260575212410b01d9 extends Twig_Template
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
        echo "<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" role=\"header\">
  <div class=\"container\">
    ";
        // line 5
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 6
            echo "      <a id=\"logo\" href=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 7
            echo twig_drupal_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 12
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 15
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 16
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 17
                echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 20
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 21
                echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 26
                echo "          <div class=\"site-slogan\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "</div>
        ";
            }
            // line 28
            echo "      </div>
   ";
        }
        // line 30
        echo "
    ";
        // line 31
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
  </div>
</header>

  ";
        // line 35
        if (((isset($context["main_menu"]) ? $context["main_menu"] : null) || (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null))) {
            // line 36
            echo "    <nav id=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 38
            echo twig_drupal_escape_filter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true);
            echo "
        ";
            // line 39
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true);
            echo "
      </div>
    </nav>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 45
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">
      <div class=\"container-fluid\">
\t  \t<div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          </div>
\t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
            <div class=\"container\">
              ";
            // line 57
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true);
            echo "\t\t\t\t\t\t
            </div>
          </div>
        
      </div>
    </nav>
  ";
        }
        // line 64
        echo "
  ";
        // line 65
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 66
            echo "    <section id=\"slideshow\">
      <div class=\"container\">
        ";
            // line 68
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 74
            echo "    <section id=\"featured\">
      <div class=\"container\">
        ";
            // line 76
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 82
            echo "    <section id=\"messages\">
      <div class=\"container\">
        ";
            // line 84
            echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 90
            echo "    <section id=\"help\">
      <div class=\"container\">
        ";
            // line 92
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 95
        echo "    

  <section id=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
\t\t";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 103
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 104
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 107
        echo "\t\t
\t<div class=\"content col-lg-";
        // line 108
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true);
        echo " col-md-";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 109
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

          ";
        // line 111
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
          ";
        // line 112
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 113
            echo "            <h1>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
          ";
        }
        // line 115
        echo "          ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

          ";
        // line 117
        echo twig_drupal_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
        echo "

          ";
        // line 119
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 120
            echo "            <nav class=\"action-links\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</nav>
          ";
        }
        // line 122
        echo "
          ";
        // line 123
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "

          <!--";
        // line 125
        echo twig_drupal_escape_filter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
        echo "-->
        </div>

        ";
        // line 128
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 129
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 130
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 133
        echo "      </div>
    </div>
  </section>

  ";
        // line 137
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array())) {
            // line 138
            echo "    <section id=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 142
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array()), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 148
        echo "    
  ";
        // line 149
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()))) {
            // line 150
            echo "    <section id=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 154
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 157
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 160
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 163
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 169
        echo "  
  ";
        // line 170
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 171
            echo "    <section id=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 173
            echo twig_drupal_escape_filter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 177
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>          
  
  ";
        // line 179
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 180
            echo "    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 182
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 186
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zircon-8.x-1.x-dev/zircon/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 186,  392 => 182,  388 => 180,  386 => 179,  382 => 177,  375 => 173,  371 => 171,  369 => 170,  366 => 169,  357 => 163,  351 => 160,  345 => 157,  339 => 154,  333 => 150,  331 => 149,  328 => 148,  319 => 142,  313 => 138,  311 => 137,  305 => 133,  299 => 130,  296 => 129,  294 => 128,  288 => 125,  283 => 123,  280 => 122,  274 => 120,  272 => 119,  267 => 117,  261 => 115,  255 => 113,  253 => 112,  249 => 111,  244 => 109,  238 => 108,  235 => 107,  229 => 104,  226 => 103,  224 => 102,  215 => 95,  208 => 92,  204 => 90,  202 => 89,  199 => 88,  192 => 84,  188 => 82,  186 => 81,  183 => 80,  176 => 76,  172 => 74,  170 => 73,  167 => 72,  160 => 68,  156 => 66,  154 => 65,  151 => 64,  141 => 57,  127 => 45,  125 => 44,  122 => 43,  115 => 39,  111 => 38,  107 => 36,  105 => 35,  98 => 31,  95 => 30,  91 => 28,  85 => 26,  83 => 25,  80 => 24,  70 => 21,  67 => 20,  57 => 17,  54 => 16,  51 => 15,  47 => 12,  45 => 11,  42 => 10,  34 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
