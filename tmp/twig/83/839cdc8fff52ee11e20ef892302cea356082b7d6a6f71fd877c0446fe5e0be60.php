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

/* login/form.twig */
class __TwigTemplate_305b1cf79147ceb7659666f3f042c18f2085106dabf9edd60604c4c818801989 extends \Twig\Template
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
        echo ($context["login_header"] ?? null);
        echo "

";
        // line 3
        if (($context["is_demo"] ?? null)) {
            // line 4
            echo "  <fieldset class=\"mb-4\">
    <legend>";
            // line 5
            echo _gettext("phpMyAdmin Demo Server");
            echo "</legend>
    ";
            // line 6
            ob_start(function () { return ''; });
            // line 7
            echo "      ";
            echo _gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.");
            // line 10
            echo "    ";
            $___internal_e6bd3700d584558193baee23aa322588c81e9047a72e34ddf330db94ae04efc8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 6
            echo sprintf($___internal_e6bd3700d584558193baee23aa322588c81e9047a72e34ddf330db94ae04efc8_, "<a href=\"url.php?url=https://demo.phpmyadmin.net/\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>");
            // line 11
            echo "  </fieldset>
";
        }
        // line 13
        echo "
";
        // line 14
        echo ($context["error_messages"] ?? null);
        echo "

";
        // line 16
        if (($context["has_languages"] ?? null)) {
            // line 17
            echo "  <div class='hide js-show'>
    ";
            // line 18
            echo ($context["language_selector"] ?? null);
            echo "
  </div>
";
        }
        // line 21
        echo "
<form method=\"post\" id=\"login_form\" action=\"index.php?route=/\" name=\"login_form\" class=\"";
        // line 23
        echo (( !($context["is_session_expired"] ?? null)) ? ("disableAjax hide ") : (""));
        echo "login js-show form-horizontal\"";
        echo (( !($context["has_autocomplete"] ?? null)) ? (" autocomplete=\"off\"") : (""));
        echo ">
  <fieldset>
    <legend class=\"col-form-label\">
      <input type=\"hidden\" name=\"set_session\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["session_id"] ?? null), "html", null, true);
        echo "\">
      ";
        // line 27
        if (($context["is_session_expired"] ?? null)) {
            // line 28
            echo "        <input type=\"hidden\" name=\"session_timedout\" value=\"1\">
      ";
        }
        // line 30
        echo "      ";
        echo _gettext("Log in");
        // line 31
        echo "      ";
        echo \PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("index");
        echo "
    </legend>

    ";
        // line 34
        if (($context["is_arbitrary_server_allowed"] ?? null)) {
            // line 35
            echo "      <div class=\"item form-row\">
        <label for=\"input_servername\" class=\"col-4 d-flex align-items-center\" title=\"";
            // line 36
            echo _gettext("You can enter hostname/IP address and port separated by space.");
            echo "\">
          ";
            // line 37
            echo _gettext("Server:");
            // line 38
            echo "        </label>
        <div class=\"col-8\">
";
            // line 41
            echo "        <input type=\"text\" name=\"pma_servername\" id=\"input_servername\" value=\"";
            echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
            echo "\" size=\"24\" class=\"textfield\" title=\"";
            // line 42
            echo _gettext("You can enter hostname/IP address and port separated by space.");
            echo "\">
        </div>
      </div>
    ";
        }
        // line 46
        echo "
    <div class=\"item form-row\">
      <label for=\"input_username\" class=\"col-4 d-flex align-items-center\">
        ";
        // line 49
        echo _gettext("Username:");
        // line 50
        echo "      </label>
      <div class=\"col-8\">
