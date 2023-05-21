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

/* user/index.html.twig */
class __TwigTemplate_c8f23797de1974d3c5ddb8d72111aab5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
    <div class=\"container text-center\" >   
        <h1>Domovská stránka</h1>
        <p class=\"fs-2\">10 nejlépe hodnocených Yeti</p>
        <table class=\"table table-hover\" align=\"center\">
        <tr>
            <th>Jméno</th>
            <th>Bydliště</th>
            <th>Věk</th>
            <th>Výška</th>
            <th>Hodnocení</th>
        </tr>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter($this->env, (isset($context["yetipole"]) || array_key_exists("yetipole", $context) ? $context["yetipole"] : (function () { throw new RuntimeError('Variable "yetipole" does not exist.', 16, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 16, $this->source); })()), "Hodnoceni", [], "any", false, false, false, 16) < twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 16, $this->source); })()), "Hodnoceni", [], "any", false, false, false, 16)); }), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["yeti"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["yeti"], "getName", [], "method", false, false, false, 18), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["yeti"], "getBydliste", [], "method", false, false, false, 19), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["yeti"], "getVek", [], "method", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["yeti"], "getVyska", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["yeti"], "getHodnoceni", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yeti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </table>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  77 => 17,  73 => 16,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container text-center\" >   
        <h1>Domovská stránka</h1>
        <p class=\"fs-2\">10 nejlépe hodnocených Yeti</p>
        <table class=\"table table-hover\" align=\"center\">
        <tr>
            <th>Jméno</th>
            <th>Bydliště</th>
            <th>Věk</th>
            <th>Výška</th>
            <th>Hodnocení</th>
        </tr>
        {% for yeti in yetipole|sort((a, b) => a.Hodnoceni < b.Hodnoceni)|slice(0, 10) %}
        <tr>
            <td>{{ yeti.getName() }}</td>
            <td>{{ yeti.getBydliste() }}</td>
            <td>{{ yeti.getVek() }}</td>
            <td>{{ yeti.getVyska() }}</td>
            <td>{{ yeti.getHodnoceni() }}</td>
        </tr>
        {% endfor %}
        </table>
    </div>

{% endblock %}", "user/index.html.twig", "C:\\Users\\aless\\yetinder\\templates\\user\\index.html.twig");
    }
}
