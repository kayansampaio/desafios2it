<?php

/* template.html.twig */
class __TwigTemplate_45f3c654e429fa2921b1665fd73f6b57cc057b38aa66afbd4c5c464eb24ea915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be9b5e897b7885ffad628bcf6eb5aa9411d82aea71a65d441afefbecc4d8e55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9b5e897b7885ffad628bcf6eb5aa9411d82aea71a65d441afefbecc4d8e55f->enter($__internal_be9b5e897b7885ffad628bcf6eb5aa9411d82aea71a65d441afefbecc4d8e55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <title>Upload XML</title>
        ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div class=\"container\">
          ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        </div>
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_be9b5e897b7885ffad628bcf6eb5aa9411d82aea71a65d441afefbecc4d8e55f->leave($__internal_be9b5e897b7885ffad628bcf6eb5aa9411d82aea71a65d441afefbecc4d8e55f_prof);

    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        $__internal_e00b7c43b337b672611ded63737ef3928a70737c2b57551ddf2e2ccdb6e3943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00b7c43b337b672611ded63737ef3928a70737c2b57551ddf2e2ccdb6e3943d->enter($__internal_e00b7c43b337b672611ded63737ef3928a70737c2b57551ddf2e2ccdb6e3943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_e00b7c43b337b672611ded63737ef3928a70737c2b57551ddf2e2ccdb6e3943d->leave($__internal_e00b7c43b337b672611ded63737ef3928a70737c2b57551ddf2e2ccdb6e3943d_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae011bb95e4bb1e71e53ca687ff4d25980489c05609bba3f4185e74e5f897ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae011bb95e4bb1e71e53ca687ff4d25980489c05609bba3f4185e74e5f897ac4->enter($__internal_ae011bb95e4bb1e71e53ca687ff4d25980489c05609bba3f4185e74e5f897ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae011bb95e4bb1e71e53ca687ff4d25980489c05609bba3f4185e74e5f897ac4->leave($__internal_ae011bb95e4bb1e71e53ca687ff4d25980489c05609bba3f4185e74e5f897ac4_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f03d719943baa093176cd7c10afad56de28b130df582304553ebff0343c4a51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03d719943baa093176cd7c10afad56de28b130df582304553ebff0343c4a51f->enter($__internal_f03d719943baa093176cd7c10afad56de28b130df582304553ebff0343c4a51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" />
        ";
        
        $__internal_f03d719943baa093176cd7c10afad56de28b130df582304553ebff0343c4a51f->leave($__internal_f03d719943baa093176cd7c10afad56de28b130df582304553ebff0343c4a51f_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  90 => 17,  84 => 16,  73 => 14,  63 => 9,  57 => 8,  48 => 20,  46 => 16,  43 => 15,  41 => 14,  36 => 11,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <title>Upload XML</title>
        {% block css %}
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
        <div class=\"container\">
          {% block body %}{% endblock %}
        </div>
        {% block javascripts %}
        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\" type=\"text/javascript\" />
        <script src=\"{{ asset('js/bootstrap.min.js') }}\" type=\"text/javascript\" />
        {% endblock %}
    </body>
</html>
", "template.html.twig", "/home/kayan/Projetos/PHP/desafio_s2it/app/Resources/views/template.html.twig");
    }
}
