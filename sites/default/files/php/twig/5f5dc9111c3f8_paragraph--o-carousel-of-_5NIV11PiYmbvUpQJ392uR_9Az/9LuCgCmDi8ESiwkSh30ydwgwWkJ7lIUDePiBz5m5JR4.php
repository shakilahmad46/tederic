<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/tederic/templates/paragraph/paragraph--o-carousel-of-images.html.twig */
class __TwigTemplate_28ba2fff2441f3b69a7fb7f000c790009ca0e26e001b2699c166c337c96fc8ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 7, "if" => 8];
        $filters = ["first" => 7, "escape" => 9, "length" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['first', 'escape', 'length'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "   <div class=\"automo lens-sec1 news-in\">
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"slider-area-main\">
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
   ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "field_carousel_image", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 8
                echo "      <div class=\"item ";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo " active ";
                }
                echo "\">
        ";
                // line 9
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
                echo "
      </div>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>

    <!-- Left and right controls -->
    <!--<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <img src=\"images/slarrow-left.png\">
    </a>-->
   <div class=\"lens-arow\">
    <ol class=\"carousel-indicators\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "field_carousel_image", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 21
                echo "    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo " active ";
                }
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])), "html", null, true);
                echo " / ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($context["loop"])) - 1), "html", null, true);
                echo "</li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "   </ol>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <img src=\"images/slarrow-right.png\">
    </a>
   </div>
  </div>
  </div>
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/tederic/templates/paragraph/paragraph--o-carousel-of-images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 23,  115 => 21,  104 => 20,  94 => 12,  81 => 9,  74 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("   <div class=\"automo lens-sec1 news-in\">
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"slider-area-main\">
  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
   {% for key, item in content.field_carousel_image if key|first != '#' %}
      <div class=\"item {% if loop.first %} active {% endif %}\">
        {{item}}
      </div>
  {% endfor %}
    </div>

    <!-- Left and right controls -->
    <!--<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
      <img src=\"images/slarrow-left.png\">
    </a>-->
   <div class=\"lens-arow\">
    <ol class=\"carousel-indicators\">
    {% for key, item in content.field_carousel_image if key|first != '#' %}
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"{% if loop.first %} active {% endif %}\">{{ loop.index }} / {{ loop|length - 1}}</li>
    {% endfor %}
   </ol>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
      <img src=\"images/slarrow-right.png\">
    </a>
   </div>
  </div>
  </div>
      </div>
    </div>
</div>", "themes/tederic/templates/paragraph/paragraph--o-carousel-of-images.html.twig", "C:\\xampp\\htdocs\\tederic\\themes\\tederic\\templates\\paragraph\\paragraph--o-carousel-of-images.html.twig");
    }
}
