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

/* themes/tederic/templates/paragraph/paragraph--big-image-section.html.twig */
class __TwigTemplate_23e737ecf067e5679f0365c9b57cbcac4f01cc324b867f7910bf9ed9fefb0ea1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["escape" => 5];
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
        $context["img"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_image_events", []), "entity", []), "fileuri", []))]);
        // line 2
        echo "
<div class=\"row text-center\">
    <div class=\"col-md-12\" id=\"postimg\">
        <img src=\"";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null)), "html", null, true);
        echo "\" alt=\"news-in\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/tederic/templates/paragraph/paragraph--big-image-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 5,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set img = file_url(paragraph.field_image_events.entity.fileuri) %}

<div class=\"row text-center\">
    <div class=\"col-md-12\" id=\"postimg\">
        <img src=\"{{ img }}\" alt=\"news-in\">
    </div>
</div>
", "themes/tederic/templates/paragraph/paragraph--big-image-section.html.twig", "C:\\xampp\\htdocs\\tederic\\themes\\tederic\\templates\\paragraph\\paragraph--big-image-section.html.twig");
    }
}
