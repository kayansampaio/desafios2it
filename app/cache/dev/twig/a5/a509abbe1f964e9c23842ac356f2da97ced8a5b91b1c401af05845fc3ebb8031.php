<?php

/* xml/shiporders.html.twig */
class __TwigTemplate_73e91412c5a233741689c0ca5474f501683fc85d83625473b4939f743b179c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "xml/shiporders.html.twig", 1);
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
        $__internal_57ad234ed384c4b74c990a8b1599c396714da6edfb2c6d18b49e4514929cf07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ad234ed384c4b74c990a8b1599c396714da6edfb2c6d18b49e4514929cf07e->enter($__internal_57ad234ed384c4b74c990a8b1599c396714da6edfb2c6d18b49e4514929cf07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "xml/shiporders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ad234ed384c4b74c990a8b1599c396714da6edfb2c6d18b49e4514929cf07e->leave($__internal_57ad234ed384c4b74c990a8b1599c396714da6edfb2c6d18b49e4514929cf07e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db6466b2834b24aa6ef1a24ea3a23812932b151c14cad3af79bdb6359149fd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6466b2834b24aa6ef1a24ea3a23812932b151c14cad3af79bdb6359149fd81->enter($__internal_db6466b2834b24aa6ef1a24ea3a23812932b151c14cad3af79bdb6359149fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-header\">
        <h1>Ship orders Details </h1>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><b>Order ID:</b> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shiporders"]) || array_key_exists("shiporders", $context) ? $context["shiporders"] : (function () { throw new Twig_Error_Runtime('Variable "shiporders" does not exist.', 10, $this->getSourceContext()); })()), "getOrderid", array(), "method"), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><b>Person:</b> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shiporders"]) || array_key_exists("shiporders", $context) ? $context["shiporders"] : (function () { throw new Twig_Error_Runtime('Variable "shiporders" does not exist.', 11, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><b>Address:</b> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shiporders"]) || array_key_exists("shiporders", $context) ? $context["shiporders"] : (function () { throw new Twig_Error_Runtime('Variable "shiporders" does not exist.', 12, $this->getSourceContext()); })()), "getAddress", array(), "method"), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><b>City:</b> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shiporders"]) || array_key_exists("shiporders", $context) ? $context["shiporders"] : (function () { throw new Twig_Error_Runtime('Variable "shiporders" does not exist.', 13, $this->getSourceContext()); })()), "getCity", array(), "method"), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><b>Coutry:</b> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shiporders"]) || array_key_exists("shiporders", $context) ? $context["shiporders"] : (function () { throw new Twig_Error_Runtime('Variable "shiporders" does not exist.', 14, $this->getSourceContext()); })()), "getCountry", array(), "method"), "html", null, true);
        echo "</li>
            </ul>
        </div>
        <div class=\"col-md-9\">
            <table class=\"table table-bordered table-responsive\">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Note</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new Twig_Error_Runtime('Variable "items" does not exist.', 28, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getTitle", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getNote", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getQuantity", array(), "method"), "html", null, true);
            echo "</td>
                        <td>\$ ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getPrice", array(), "method"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_db6466b2834b24aa6ef1a24ea3a23812932b151c14cad3af79bdb6359149fd81->leave($__internal_db6466b2834b24aa6ef1a24ea3a23812932b151c14cad3af79bdb6359149fd81_prof);

    }

    public function getTemplateName()
    {
        return "xml/shiporders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  85 => 29,  81 => 28,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block body %}
    <div class=\"page-header\">
        <h1>Ship orders Details </h1>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\"><b>Order ID:</b> {{ shiporders.getOrderid() }}</li>
                <li class=\"list-group-item\"><b>Person:</b> {{ shiporders.getName() }}</li>
                <li class=\"list-group-item\"><b>Address:</b> {{ shiporders.getAddress() }}</li>
                <li class=\"list-group-item\"><b>City:</b> {{ shiporders.getCity() }}</li>
                <li class=\"list-group-item\"><b>Coutry:</b> {{ shiporders.getCountry() }}</li>
            </ul>
        </div>
        <div class=\"col-md-9\">
            <table class=\"table table-bordered table-responsive\">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Note</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                {% for i in items %}
                    <tr>
                        <td>{{ i.getTitle() }}</td>
                        <td>{{ i.getNote() }}</td>
                        <td>{{ i.getQuantity() }}</td>
                        <td>\$ {{ i.getPrice() }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "xml/shiporders.html.twig", "/home/kayan/Projetos/PHP/desafio_s2it/app/Resources/views/xml/shiporders.html.twig");
    }
}
