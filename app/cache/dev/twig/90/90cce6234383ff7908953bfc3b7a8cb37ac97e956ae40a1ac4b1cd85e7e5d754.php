<?php

/* xml/index.html.twig */
class __TwigTemplate_d7fa973727184f6829f87c8448bc4a193b7988d72ab79f352bc150e5092e7df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "xml/index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d3ff0b5b42509ca3b4d9e1bd569ed0dcdcbf802dba66db5cb6c4444f3f972a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3ff0b5b42509ca3b4d9e1bd569ed0dcdcbf802dba66db5cb6c4444f3f972a8->enter($__internal_8d3ff0b5b42509ca3b4d9e1bd569ed0dcdcbf802dba66db5cb6c4444f3f972a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "xml/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3ff0b5b42509ca3b4d9e1bd569ed0dcdcbf802dba66db5cb6c4444f3f972a8->leave($__internal_8d3ff0b5b42509ca3b4d9e1bd569ed0dcdcbf802dba66db5cb6c4444f3f972a8_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_29695e4b51fb2aaca1b2bdafb2db9f26902da6e573c2b582ef9695081b0c6262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29695e4b51fb2aaca1b2bdafb2db9f26902da6e573c2b582ef9695081b0c6262->enter($__internal_29695e4b51fb2aaca1b2bdafb2db9f26902da6e573c2b582ef9695081b0c6262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sweetalert2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
        .box__dragndrop,
        .box__uploading,
        .box__success,
        .box__error {
            display: none;
        }

        .box {
            height: 150px;
        }

        .box label{
            display: block;
            text-align: center;
            font-size: 26px;
            line-height: 150px;
        }

        .box.has-advanced-upload {
            background-color: white;
            outline: 3px dashed #888888;
        }

        .box.has-advanced-upload .box__dragndrop {
            display: inline;
        }

        .box.is-dragover {
            background-color: #9acfea;
        }

        .box.is-uploading .box__input {
            visibility: hidden;
        }

        .box.is-uploading .box__uploading {
            display: block;
        }

        .box__button {
            display: none;
        }

        a.submissions {
            margin-top: 20px;
        }

        #file {
            display: none;
        }

    </style>
";
        
        $__internal_29695e4b51fb2aaca1b2bdafb2db9f26902da6e573c2b582ef9695081b0c6262->leave($__internal_29695e4b51fb2aaca1b2bdafb2db9f26902da6e573c2b582ef9695081b0c6262_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0a51f4d9ed92f56248c22f544c3e0d49064d92c17344f8fe1cde0a9791e83f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a51f4d9ed92f56248c22f544c3e0d49064d92c17344f8fe1cde0a9791e83f9->enter($__internal_b0a51f4d9ed92f56248c22f544c3e0d49064d92c17344f8fe1cde0a9791e83f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "
    <div class=\"page-header\">
        <h1>Welcome to XML Load Page</h1>
        <small>Created by: Pedro Kayan</small>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"/upload\" class=\"box\" method=\"post\" enctype=\"multipart/form-data\">
                ";
        // line 71
        echo "                    ";
        // line 72
        echo "                    ";
        // line 73
        echo "                ";
        // line 74
        echo "                <div class=\"box__input\">
                    <input type=\"file\" name=\"files[]\" id=\"file\" data-multiple-caption=\"{count} files selected\" multiple>
                    <label for=\"file\"><strong>Choose a file</strong><span class=\"box__dragndrop\"> or drag it here</span>.</label>
                    <button type=\"submit\" class=\"btn btn-primary btn-lg box__button\">Send File</button>
                </div>
                <div class=\"box__uploading\">Uploading&hellip;</div>
                <div class=\"box__success\">Done!</div>
                <div class=\"box__error\">Error! <span></span>.</div>
            </form>
            <a href=\"/submissions\" class=\"btn btn-success btn-lg submissions\">View submissions</a>
        </div>
    </div>
";
        
        $__internal_b0a51f4d9ed92f56248c22f544c3e0d49064d92c17344f8fe1cde0a9791e83f9->leave($__internal_b0a51f4d9ed92f56248c22f544c3e0d49064d92c17344f8fe1cde0a9791e83f9_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9286417e4eef54ff20e7267f9ed0620fb8a8a555fa4505bee606e1428b4ba864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9286417e4eef54ff20e7267f9ed0620fb8a8a555fa4505bee606e1428b4ba864->enter($__internal_9286417e4eef54ff20e7267f9ed0620fb8a8a555fa4505bee606e1428b4ba864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr-custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sweetalert2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        var isAdvancedUpload = function() {
            var div = document.createElement('div');
            return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
        }();

        var \$form = \$('.box');

        if (isAdvancedUpload) {
            \$form.addClass('has-advanced-upload');

            var droppedFiles = false;

            var \$input    = \$form.find('input[type=\"file\"]'),
                \$label    = \$form.find('label'),
                showFiles = function(files) {
                    \$label.text(files.length > 1 ? (\$input.attr('data-multiple-caption') || '').replace( '{count}', files.length ) : files[ 0 ].name);
                };

            \$form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
                e.preventDefault();
                e.stopPropagation();
            })
                .on('dragover dragenter', function() {
                    \$form.addClass('is-dragover');
                })
                .on('dragleave dragend drop', function() {
                    \$form.removeClass('is-dragover');
                })
                .on('drop', function(e) {
                    droppedFiles = e.originalEvent.dataTransfer.files;
                    showFiles( droppedFiles );
                    \$form.trigger('submit');
                });

            \$input.on('change', function(e) {
                showFiles(e.target.files);
                \$form.trigger('submit');
            });

            \$form.on('submit', function(e) {
                if (\$form.hasClass('is-uploading')) return false;

                \$form.addClass('is-uploading').removeClass('is-error');

                if (isAdvancedUpload) {
                    e.preventDefault();

                    var ajaxData = new FormData(\$form.get(0));

                    if (droppedFiles) {
                        \$.each( droppedFiles, function(i, file) {
                            ajaxData.append( \$input.attr('name'), file );
                        });
                    }

                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        data: ajaxData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        complete: function() {
                            \$form.removeClass('is-uploading');
                        },
                        success: function(data) {
//                            \$form.addClass( data.success == true ? 'is-success' : 'is-error' );
//                            if (!data.success) \$errorMsg.text(data.error);
                            swal(
                                'Good job!',
                                data.message,
                                'success'
                            ).then(function(){
                                window.location.reload(true);
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal(
                                'Oops!',
                                jqXHR.responseText,
                                'error'
                            ).then(function(){
                                window.location.reload(true);
                            });;
                        }
                    });
                }
            });
        }
    </script>
";
        
        $__internal_9286417e4eef54ff20e7267f9ed0620fb8a8a555fa4505bee606e1428b4ba864->leave($__internal_9286417e4eef54ff20e7267f9ed0620fb8a8a555fa4505bee606e1428b4ba864_prof);

    }

    public function getTemplateName()
    {
        return "xml/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 91,  161 => 90,  156 => 89,  150 => 88,  131 => 74,  129 => 73,  127 => 72,  125 => 71,  115 => 62,  109 => 61,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block css %}
    {{ parent() }}
    <link href=\"{{ asset(\"css/sweetalert2.css\") }}\" rel=\"stylesheet\">
    <style type=\"text/css\">
        .box__dragndrop,
        .box__uploading,
        .box__success,
        .box__error {
            display: none;
        }

        .box {
            height: 150px;
        }

        .box label{
            display: block;
            text-align: center;
            font-size: 26px;
            line-height: 150px;
        }

        .box.has-advanced-upload {
            background-color: white;
            outline: 3px dashed #888888;
        }

        .box.has-advanced-upload .box__dragndrop {
            display: inline;
        }

        .box.is-dragover {
            background-color: #9acfea;
        }

        .box.is-uploading .box__input {
            visibility: hidden;
        }

        .box.is-uploading .box__uploading {
            display: block;
        }

        .box__button {
            display: none;
        }

        a.submissions {
            margin-top: 20px;
        }

        #file {
            display: none;
        }

    </style>
{% endblock %}

{% block body %}

    <div class=\"page-header\">
        <h1>Welcome to XML Load Page</h1>
        <small>Created by: Pedro Kayan</small>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <form action=\"/upload\" class=\"box\" method=\"post\" enctype=\"multipart/form-data\">
                {#<div class=\"form-group\">#}
                    {#<label for=\"\">Select our XML Files to Upload</label>#}
                    {#<input type=\"file\" name=\"files[]\" multiple>#}
                {#</div>#}
                <div class=\"box__input\">
                    <input type=\"file\" name=\"files[]\" id=\"file\" data-multiple-caption=\"{count} files selected\" multiple>
                    <label for=\"file\"><strong>Choose a file</strong><span class=\"box__dragndrop\"> or drag it here</span>.</label>
                    <button type=\"submit\" class=\"btn btn-primary btn-lg box__button\">Send File</button>
                </div>
                <div class=\"box__uploading\">Uploading&hellip;</div>
                <div class=\"box__success\">Done!</div>
                <div class=\"box__error\">Error! <span></span>.</div>
            </form>
            <a href=\"/submissions\" class=\"btn btn-success btn-lg submissions\">View submissions</a>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/modernizr-custom.js') }}\"></script>
    <script src=\"{{ asset('js/sweetalert2.js') }}\"></script>
    <script type=\"text/javascript\">
        var isAdvancedUpload = function() {
            var div = document.createElement('div');
            return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
        }();

        var \$form = \$('.box');

        if (isAdvancedUpload) {
            \$form.addClass('has-advanced-upload');

            var droppedFiles = false;

            var \$input    = \$form.find('input[type=\"file\"]'),
                \$label    = \$form.find('label'),
                showFiles = function(files) {
                    \$label.text(files.length > 1 ? (\$input.attr('data-multiple-caption') || '').replace( '{count}', files.length ) : files[ 0 ].name);
                };

            \$form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
                e.preventDefault();
                e.stopPropagation();
            })
                .on('dragover dragenter', function() {
                    \$form.addClass('is-dragover');
                })
                .on('dragleave dragend drop', function() {
                    \$form.removeClass('is-dragover');
                })
                .on('drop', function(e) {
                    droppedFiles = e.originalEvent.dataTransfer.files;
                    showFiles( droppedFiles );
                    \$form.trigger('submit');
                });

            \$input.on('change', function(e) {
                showFiles(e.target.files);
                \$form.trigger('submit');
            });

            \$form.on('submit', function(e) {
                if (\$form.hasClass('is-uploading')) return false;

                \$form.addClass('is-uploading').removeClass('is-error');

                if (isAdvancedUpload) {
                    e.preventDefault();

                    var ajaxData = new FormData(\$form.get(0));

                    if (droppedFiles) {
                        \$.each( droppedFiles, function(i, file) {
                            ajaxData.append( \$input.attr('name'), file );
                        });
                    }

                    \$.ajax({
                        url: \$form.attr('action'),
                        type: \$form.attr('method'),
                        data: ajaxData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        complete: function() {
                            \$form.removeClass('is-uploading');
                        },
                        success: function(data) {
//                            \$form.addClass( data.success == true ? 'is-success' : 'is-error' );
//                            if (!data.success) \$errorMsg.text(data.error);
                            swal(
                                'Good job!',
                                data.message,
                                'success'
                            ).then(function(){
                                window.location.reload(true);
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal(
                                'Oops!',
                                jqXHR.responseText,
                                'error'
                            ).then(function(){
                                window.location.reload(true);
                            });;
                        }
                    });
                }
            });
        }
    </script>
{% endblock %}
", "xml/index.html.twig", "/home/kayan/Projetos/PHP/desafio_s2it/app/Resources/views/xml/index.html.twig");
    }
}
