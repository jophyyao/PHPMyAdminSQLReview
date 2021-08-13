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

/* navigation/main.twig */
class __TwigTemplate_c690718f132ac5bcdf4849e07bdf6b055041c373019b53613e40e6bcf9d9a16c extends \Twig\Template
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
        if ( !($context["is_ajax"] ?? null)) {
            // line 2
            echo "  <div id=\"pma_navigation\" data-config-navigation-width=\"";
            echo twig_escape_filter($this->env, ($context["config_navigation_width"] ?? null), "html", null, true);
            echo "\">
    <div id=\"pma_navigation_resizer\"></div>
    <div id=\"pma_navigation_collapser\"></div>
    <div id=\"pma_navigation_content\">
      <div id=\"pma_navigation_header\">

        ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "is_displayed", [], "any", false, false, false, 8)) {
                // line 9
                echo "          <div id=\"pmalogo\">
            ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "has_link", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", false, false, false, 11), "#")) : ("#")), "html", null, true);
                    echo "\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "attributes", [], "any", false, false, false, 11);
                    echo ">
            ";
                }
                // line 13
                echo "            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "source", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "              <img id=\"imgpmalogo\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "source", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" alt=\"KingnetMyAdmin\" style=\"width:80%;\">
            ";
                } else {
                    // line 16
                    echo "              <h1>KingnetMyAdmin</h1>
            ";
                }
                // line 18
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "has_link", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "              </a>
            ";
                }
                // line 21
                echo "          </div>
        ";
            }
            // line 23
            echo "
        <div id=\"navipanellinks\">
          <a href=\"";
            // line 25
            echo PhpMyAdmin\Url::getFromRoute("/");
            echo "\" title=\"";
            echo _gettext("Home");
            echo "\">";
            // line 26
            echo \PhpMyAdmin\Html\Generator::getImage("b_home", _gettext("Home"));
            // line 27
            echo "</a>

          <!-- jophy logout -->
          ";
            // line 30
            if ((($context["server"] ?? null) != 0)) {
                // line 31
                echo "            <a class=\"logout disableAjax\" href=\"";
                echo PhpMyAdmin\Url::getFromRoute("/logout");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (((($context["auth_type"] ?? null) == "config")) ? (_gettext("Empty session data")) : (_gettext("Log out"))), "html", null, true);
                echo "\">";
                // line 32
                echo \PhpMyAdmin\Html\Generator::getImage("s_loggoff", (((($context["auth_type"] ?? null) == "config")) ? (_gettext("Empty session data")) : (_gettext("Log out"))));
                // line 33
                echo "</a>
          ";
            }
            // line 35
            echo "
";
            // line 39
            echo "
          <a href=\"";
            // line 40
            echo PhpMyAdmin\Util::getdocuURL(($context["is_mariadb"] ?? null));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((($context["is_mariadb"] ?? null)) ? (_gettext("MariaDB Documentation")) : (_gettext("MySQL Documentation"))), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 41
            echo \PhpMyAdmin\Html\Generator::getImage("b_sqlhelp", ((($context["is_mariadb"] ?? null)) ? (_gettext("MariaDB Documentation")) : (_gettext("MySQL Documentation"))));
            // line 42
            echo "</a>

          <a id=\"pma_navigation_settings_icon\"";
            // line 44
            echo (( !($context["is_navigation_settings_enabled"] ?? null)) ? (" class=\"hide\"") : (""));
            echo " href=\"#\" title=\"";
            echo _gettext("Navigation panel settings");
            echo "\">";
            // line 45
            echo \PhpMyAdmin\Html\Generator::getImage("s_cog", _gettext("Navigation panel settings"));
            // line 46
            echo "</a>

          <a id=\"pma_navigation_reload\" href=\"#\" title=\"";
            // line 48
            echo _gettext("Reload navigation panel");
            echo "\">";
            // line 49
            echo \PhpMyAdmin\Html\Generator::getImage("s_reload", _gettext("Reload navigation panel"));
            // line 50
            echo "</a>
        </div>

        ";
            // line 53
            if ((($context["is_servers_displayed"] ?? null) && (twig_length_filter($this->env, ($context["servers"] ?? null)) > 1))) {
                // line 54
                echo "          <div id=\"serverChoice\">
            ";
                // line 55
                echo ($context["server_select"] ?? null);
                echo "
          </div>
        ";
            }
            // line 58
            echo "
        ";
            // line 59
            echo \PhpMyAdmin\Html\Generator::getImage("ajax_clock_small", _gettext("Loading…"), ["style" => "visibility: hidden; display:none", "class" => "throbber"]);
            // line 62
            echo "
      </div>
      <div id=\"pma_navigation_tree\" class=\"list_container";
            // line 64
            echo ((($context["is_synced"] ?? null)) ? (" synced") : (""));
            echo ((($context["is_highlighted"] ?? null)) ? (" highlight") : (""));
            echo ((($context["is_autoexpanded"] ?? null)) ? (" autoexpand") : (""));
            echo "\">
";
        }
        // line 66
        echo "
";
        // line 67
        if ( !($context["navigation_tree"] ?? null)) {
            // line 68
            echo "  ";
            echo call_user_func_array($this->env->getFilter('error')->getCallable(), [_gettext("An error has occurred while loading the navigation display")]);
            echo "
";
        } else {
            // line 70
            echo "  ";
            echo ($context["navigation_tree"] ?? null);
            echo "
";
        }
        // line 72
        echo "
";
        // line 73
        if ( !($context["is_ajax"] ?? null)) {
            // line 74
            echo "      </div>

      <div id=\"pma_navi_settings_container\">
        ";
            // line 77
            if (($context["is_navigation_settings_enabled"] ?? null)) {
                // line 78
                echo "          ";
                echo ($context["navigation_settings"] ?? null);
                echo "
        ";
            }
            // line 80
            echo "      </div>
    </div>

    ";
            // line 83
            if (($context["is_drag_drop_import_enabled"] ?? null)) {
                // line 84
                echo "      <div class=\"pma_drop_handler\">
        ";
                // line 85
                echo _gettext("Drop files here");
                // line 86
                echo "      </div>
      <div class=\"pma_sql_import_status\">
        <h2>
          ";
                // line 89
                echo _gettext("SQL upload");
                // line 90
                echo "          ( <span class=\"pma_import_count\">0</span> )
          <span class=\"close\">x</span>
          <span class=\"minimize\">-</span>
        </h2>
        <div></div>
      </div>
    ";
            }
            // line 97
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "navigation/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 97,  237 => 90,  235 => 89,  230 => 86,  228 => 85,  225 => 84,  223 => 83,  218 => 80,  212 => 78,  210 => 77,  205 => 74,  203 => 73,  200 => 72,  194 => 70,  188 => 68,  186 => 67,  183 => 66,  176 => 64,  172 => 62,  170 => 59,  167 => 58,  161 => 55,  158 => 54,  156 => 53,  151 => 50,  149 => 49,  146 => 48,  142 => 46,  140 => 45,  135 => 44,  131 => 42,  129 => 41,  124 => 40,  121 => 39,  118 => 35,  114 => 33,  112 => 32,  106 => 31,  104 => 30,  99 => 27,  97 => 26,  92 => 25,  88 => 23,  84 => 21,  80 => 19,  77 => 18,  73 => 16,  67 => 14,  64 => 13,  56 => 11,  54 => 10,  51 => 9,  49 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/main.twig", "/var/www/html/templates/navigation/main.twig");
    }
}
