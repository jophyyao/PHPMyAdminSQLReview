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

/* database/structure/add_prefix.twig */
class __TwigTemplate_a56025b908577a3de9ed9321a359bf83d18579e2eead572cb990f7c17cb9e4a6 extends \Twig\Template
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
        echo PhpMyAdmin\Url::getFromRoute("/database/structure/add-prefix-table");
        echo "\" method=\"post\">
  ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "

  <fieldset class = \"input\">
    <table class=\"pma-table\">
      <tr>
        <td>";
        // line 7
        echo _gettext("Add prefix");
        echo "</td>
        <td>
          <input type=\"text\" name=\"add_prefix\" id=\"txtPrefix\" aria-label=\"";
        // line 9
        echo _gettext("Add prefix");
        echo "\">
        </td>
      </tr>
      <tr>
    </table>
  </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "database/structure/add_prefix.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  50 => 7,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/add_prefix.twig", "/var/www/html/templates/database/structure/add_prefix.twig");
    }
}
