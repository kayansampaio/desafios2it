<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_359653bb097baa9be89b340f69cf988ac82527a94e2bb886e48d69bd928dc287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e30bfa953c2b90c7d2f176aafa59391760041d8f2226a0e7b8040ea6f5e994ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30bfa953c2b90c7d2f176aafa59391760041d8f2226a0e7b8040ea6f5e994ba->enter($__internal_e30bfa953c2b90c7d2f176aafa59391760041d8f2226a0e7b8040ea6f5e994ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30bfa953c2b90c7d2f176aafa59391760041d8f2226a0e7b8040ea6f5e994ba->leave($__internal_e30bfa953c2b90c7d2f176aafa59391760041d8f2226a0e7b8040ea6f5e994ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbc674291b572afbfc75be9220a4280cf27b90de7dc91d811256594ce981daaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc674291b572afbfc75be9220a4280cf27b90de7dc91d811256594ce981daaf->enter($__internal_fbc674291b572afbfc75be9220a4280cf27b90de7dc91d811256594ce981daaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fbc674291b572afbfc75be9220a4280cf27b90de7dc91d811256594ce981daaf->leave($__internal_fbc674291b572afbfc75be9220a4280cf27b90de7dc91d811256594ce981daaf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa8af25a6db838c8991284bdb60d2a115550c162d647995adcd53adf88c12d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8af25a6db838c8991284bdb60d2a115550c162d647995adcd53adf88c12d05->enter($__internal_aa8af25a6db838c8991284bdb60d2a115550c162d647995adcd53adf88c12d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_aa8af25a6db838c8991284bdb60d2a115550c162d647995adcd53adf88c12d05->leave($__internal_aa8af25a6db838c8991284bdb60d2a115550c162d647995adcd53adf88c12d05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc7836296e6fcbeca9b4a6bc095e70c815007a037f2c9a00d1ee31e704c42c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7836296e6fcbeca9b4a6bc095e70c815007a037f2c9a00d1ee31e704c42c5e->enter($__internal_cc7836296e6fcbeca9b4a6bc095e70c815007a037f2c9a00d1ee31e704c42c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc7836296e6fcbeca9b4a6bc095e70c815007a037f2c9a00d1ee31e704c42c5e->leave($__internal_cc7836296e6fcbeca9b4a6bc095e70c815007a037f2c9a00d1ee31e704c42c5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/kayan/Projetos/PHP/desafio_s2it/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
