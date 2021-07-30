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

/* navigation/tree/database_select.twig */
class __TwigTemplate_c08210a11aba838d36c8b67d792e17f60b7cd63f1fb5ffea9cb53eb0a4a845a3 extends \Twig\Template
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
        echo ($context["quick_warp"] ?? null);
        echo "

<div id=\"pma_navigation_select_database\">
  ";
        // line 4
        echo ($context["list_navigator"] ?? null);
        echo "

  <div id=\"pma_navigation_db_select\">
    <form action=\"";
        // line 7
        echo PhpMyAdmin\Url::getFromRoute("/");
        echo "\">
      ";
        // line 8
        echo PhpMyAdmin\Url::getHiddenFields(["server" => ($context["server"] ?? null)]);
        echo "

      <select name=\"db\" class=\"hide\" id=\"navi_db_select\">
        <option value=\"\" dir=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["text_dir"] ?? null), "html", null, true);
        echo "\">";
        echo _gettext("Databases");
        echo "…</option>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 13
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
            data-apath=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 14), "apath", [], "any", false, false, false, 14), "html", null, true);
            echo "\"
            data-vpath=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 15), "vpath", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
            data-pos=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 16), "pos", [], "any", false, false, false, 16), "html", null, true);
            echo "\"
            ";
            // line 17
            echo ((twig_get_attribute($this->env, $this->source, $context["option"], "isSelected", [], "any", false, false, false, 17)) ? (" selected") : (""));
            echo ">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 18), "html", null, true);
            // line 19
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </select>
    </form>
  </div>
</div>

<div id=\"pma_navigation_tree_content\">
  <ul>
    ";
        // line 28
        echo ($context["nodes"] ?? null);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "navigation/tree/database_select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  100 => 21,  93 => 19,  91 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  69 => 13,  65 => 12,  59 => 11,  53 => 8,  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/tree/database_select.twig", "/var/www/html/templates/navigation/tree/database_select.twig");
    }
}
