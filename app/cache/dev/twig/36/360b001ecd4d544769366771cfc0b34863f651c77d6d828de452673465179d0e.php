<?php

/* xml/submissions.html.twig */
class __TwigTemplate_8a45d2f9fbc84cf38cf61be358348a911ef984cb740d823479f55d22d621c328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "xml/submissions.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de94d2c46e4b5fd00f478b827ca14f69d04da6217e5cd3dc1df96dc901dc01be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de94d2c46e4b5fd00f478b827ca14f69d04da6217e5cd3dc1df96dc901dc01be->enter($__internal_de94d2c46e4b5fd00f478b827ca14f69d04da6217e5cd3dc1df96dc901dc01be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "xml/submissions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de94d2c46e4b5fd00f478b827ca14f69d04da6217e5cd3dc1df96dc901dc01be->leave($__internal_de94d2c46e4b5fd00f478b827ca14f69d04da6217e5cd3dc1df96dc901dc01be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3429d85b9dcd3186617fa1aa167a89d2edb45e1cc5b5910fd8b42462f5ae95ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3429d85b9dcd3186617fa1aa167a89d2edb45e1cc5b5910fd8b42462f5ae95ba->enter($__internal_3429d85b9dcd3186617fa1aa167a89d2edb45e1cc5b5910fd8b42462f5ae95ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-header\">
        <h1>Submissions Page</h1>
    </div>
    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Person ID</th>
                <th>Person Name</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new Twig_Error_Runtime('Variable "persons" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "getPersonid", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "getPersonname", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "getPhone1", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "getPhone2", array(), "method"), "html", null, true);
            echo "</td>
                <td width=\"100\">
                    <a href=\"/shiporders/person/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "getPersonid", array(), "method"), "html", null, true);
            echo "\" class=\"btn btn-success\">View Shiporders</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_3429d85b9dcd3186617fa1aa167a89d2edb45e1cc5b5910fd8b42462f5ae95ba->leave($__internal_3429d85b9dcd3186617fa1aa167a89d2edb45e1cc5b5910fd8b42462f5ae95ba_prof);

    }

    public function getTemplateName()
    {
        return "xml/submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  80 => 25,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block body %}
    <div class=\"page-header\">
        <h1>Submissions Page</h1>
    </div>
    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <th>Person ID</th>
                <th>Person Name</th>
                <th>Phone 1</th>
                <th>Phone 2</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for p in persons %}
            <tr>
                <td>{{ p.getPersonid() }}</td>
                <td>{{ p.getPersonname() }}</td>
                <td>{{ p.getPhone1() }}</td>
                <td>{{ p.getPhone2() }}</td>
                <td width=\"100\">
                    <a href=\"/shiporders/person/{{ p.getPersonid() }}\" class=\"btn btn-success\">View Shiporders</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "xml/submissions.html.twig", "/home/kayan/Projetos/PHP/desafio_s2it/app/Resources/views/xml/submissions.html.twig");
    }
}
