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

/* user/pridat.html.twig */
class __TwigTemplate_35992b46e3fc482d65e0543460a861a5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pridat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/pridat.html.twig", 1);
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
    <div class=\"container text-center\" style=\"padding-top: 10rem; align-items: center; padding-right: 30rem; padding-left: 30rem;\" >
        <h1>Přidat Yetiho</h1>
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["yeti_form"]) || array_key_exists("yeti_form", $context) ? $context["yeti_form"] : (function () { throw new RuntimeError('Variable "yeti_form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["yeti_form"]) || array_key_exists("yeti_form", $context) ? $context["yeti_form"] : (function () { throw new RuntimeError('Variable "yeti_form" does not exist.', 8, $this->source); })()), 'form');
        echo "
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["yeti_form"]) || array_key_exists("yeti_form", $context) ? $context["yeti_form"] : (function () { throw new RuntimeError('Variable "yeti_form" does not exist.', 9, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/pridat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  68 => 8,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container text-center\" style=\"padding-top: 10rem; align-items: center; padding-right: 30rem; padding-left: 30rem;\" >
        <h1>Přidat Yetiho</h1>
        {{ form_start(yeti_form) }}
        {{ form(yeti_form) }}
        {{ form_end(yeti_form) }}
    </div>

{% endblock %}", "user/pridat.html.twig", "C:\\Users\\aless\\yetinder\\templates\\user\\pridat.html.twig");
    }
}
