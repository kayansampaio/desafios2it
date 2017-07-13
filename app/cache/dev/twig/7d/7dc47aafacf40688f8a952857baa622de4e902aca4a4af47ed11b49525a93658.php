<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7249264e0eeed01765ef4babdd371e1743ad2ca9dada2510a4793981b30b4aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c43d057e7f07203ebf47d16d4073e24995b16bf7aae375774b4232f03659d2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43d057e7f07203ebf47d16d4073e24995b16bf7aae375774b4232f03659d2c7->enter($__internal_c43d057e7f07203ebf47d16d4073e24995b16bf7aae375774b4232f03659d2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43d057e7f07203ebf47d16d4073e24995b16bf7aae375774b4232f03659d2c7->leave($__internal_c43d057e7f07203ebf47d16d4073e24995b16bf7aae375774b4232f03659d2c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a67819b2afad5c23b59489bba259488835a9ab6dc9c11a4ba7dae0a1dbed37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a67819b2afad5c23b59489bba259488835a9ab6dc9c11a4ba7dae0a1dbed37f->enter($__internal_2a67819b2afad5c23b59489bba259488835a9ab6dc9c11a4ba7dae0a1dbed37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a67819b2afad5c23b59489bba259488835a9ab6dc9c11a4ba7dae0a1dbed37f->leave($__internal_2a67819b2afad5c23b59489bba259488835a9ab6dc9c11a4ba7dae0a1dbed37f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a12fae94eb9dabf85182c9c2930e41ae78f25780276ad03589fa1178b7c9c98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12fae94eb9dabf85182c9c2930e41ae78f25780276ad03589fa1178b7c9c98f->enter($__internal_a12fae94eb9dabf85182c9c2930e41ae78f25780276ad03589fa1178b7c9c98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a12fae94eb9dabf85182c9c2930e41ae78f25780276ad03589fa1178b7c9c98f->leave($__internal_a12fae94eb9dabf85182c9c2930e41ae78f25780276ad03589fa1178b7c9c98f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b765b696e8c59b3d9dcaa23d7d87f4e5b9476e04b09e82215ec2c5fc846d75fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b765b696e8c59b3d9dcaa23d7d87f4e5b9476e04b09e82215ec2c5fc846d75fe->enter($__internal_b765b696e8c59b3d9dcaa23d7d87f4e5b9476e04b09e82215ec2c5fc846d75fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b765b696e8c59b3d9dcaa23d7d87f4e5b9476e04b09e82215ec2c5fc846d75fe->leave($__internal_b765b696e8c59b3d9dcaa23d7d87f4e5b9476e04b09e82215ec2c5fc846d75fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kayan/Projetos/PHP/desafio_s2it/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
