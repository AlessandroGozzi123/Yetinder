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

/* user/yetinder.html.twig */
class __TwigTemplate_bacd18e5573054b856e5d6eb02b37c45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/yetinder.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/yetinder.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div style=\"padding-top: 10rem; text-align: center;\">
        <h1>Yetinder</h1>
        <p class=\"fs-2\">Jméno : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nahodnyYeti"]) || array_key_exists("nahodnyYeti", $context) ? $context["nahodnyYeti"] : (function () { throw new RuntimeError('Variable "nahodnyYeti" does not exist.', 7, $this->source); })()), "getName", [], "method", false, false, false, 7), "html", null, true);
        echo "</p>
        <br>
        <p class=\"fs-2\">Bydliště : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nahodnyYeti"]) || array_key_exists("nahodnyYeti", $context) ? $context["nahodnyYeti"] : (function () { throw new RuntimeError('Variable "nahodnyYeti" does not exist.', 9, $this->source); })()), "getBydliste", [], "method", false, false, false, 9), "html", null, true);
        echo "</p>
        <br>
        <p class=\"fs-2\">Věk : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nahodnyYeti"]) || array_key_exists("nahodnyYeti", $context) ? $context["nahodnyYeti"] : (function () { throw new RuntimeError('Variable "nahodnyYeti" does not exist.', 11, $this->source); })()), "getVek", [], "method", false, false, false, 11), "html", null, true);
        echo " let</p>
        <br>
        <p class=\"fs-2\">Výška : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nahodnyYeti"]) || array_key_exists("nahodnyYeti", $context) ? $context["nahodnyYeti"] : (function () { throw new RuntimeError('Variable "nahodnyYeti" does not exist.', 13, $this->source); })()), "getVyska", [], "method", false, false, false, 13), "html", null, true);
        echo " cm</p>
        <br>
        <p class=\"fs-2\">Hodnocení : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nahodnyYeti"]) || array_key_exists("nahodnyYeti", $context) ? $context["nahodnyYeti"] : (function () { throw new RuntimeError('Variable "nahodnyYeti" does not exist.', 15, $this->source); })()), "getHodnoceni", [], "method", false, false, false, 15), "html", null, true);
        echo "</p>
        <br>
        <div>
        <form method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hodnoceni");
        echo "\">
        <input type=\"hidden\" name=\"akce\" value=\"";
        // line 19
        echo 0;
        echo "\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nahodnyYeti"]) || array_key_exists("nahodnyYeti", $context) ? $context["nahodnyYeti"] : (function () { throw new RuntimeError('Variable "nahodnyYeti" does not exist.', 20, $this->source); })()), "getId", [], "method", false, false, false, 20), "html", null, true);
        echo "\" />
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">-1</button>
        </form>
        <form method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hodnoceni");
        echo "\">
        <input type=\"hidden\" name=\"akce\" value=\"";
        // line 24
        echo 1;
        echo "\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nahodnyYeti"]) || array_key_exists("nahodnyYeti", $context) ? $context["nahodnyYeti"] : (function () { throw new RuntimeError('Variable "nahodnyYeti" does not exist.', 25, $this->source); })()), "getId", [], "method", false, false, false, 25), "html", null, true);
        echo "\" />
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">+1</button>
        </form>
    </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/yetinder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 25,  108 => 24,  104 => 23,  98 => 20,  94 => 19,  90 => 18,  84 => 15,  79 => 13,  74 => 11,  69 => 9,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div style=\"padding-top: 10rem; text-align: center;\">
        <h1>Yetinder</h1>
        <p class=\"fs-2\">Jméno : {{ nahodnyYeti.getName() }}</p>
        <br>
        <p class=\"fs-2\">Bydliště : {{ nahodnyYeti.getBydliste() }}</p>
        <br>
        <p class=\"fs-2\">Věk : {{ nahodnyYeti.getVek() }} let</p>
        <br>
        <p class=\"fs-2\">Výška : {{ nahodnyYeti.getVyska() }} cm</p>
        <br>
        <p class=\"fs-2\">Hodnocení : {{ nahodnyYeti.getHodnoceni() }}</p>
        <br>
        <div>
        <form method=\"post\" action=\"{{ path('hodnoceni') }}\">
        <input type=\"hidden\" name=\"akce\" value=\"{{ 0 }}\" />
        <input type=\"hidden\" name=\"id\" value=\"{{ nahodnyYeti.getId() }}\" />
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">-1</button>
        </form>
        <form method=\"post\" action=\"{{ path('hodnoceni') }}\">
        <input type=\"hidden\" name=\"akce\" value=\"{{ 1 }}\" />
        <input type=\"hidden\" name=\"id\" value=\"{{ nahodnyYeti.getId() }}\" />
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">+1</button>
        </form>
    </div>
    </div>

{% endblock %}", "user/yetinder.html.twig", "C:\\Users\\aless\\yetinder\\templates\\user\\yetinder.html.twig");
    }
}
