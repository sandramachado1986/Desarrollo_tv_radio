<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/results/value_display.twig */
class __TwigTemplate_dbdf17d4eca41b23b60ba8f02269637161ea84ecfc0bd75458f0c748327e4485 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<td class=\"left ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo ((($context["condition_field"] ?? null)) ? (" condition") : (""));
        echo "\">
    ";
        // line 2
        echo ($context["value"] ?? null);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "display/results/value_display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/value_display.twig", "/home/pino/phpmyadmin/templates/display/results/value_display.twig");
    }
}