";
        // line 53
        echo "        <input type=\"text\" name=\"pma_username\" id=\"input_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "\" size=\"24\" class=\"textfield\" autocomplete=\"username\">
      </div>
    </div>

    <div class=\"item form-row\">
      <label for=\"input_password\" class=\"col-4 d-flex align-items-center\">
        ";
        // line 59
        echo _gettext("Password:");
        // line 60
        echo "      </label>
      <div class=\"col-8\">
        <input type=\"password\" name=\"pma_password\" id=\"input_password\" value=\"\" size=\"24\" class=\"textfield\" autocomplete=\"current-password\">
      </div>
    </div>

    ";
        // line 66
        if (($context["has_servers"] ?? null)) {
            // line 67
            echo "      <div class=\"item form-row\">
        <label for=\"select_server\" class=\"col-4 d-flex align-items-center\">
          ";
            // line 69
            echo _gettext("Server choice:");
            // line 70
            echo "        </label>
        <div class=\"col-8\">
          <select name=\"server\" id=\"select_server\"";
            // line 72
            echo ((($context["is_arbitrary_server_allowed"] ?? null)) ? (" onchange=\"document.forms['login_form'].elements['pma_servername'].value = ''\"") : (""));
            echo ">
            ";
            // line 73
            echo ($context["server_options"] ?? null);
            echo "
          </select>
        </div>
      </div>
    ";
        } else {
            // line 78
            echo "      <input type=\"hidden\" name=\"server\" value=\"";
            echo twig_escape_filter($this->env, ($context["server"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 80
        echo "  </fieldset>

  <fieldset class=\"tblFooters\">
    ";
        // line 83
        if (($context["has_captcha"] ?? null)) {
            // line 84
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, ($context["captcha_api"] ?? null), "html", null, true);
            echo "?hl=";
            echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
            echo "\" async defer></script>
      ";
            // line 85
            if (($context["use_captcha_checkbox"] ?? null)) {
                // line 86
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, ($context["captcha_req"] ?? null), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, ($context["captcha_key"] ?? null), "html", null, true);
                echo "\"></div>
      <input class=\"btn btn-primary\" value=\"";
                // line 87
                echo _gettext("Go");
                echo "\" type=\"submit\" id=\"input_go\">
      ";
            } else {
                // line 89
                echo "      <input class=\"btn btn-primary ";
                echo twig_escape_filter($this->env, ($context["captcha_req"] ?? null), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, ($context["captcha_key"] ?? null), "html", null, true);
                echo "\" data-callback=\"Functions_recaptchaCallback\" value=\"";
                echo _gettext("Go");
                echo "\" type=\"submit\" id=\"input_go\">
      ";
            }
            // line 91
            echo "    ";
        } else {
            // line 92
            echo "      <input class=\"btn btn-primary\" value=\"";
            echo _gettext("Go");
            echo "\" type=\"submit\" id=\"input_go\">
    ";
        }
        // line 94
        echo "    ";
        // line 95
        echo "    ";
        echo PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null), "", 0, "server");
        echo "
  </fieldset>
</form>

";
        // line 99
        if ( !twig_test_empty(($context["errors"] ?? null))) {
            // line 100
            echo "  <div id=\"pma_errors\">
    ";
            // line 101
            echo ($context["errors"] ?? null);
            echo "
  </div>
  </div>
  </div>
";
        }
        // line 106
        echo "
";
        // line 107
        echo ($context["login_footer"] ?? null);
        echo "

";
        // line 109
        echo ($context["config_footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "login/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 109,  275 => 107,  272 => 106,  264 => 101,  261 => 100,  259 => 99,  251 => 95,  249 => 94,  243 => 92,  240 => 91,  230 => 89,  225 => 87,  218 => 86,  216 => 85,  209 => 84,  207 => 83,  202 => 80,  196 => 78,  188 => 73,  184 => 72,  180 => 70,  178 => 69,  174 => 67,  172 => 66,  164 => 60,  162 => 59,  152 => 53,  148 => 50,  146 => 49,  141 => 46,  134 => 42,  130 => 41,  126 => 38,  124 => 37,  120 => 36,  117 => 35,  115 => 34,  108 => 31,  105 => 30,  101 => 28,  99 => 27,  95 => 26,  87 => 23,  84 => 21,  78 => 18,  75 => 17,  73 => 16,  68 => 14,  65 => 13,  61 => 11,  59 => 6,  56 => 10,  53 => 7,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/form.twig", "/var/www/html/templates/login/form.twig");
    }
}
