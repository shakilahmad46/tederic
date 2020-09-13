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

/* themes/tederic/templates/menu/menu--social-link.html.twig */
class __TwigTemplate_7c197558ae93cb35e4c5d201694d6e59c1f6624ab2a72788f21bf41e506bf8fb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1, "for" => 3, "set" => 5];
        $filters = ["split" => 5, "escape" => 15];
        $functions = ["link" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['split', 'escape'],
                ['link']
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
        echo "  ";
        if (($context["items"] ?? null)) {
            // line 2
            echo "    <ul class=\"social-footer\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "      ";
                // line 5
                $context["item_classes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "getOption", [0 => "container_attributes"], "method"), "class", [])), " ");
                // line 7
                echo "      ";
                // line 8
                $context["item_classes"] = [0 => ((($this->getAttribute(                // line 9
$context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) ? ("expanded dropdown") : ("")), 1 => (($this->getAttribute(                // line 10
$context["item"], "in_active_trail", [])) ? ("active active-trail") : ("")), 2 => (($this->getAttribute(                // line 11
$context["loop"], "first", [])) ? ("first") : ("")), 3 => (($this->getAttribute(                // line 12
$context["loop"], "last", [])) ? ("last") : (""))];
                // line 15
                echo "      <li";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                echo ">
        ";
                // line 16
                $context["link_title"] = $this->getAttribute($context["item"], "title", []);
                // line 17
                echo "        ";
                $context["link_attributes"] = $this->getAttribute($context["item"], "link_attributes", []);
                // line 18
                echo "        ";
                if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", [])) && $this->getAttribute($context["item"], "below", []))) {
                    // line 19
                    echo "          ";
                    ob_start();
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), "html", null, true);
                    echo " <span class=\"caret\"></span>";
                    $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 20
                    echo "          ";
                    $context["link_attributes"] = $this->getAttribute($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => "dropdown-toggle"], "method"), "setAttribute", [0 => "data-toggle", 1 => "dropdown"], "method");
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "        ";
                // line 23
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("active-trail") : (""))], "method"))), "html", null, true);
                echo "
        ";
                // line 24
                if ($this->getAttribute($context["item"], "below", [])) {
                    // line 25
                    echo "          ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => $this->getAttribute($context["item"], "below", []), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null), 4 => ($context["dropdown_classes"] ?? null)], "method")));
                    echo "
        ";
                }
                // line 27
                echo "      </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </ul>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/tederic/templates/menu/menu--social-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 29,  130 => 27,  124 => 25,  122 => 24,  117 => 23,  115 => 22,  112 => 21,  109 => 20,  103 => 19,  100 => 18,  97 => 17,  95 => 16,  90 => 15,  88 => 12,  87 => 11,  86 => 10,  85 => 9,  84 => 8,  82 => 7,  80 => 5,  78 => 4,  61 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("  {% if items %}
    <ul class=\"social-footer\">
    {% for item in items %}
      {%
        set item_classes = item.url.getOption('container_attributes').class | split(\" \")
      %}
      {%
        set item_classes = [
          item.is_expanded and item.below ? 'expanded dropdown',
          item.in_active_trail ? 'active active-trail',
          loop.first ? 'first',
          loop.last ? 'last',
        ]
      %}
      <li{{ item.attributes.addClass(item_classes) }}>
        {% set link_title = item.title %}
        {% set link_attributes = item.link_attributes %}
        {% if menu_level == 0 and item.is_expanded and item.below %}
          {% set link_title %}{{ link_title }} <span class=\"caret\"></span>{% endset %}
          {% set link_attributes = link_attributes.addClass('dropdown-toggle').setAttribute('data-toggle', 'dropdown') %}
        {% endif %}
        {# Must use link() here so it triggers hook_link_alter(). #}
        {{ link( link_title, item.url, link_attributes.addClass(item.in_active_trail ? 'active-trail')) }}
        {% if item.below %}
          {{ _self.menu_links(item.below, attributes.removeClass(classes), menu_level + 1, classes, dropdown_classes) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}", "themes/tederic/templates/menu/menu--social-link.html.twig", "C:\\xampp\\htdocs\\tederic\\themes\\tederic\\templates\\menu\\menu--social-link.html.twig");
    }
}
