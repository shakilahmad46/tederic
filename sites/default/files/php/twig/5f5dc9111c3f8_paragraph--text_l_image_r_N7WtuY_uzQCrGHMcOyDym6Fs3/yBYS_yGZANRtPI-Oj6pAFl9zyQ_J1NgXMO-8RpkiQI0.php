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

/* themes/tederic/templates/paragraph/paragraph--text_l_image_r_section_events_.html.twig */
class __TwigTemplate_24633bff7083a248334955ed270d554c844aa92205027043243a96b9910f73ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["escape" => 6];
        $functions = ["file_url" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['file_url']
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
        $context["img"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_image", []), "entity", []), "fileuri", []))]);
        // line 2
        echo "
   <div class=\"row\">
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-5 col-sm-12 col-xs-12\">
    <h3>";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_subtitle_text", [])), "html", null, true);
        echo "</h3>

";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description", [])), "html", null, true);
        echo "

    </div>
    <div class=\"col-md-5 col-sm-12 col-xs-12\">
        <img src=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null)), "html", null, true);
        echo "\" alt=\"news-in-2\">
    </div>
    <div class=\"col-md-1\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/tederic/templates/paragraph/paragraph--text_l_image_r_section_events_.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  68 => 8,  63 => 6,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set img = file_url(paragraph.field_image.entity.fileuri) %}

   <div class=\"row\">
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-5 col-sm-12 col-xs-12\">
    <h3>{{ content.field_subtitle_text }}</h3>

{{ content.field_description }}

    </div>
    <div class=\"col-md-5 col-sm-12 col-xs-12\">
        <img src=\"{{ img }}\" alt=\"news-in-2\">
    </div>
    <div class=\"col-md-1\"></div>
</div>
", "themes/tederic/templates/paragraph/paragraph--text_l_image_r_section_events_.html.twig", "C:\\xampp\\htdocs\\tederic\\themes\\tederic\\templates\\paragraph\\paragraph--text_l_image_r_section_events_.html.twig");
    }
}
