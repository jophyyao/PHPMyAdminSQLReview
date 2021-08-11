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

/* footer.twig */
class __TwigTemplate_63b890d6af6a6cace7ee82545e7fad36bb29f9f5374c65560227eab463a02942 extends \Twig\Template
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
            echo "  </div>
";
        }
        // line 4
        if (( !($context["is_ajax"] ?? null) &&  !($context["is_minimal"] ?? null))) {
            // line 5
            echo "  ";
            echo ($context["self_link"] ?? null);
            echo "

";
            // line 10
            echo "
  ";
            // line 11
            echo ($context["scripts"] ?? null);
            echo "

  ";
            // line 13
            if (($context["is_demo"] ?? null)) {
                // line 14
                echo "    <div id=\"pma_demo\">
      ";
                // line 15
                echo ($context["demo_message"] ?? null);
                echo "
    </div>
  ";
            }
            // line 18
            echo "
  ";
            // line 19
            echo ($context["footer"] ?? null);
            echo "
";
        }
        // line 21
        if ( !($context["is_ajax"] ?? null)) {
            // line 22
            echo "  </body>
</html>
";
        }
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  78 => 21,  73 => 19,  70 => 18,  64 => 15,  61 => 14,  59 => 13,  54 => 11,  51 => 10,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.twig", "/var/www/html/templates/footer.twig");
    }
}
