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

/* themes/tederic/templates/page.html.twig */
class __TwigTemplate_63e24e4be603c4a82a3bfd50441bf5e55da903d15de5a0b16e6a96d7014143e4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16, "block" => 30];
        $filters = ["escape" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
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
        echo "
<div class=\"main-header\">
    <div class=\"menu-area\">
        <nav class=\"navbar\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>                        
                    </button>
                    ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "site_branding", [])), "html", null, true);
        echo "
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <div class=\"top-bar text-right\">
                        ";
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "top_header_menu", [])) {
            // line 17
            echo "                            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_menu", [])), "html", null, true);
            echo "
                        ";
        }
        // line 19
        echo "                    </div>
                    ";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 21
            echo "                        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
                    ";
        }
        // line 23
        echo "                </div>
            </div>
        </nav>
    </div>
</div>

";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
<footer>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 39
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
            ";
        }
        // line 41
        echo "        </div>
        <div class=\"row\">
            ";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 44
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
            ";
        }
        // line 46
        echo "        </div>
    </div>
</footer>
<div class=\"model-hm\">
    <!-- Button trigger modal -->
    <button type=\"button\" class=\"btn btn-primary posit\" data-toggle=\"modal\" data-target=\"#exampleModal\">
    Contact
    </button>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Get in touch</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label> First Name*
                            <input type=\"text\" name=\"first name\">
                            </label>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label> Last Name*
                            <input type=\"text\" name=\"last name\">
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label> Email*
                            <input type=\"email\" name=\"email\">
                            </label>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label>
                                Country
                                <select>
                                    <option></option>
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                </select>
                            </label>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label> Company
                            <input type=\"text\" name=\"company\">
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label>
                                Area of interest*
                                <select>
                                    <option>Product-Injection Molding Machine</option>
                                    <option>Product-Injection Molding Machine</option>
                                    <option>Product-Injection Molding Machine</option>
                                    <option>Product-Injection Molding Machine</option>
                                </select>
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label> Description
                            <textarea placeholder=\"Please share some further details...\"></textarea>
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label class=\"no-full\"> 
                            <input type=\"checkbox\" name=\"\">
                            I accept the processing of my personal data provide here.
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <button class=\"btn-gen\">Submit Request <span><i class=\"fa fa-angle-right\"></i></button>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"search\">
    <button type=\"button\" class=\"close\">×</button>
    <form action=\"/tederic/search/node\">
        <input type=\"search\" value=\"\" name=\"keys\" placeholder=\"Type Keyword's Here\" />
        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </form>
</div>


";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        // line 31
        echo "  <a id=\"main-content\"></a>
  ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/tederic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 32,  232 => 31,  229 => 30,  131 => 46,  125 => 44,  123 => 43,  119 => 41,  113 => 39,  111 => 38,  105 => 34,  103 => 30,  95 => 23,  89 => 21,  87 => 20,  84 => 19,  78 => 17,  76 => 16,  69 => 12,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"main-header\">
    <div class=\"menu-area\">
        <nav class=\"navbar\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>                        
                    </button>
                    {{ page.site_branding }}
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <div class=\"top-bar text-right\">
                        {% if page.top_header_menu %}
                            {{ page.top_header_menu }}
                        {% endif %}
                    </div>
                    {% if page.navigation %}
                        {{ page.navigation }}
                    {% endif %}
                </div>
            </div>
        </nav>
    </div>
</div>

{# Content #}
{% block content %}
  <a id=\"main-content\"></a>
  {{ page.content }}
{% endblock %}

<footer>
    <div class=\"container\">
        <div class=\"row\">
            {% if page.footer %}
                {{ page.footer }}
            {% endif %}
        </div>
        <div class=\"row\">
            {% if page.footer_bottom %}
                {{ page.footer_bottom }}
            {% endif %}
        </div>
    </div>
</footer>
<div class=\"model-hm\">
    <!-- Button trigger modal -->
    <button type=\"button\" class=\"btn btn-primary posit\" data-toggle=\"modal\" data-target=\"#exampleModal\">
    Contact
    </button>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Get in touch</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label> First Name*
                            <input type=\"text\" name=\"first name\">
                            </label>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label> Last Name*
                            <input type=\"text\" name=\"last name\">
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label> Email*
                            <input type=\"email\" name=\"email\">
                            </label>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label>
                                Country
                                <select>
                                    <option></option>
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                    <option>lorem ipsum</option>
                                </select>
                            </label>
                        </div>
                        <div class=\"col-md-6 col-sm-12 col-xs-12\">
                            <label> Company
                            <input type=\"text\" name=\"company\">
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label>
                                Area of interest*
                                <select>
                                    <option>Product-Injection Molding Machine</option>
                                    <option>Product-Injection Molding Machine</option>
                                    <option>Product-Injection Molding Machine</option>
                                    <option>Product-Injection Molding Machine</option>
                                </select>
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label> Description
                            <textarea placeholder=\"Please share some further details...\"></textarea>
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <label class=\"no-full\"> 
                            <input type=\"checkbox\" name=\"\">
                            I accept the processing of my personal data provide here.
                            </label>
                        </div>
                        <div class=\"col-md-12\">
                            <button class=\"btn-gen\">Submit Request <span><i class=\"fa fa-angle-right\"></i></button>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"search\">
    <button type=\"button\" class=\"close\">×</button>
    <form action=\"/tederic/search/node\">
        <input type=\"search\" value=\"\" name=\"keys\" placeholder=\"Type Keyword's Here\" />
        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </form>
</div>


", "themes/tederic/templates/page.html.twig", "C:\\xampp\\htdocs\\tederic\\themes\\tederic\\templates\\page.html.twig");
    }
}
