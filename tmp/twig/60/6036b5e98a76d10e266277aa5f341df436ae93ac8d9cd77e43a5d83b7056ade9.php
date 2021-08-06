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

/* server/replication/master_add_slave_user.twig */
class __TwigTemplate_892b1d842e55a0a54c21c30d96366dfc66af1d7d98d30e9f6772ba16c27960ad extends \Twig\Template
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
        echo "<div id=\"master_addslaveuser_gui\">
  <form action=\"";
        // line 2
        echo PhpMyAdmin\Url::getFromRoute("/server/privileges");
        echo "\" method=\"post\" autocomplete=\"off\" id=\"addUsersForm\">
    ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs("", "");
        echo "

    <fieldset id=\"fieldset_add_user_login\">
      <legend>";
        // line 6
        echo _gettext("Add slave replication user");
        echo "</legend>

      <input type=\"hidden\" name=\"grant_count\" value=\"25\">
      <input type=\"hidden\" name=\"createdb\" id=\"createdb_0\" value=\"0\">
      ";
        // line 11
        echo "      <input type=\"hidden\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\">
      <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">

      <div class=\"item\">
        <label for=\"select_pred_username\">
          ";
        // line 16
        echo _gettext("User name:");
        // line 17
        echo "        </label>
        <span class=\"options\">
          <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
        // line 19
        echo _gettext("User name");
        echo "\">
            <option value=\"any\"";
        // line 20
        echo (((($context["predefined_username"] ?? null) == "any")) ? (" selected") : (""));
        echo ">";
        echo _gettext("Any user");
        echo "</option>
            <option value=\"userdefined\"";
        // line 21
        echo (((($context["predefined_username"] ?? null) == "userdefined")) ? (" selected") : (""));
        echo ">";
        echo _gettext("Use text field:");
        echo "</option>
          </select>
        </span>
        <input type=\"text\" name=\"username\" id=\"pma_username\" maxlength=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["username_length"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo _gettext("User name");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\">
      </div>

      <div class=\"item\">
        <label for=\"select_pred_hostname\">
          ";
        // line 29
        echo _gettext("Host:");
        // line 30
        echo "        </label>
        <span class=\"options\">
          <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
        // line 32
        echo _gettext("Host");
        echo "\"";
        // line 33
        if ( !(null === ($context["this_host"] ?? null))) {
            echo " data-thishost=\"";
            echo twig_escape_filter($this->env, ($context["this_host"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
            <option value=\"any\"";
        // line 34
        echo (((($context["predefined_hostname"] ?? null) == "any")) ? (" selected") : (""));
        echo ">";
        echo _gettext("Any host");
        echo "</option>
            <option value=\"localhost\"";
        // line 35
        echo (((($context["predefined_hostname"] ?? null) == "localhost")) ? (" selected") : (""));
        echo ">";
        echo _gettext("Local");
        echo "</option>
            ";
        // line 36
        if ( !(null === ($context["this_host"] ?? null))) {
            // line 37
            echo "              <option value=\"thishost\"";
            echo (((($context["predefined_hostname"] ?? null) == "thishost")) ? (" selected") : (""));
            echo ">";
            echo _gettext("This host");
            echo "</option>
            ";
        }
        // line 39
        echo "            <option value=\"hosttable\"";
        echo (((($context["predefined_hostname"] ?? null) == "hosttable")) ? (" selected") : (""));
        echo ">";
        echo _gettext("Use host table");
        echo "</option>
            <option value=\"userdefined\"";
        // line 40
        echo (((($context["predefined_hostname"] ?? null) == "userdefined")) ? (" selected") : (""));
        echo ">";
        echo _gettext("Use text field:");
        echo "</option>
          </select>
        </span>
        <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["hostname_length"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo _gettext("Host");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 44
        echo \PhpMyAdmin\Html\Generator::showHint(_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        echo "
      </div>

      <div class=\"item\">
        <label for=\"select_pred_password\">
          ";
        // line 49
        echo _gettext("Password:");
        // line 50
        echo "        </label>
        <span class=\"options\">
          <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
        // line 52
        echo _gettext("Password");
        echo "\">
            <option value=\"none\"";
        // line 53
        echo ((($context["has_username"] ?? null)) ? (" selected") : (""));
        echo ">";
        echo _gettext("No password");
        echo "</option>
            <option value=\"userdefined\"";
        // line 54
        echo (( !($context["has_username"] ?? null)) ? (" selected") : (""));
        echo ">";
        echo _gettext("Use text field:");
        echo "</option>
          </select>
        </span>
        <input type=\"password\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
        // line 57
        echo _gettext("Password");
        echo "\">
      </div>

      <div class=\"item\">
        <label for=\"text_pma_pw2\">
          ";
        // line 62
        echo _gettext("Re-type:");
        // line 63
        echo "        </label>
        <span class=\"options\"></span>
        <input type=\"password\" id=\"text_pma_pw2\" name=\"pma_pw2\" title=\"";
        // line 65
        echo _gettext("Re-type");
        echo "\">
      </div>

      <div class=\"item\">
        <label for=\"button_generate_password\">
          ";
        // line 70
        echo _gettext("Generate password:");
        // line 71
        echo "        </label>
        <span class=\"options\">
          <input type=\"button\" class=\"btn btn-secondary button\" id=\"button_generate_password\" value=\"";
        // line 73
        echo _gettext("Generate");
        echo "\">
        </span>
        <input type=\"text\" name=\"generated_pw\" id=\"generated_pw\">
      </div>
    </fieldset>

    <fieldset id=\"fieldset_user_privtable_footer\" class=\"tblFooters\">
      <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
        // line 81
        echo _gettext("Go");
        echo "\">
    </fieldset>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/replication/master_add_slave_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 81,  222 => 73,  218 => 71,  216 => 70,  208 => 65,  204 => 63,  202 => 62,  194 => 57,  186 => 54,  180 => 53,  176 => 52,  172 => 50,  170 => 49,  162 => 44,  154 => 43,  146 => 40,  139 => 39,  131 => 37,  129 => 36,  123 => 35,  117 => 34,  109 => 33,  106 => 32,  102 => 30,  100 => 29,  88 => 24,  80 => 21,  74 => 20,  70 => 19,  66 => 17,  64 => 16,  57 => 11,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/replication/master_add_slave_user.twig", "/var/www/html/templates/server/replication/master_add_slave_user.twig");
    }
}
