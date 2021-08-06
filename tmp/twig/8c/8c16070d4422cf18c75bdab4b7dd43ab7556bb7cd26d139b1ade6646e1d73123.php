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

/* database/structure/change_prefix_form.twig */
class __TwigTemplate_36bb7f640749a607e7d5a96c31882a8bc8d867d678d0c06b17d03fdd58415412 extends \Twig\Template
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
        echo "<form id=\"ajax_form\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute(($context["route"] ?? null));
        echo "\" method=\"post\">
  ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "

  <fieldset class=\"input\">
    <table class=\"pma-table\">
      <tr>
        <td>";
        // line 7
        echo _gettext("From");
        echo "</td>
        <td>
          <input type=\"text\" name=\"from_prefix\" id=\"initialPrefix\">
        </td>
      </tr>
      <tr>
        <td>";
        // line 13
        echo _gettext("To");
        echo "</td>
        <td>
          <input type=\"text\" name=\"to_prefix\" id=\"newPrefix\">
        </td>
      </tr>
    </table>
  </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "database/structure/change_prefix_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  50 => 7,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/change_prefix_form.twig", "/var/www/html/templates/database/structure/change_prefix_form.twig");
    }
}
